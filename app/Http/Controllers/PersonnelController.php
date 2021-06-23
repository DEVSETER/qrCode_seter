<?php

namespace App\Http\Controllers;

use App\Models\Habilitation;
use App\Models\HabilitationPersonnel;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        return view('personnels.index', compact('personnels'));
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
            'matricule' => 'required| max: 50',
            'prenom' => 'required|max:50',
            'nom' => 'required| max: 50',
            'email' => 'required|email',
            'sousDirection' => 'max: 200',
            'societe' => 'max: 200',
            'direction' => 'max: 200',
            'fonction' => 'required |max: 200',

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

        $photoPath = $request->file('photo');
        //dd($photoPath);
        if ($photoPath != null) {
            $personnel->photo = $photoPath->store('public/images/photos');
        }else {
            $personnel->photo = " ";
        }
        $personnel->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

        return view('personnels.show', compact('personnel', 'habilitations'));
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



        return redirect()->route('personnels.show', [$request->personnel_id]);

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

        return redirect()->route('dashboard');
    }

    //Suspendre Habilitation Agent
    public function suspendreHabilitationAgent($id, Request $request)
    {
        $habilitationPersonnel = HabilitationPersonnel::find($id);
        $habilitationPersonnel->status = "suspendu";
        $habilitationPersonnel->save();

        return redirect()->refresh();

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

        return redirect()->route('dashboard');
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
        return redirect()->route('dashboard');

    }
}
