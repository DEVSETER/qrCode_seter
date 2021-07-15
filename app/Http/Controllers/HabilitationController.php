<?php

namespace App\Http\Controllers;

use App\Models\Habilitation;
use App\Models\HabilitationPersonnel;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HabilitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('success_message')){
            Alert::success('Réussi', session('success_message'));
        }
        $habilitations = Habilitation::all();
        return view('habilitations.index', compact('habilitations'));
    }

    //Show deleted records
    public function showDeletedRecords(){
        if (session('success_message')){
            Alert::success('Réussi', session('success_message'));
        }
        $habilitations = Habilitation::onlyTrashed()->get();
        return view('habilitations.deleted-list', compact('habilitations'));
    }

    //Restore record
    public function restoreHabilitation($id){
        $habilitation = Habilitation::withTrashed()->findOrFail($id);
        $habilitation->restore();

        return redirect()->route('habilitation.deletedRecords')->withSuccessMessage('Habilitation '. $habilitation->code. ' restauré avec succès');;
    }

    public function aboutToExpire() {
        $current_date = Carbon::now();
        $date = Carbon::parse($current_date)->addMonths(6);
        $test = HabilitationPersonnel::whereDate('date_fin_validite', '<=', $date)->get();
        //return $test;
        $values = [];
        foreach ($test as $item){
            $habilitation = Habilitation::find($item->habilitation_id);
            $agent = Personnel::find($item->personnel_id);
            $obj = (object)['id' => $item->id, 'dateObtention' => $item->date_obtention, 'dateFinValidite' => $item->date_fin_validite,
                'codeHabilitation' => $habilitation->code, 'libelleHabilitation' => $habilitation->libelle, 'prenom' => $agent->prenom,
                'nom' => $agent->nom, 'matricule' => $agent->matricule, 'direction' => $agent->direction, 'fonction' => $agent->fonction];
            array_push($values, $obj);
        }
        //return $values;

        return view('habilitations.about-to-expire', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habilitations.create');
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
            'code' => 'required|unique:habilitations| max: 50',
            'libelle' => 'required|max:100'

        ]);

        $habilitation = new Habilitation();
        $habilitation->code = $request->code;
        $habilitation->libelle = $request->libelle;

        $habilitation->save();

        return redirect()->route('habilitations.index')->withSuccessMessage( $habilitation->libelle.' '.'a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habilitation = Habilitation::findOrFail($id);
        return view('habilitations.edit', compact('habilitation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $habilitation = Habilitation::find($request->hab);
        $habilitation->libelle = $request->libelle;
        $habilitation->save();

        return redirect()->route('habilitations.index')->withSuccessMessage( $habilitation->code.' '.'a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habilitation = Habilitation::find($id);
        $habilitation->delete();
        $habsPers = HabilitationPersonnel::where(['habilitation_id' => $habilitation->id])->get();
        foreach ($habsPers as $item){
            $item->delete();
        }
        return redirect()->route('habilitations.index')->withSuccessMessage('Habilitation '.$habilitation->code. ' supprimé avec succès');
    }
}
