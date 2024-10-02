<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Habilitation;
use App\Models\HabilitationPersonnel;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HabController extends Controller
{
    /**
     * Get agent with habilitations by matricule
     */
    public function getAgentByMatricule($matricule){
        $agent = Personnel::where(['matricule' => $matricule])->first();

        if ($agent != null){
            $habAgent = HabilitationPersonnel::where(['personnel_id' => $agent->id])->get();
            $habilitations = [];
            if (count($habAgent) != 0){
                foreach ($habAgent as $item){
                    $hab = Habilitation::find($item->habilitation_id);

                    if ($item->date_fin_validite < Carbon::now()){
                        $expired = true;
                    }else {
                        $expired = false;
                    }
                    $obj = (object)['code' => $hab->code, 'libelle' => $hab->libelle,
                        'dateObtention' =>  Carbon::make($item->date_obtention)->format('d M Y'),
                        'dateFinValidite' => Carbon::make($item->date_fin_validite)->format('d M Y'),
                        'status' => $item->status, 'expired' => $expired];
                    array_push($habilitations, $obj);
                }
            }


            return ['matricule'=>$agent->matricule, 'prenom' => $agent->prenom,
                'nom' => $agent->nom,  'email' => $agent->email, 'sousDirection' => $agent->sous_direction,
                'societe' => $agent->societe, 'direction' => $agent->direction,
                'fonction' => $agent->fonction, 'habilitations' => $habilitations];


        }else {
            return ["Agent introuvable"];
        }

    }

    public function getHabilitationActions(Request $request){
        $agent = Personnel::where(['matricule' => $request->matricule])->first();
        $habilitation = Habilitation::where(['code' => $request->codeHab])->first();
        if ($agent != null && $habilitation != null){
            $habPersonnel = HabilitationPersonnel::where(['habilitation_id' => $habilitation->id, 'personnel_id' => $agent->id])->first();
            $histories = [];
            if ($habPersonnel != null && $habPersonnel->actions != null){
                foreach ($habPersonnel->actions as $item){
                    $history = (object)['action' => $item->libelle, 'acteur' => $item->acteur, 'motif' => $item->motif, 'dateAction' => $item->document];
                    array_push($histories, $history);
                }
            }


            return $histories;

        }else {
            return ["Agent introuvable"];
        }
    }
}
