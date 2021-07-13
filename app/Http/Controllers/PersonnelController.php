<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Habilitation;
use App\Models\HabilitationPersonnel;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Personnel::all();

        if (session('success_message')){
            Alert::success('Réussi', session('success_message'));
        }

        return view('personnels.index', compact('personnels'));
    }

    //Show deleted records
    public function showDeletedAgent(){
        if (session('success_message')){
            Alert::success('Réussi', session('success_message'));
        }
        $agents = Personnel::onlyTrashed()->get();
        return view('personnels.deleted-agent', compact('agents'));
    }

    //Restore Record
    public function restoreRecord($id){
        $personnel = Personnel::withTrashed()->findOrFail($id);
        $personnel->restore();

        return redirect()->route('personnel.deletedList')->withSuccessMessage('Agent '. $personnel->prenom.' '.$personnel->nom.' restauré avec succès');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'matricule' => 'required|unique:personnels|max: 50',
            'prenom' => 'required|max:50',
            'nom' => 'required| max: 50',
            'email' => 'required|email',
            'sousDirection' => 'max: 100',
            'societe' => 'max: 50',
            'direction' => 'max: 100',
            'fonction' => 'required |max: 100',

        ]);

        $personnel = new Personnel();
        $personnel->matricule = $request->matricule;
        $personnel->prenom = $request->prenom;
        $personnel->nom = $request->nom;
        $personnel->email = $request->email;
        $personnel->sous_direction = $request->sousDirection;
        $personnel->societe = $request->societe;
        $personnel->direction = $request->direction;
        $personnel->fonction = $request->fonction;

        $photo = $request->file('photo');
        //dd($photoPath);
        if ($photo != null) {
            $name = $photo->getClientOriginalName();
            $path = $photo->storeAs('ressources', $name, 'public');
            $photo->move(public_path('ressources'),$name);
            $personnel->photo = $path;
        }else {
            $personnel->photo = null;
        }
        $personnel->save();

        return redirect()->route('personnels.index')->withSuccessMessage('Agent '. $personnel->prenom.' '.$personnel->nom.' ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (session('success_message')){
            Alert::success('Réussi', session('success_message'));
        }
        $personnel = Personnel::find($id);
        $habilitationPersonnel = HabilitationPersonnel::where(['personnel_id' => $personnel->id])->get();
        $habilitations = [];
        foreach ($habilitationPersonnel as $item){
            $hab = Habilitation::find($item->habilitation_id);
            $obj = (object)['id' => $item->id, 'code' => $hab->code, 'libelle' => $hab->libelle,
                'dateObtention' => $item->date_obtention, 'dateFinValidite' => $item->date_fin_validite,
                'status' => $item->status];
            array_push($habilitations, $obj);
        }

        $actions = Action::where(['personnel' => $personnel->id])->get();

        return view('personnels.show', compact('personnel', 'habilitations', 'actions'));
    }




    public function formulaireAjoutHabilitation($id) {
        $habilitations = Habilitation::all();
        return view('personnels.ajout_habilitation', compact('habilitations', 'id'));
    }

    public function ajoutHabilitation(Request $request) {
        //return $request;

        $request->validate([
            'date_obtention' => 'required|date|before:date_fin_validite',
            'date_fin_validite' => 'required|date|after:date_obtention',
            'habilitation' => 'required'

        ]);

        $habilitationPersonnel = new HabilitationPersonnel();
        $habilitationPersonnel->habilitation_id = $request->habilitation;
        $habilitationPersonnel->personnel_id = $request->personnel_id;
        $habilitationPersonnel->date_obtention = $request->date_obtention;
        $habilitationPersonnel->date_fin_validite = $request->date_fin_validite;
        $habilitationPersonnel->status = "actif";

        $habilitationPersonnel->save();

        $personnel = Personnel::find($request->personnel_id);
        $habilitation = Habilitation::find($request->habilitation);

        $action = new Action();
        $action->habilitation_personnel_id = $habilitationPersonnel->id;
        $action->libelle = "Obtention Habilitation: ".$habilitation->libelle;
        $action->acteur = Auth::user()->prenom.' '.Auth::user()->nom;
        $action->personnel = $request->personnel_id;
        $action->save();



        return redirect()->route('personnels.show', [$request->personnel_id])->withSuccessMessage($habilitation->code.' a été affecté à l\'agent '
            .$personnel->prenom .' '.$personnel->nom .' avec succès');

    }

    //Formulaire renouvellement habilitation d'un agent
    public function formulaireRenouvellementHabilitation($id)
    {
        $habilitationPersonnel = HabilitationPersonnel::find($id);
        $date = Carbon::now()->addDays(7)->format('Y-m-d');
        return view('personnels.renouvellement-habilitation-agent', compact('habilitationPersonnel', 'date'));

    }

    //Renouvellement habilitation agent
    public function renouvelerHabilitationAgent(Request $request)
    {
        $request->validate([
            'date_fin_validite' => 'required'
        ]);

        $habilitationPersonnel = HabilitationPersonnel::find($request->habilitationPersonnel);
        $habilitationPersonnel->date_fin_validite = $request->date_fin_validite;
        $habilitationPersonnel->status = 'actif';
        $habilitationPersonnel->save();

        $habilitation = Habilitation::find($habilitationPersonnel->habilitation_id);
        $personnel = Personnel::find($habilitationPersonnel->personnel_id);

        $action = new Action();
        $action->habilitation_personnel_id = $request->habilitationPersonnel;
        $action->libelle = "Renouvellement habilitation: ".$habilitation->libelle;
        $action->acteur = Auth::user()->prenom.' '.Auth::user()->nom;
        $action->personnel = $habilitationPersonnel->personnel_id;
        $action->save();

        return redirect()->route('personnels.show', [$habilitationPersonnel->personnel_id])->withSuccessMessage($habilitation->code.' a été renouvellé pour l\'agent '
            .$personnel->prenom .' '.$personnel->nom .' avec succès');
    }

    //Suspendre Habilitation Agent
    public function suspendreHabilitationAgent(Request $request)
    {
        $habilitationPersonnel = HabilitationPersonnel::find($request->habPersonnel);
        $habilitationPersonnel->status = "suspendu";
        $habilitationPersonnel->save();

        $habilitation = Habilitation::find($habilitationPersonnel->habilitation_id);
        $personnel = Personnel::find($habilitationPersonnel->personnel_id);

        $action = new Action();
        $action->habilitation_personnel_id = $request->habPersonnel;
        $action->libelle = "Suspension habilitation: ".$habilitation->libelle;
        $action->acteur = Auth::user()->prenom.' '.Auth::user()->nom;
        $action->personnel = $habilitationPersonnel->personnel_id;
        $action->save();


        return redirect()->route('personnels.show', [$habilitationPersonnel->personnel_id])->withSuccessMessage($habilitation->code.' a été suspendu pour l\'agent '
            .$personnel->prenom .' '.$personnel->nom .' avec succès');;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        //$personnel = Personnel::findOrFail($id);
        return view('personnels.edit', compact('personnel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request-> validate([
            'prenom' => 'required|max:50',
            'nom' => 'required| max: 50',
            'email' => 'required|email',
            'telephone' => 'required ',
            'ville' => 'max: 200',
            'societe' => 'max: 200',
            'direction' => 'max: 200',
            'fonction' => 'required |max: 200',

        ]);

        $personnel = Personnel::findOrFail($request->personnel_id);
        $personnel->prenom = $request->prenom;
        $personnel->nom = $request->nom;
        $personnel->email = $request->email;
        $personnel->telephone = $request->telephone;
        $personnel->ville = $request->ville;
        $personnel->societe = $request->societe;
        $personnel->direction = $request->direction;
        $personnel->fonction = $request->fonction;

        $photoPath = $request->file('photo');
        //dd($photoPath);
        if ($photoPath != null) {
            $personnel->photo = $photoPath->store('public/images/photos');
        }

        $personnel->save();
        //dd($personnel);

        return redirect()->route('personnels.index')->withSuccessMessage('Agent '. $personnel->prenom.' '.$personnel->nom.' Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personnel = Personnel::findOrFail($id);
        $personnel->delete();
        return redirect()->route('personnels.index')->withSuccessMessage('Agent '.$personnel->prenom. ' '.$personnel->nom. ' supprimé avec succès');

    }
}
