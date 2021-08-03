<?php

namespace App\Http\Controllers;

use App\Mail\RenouvelerHabilitation;
use App\Mail\RetirerHabilitation;
use App\Mail\SuspendreHabilitation;
use App\Models\Habilitation;
use App\Models\HabilitationPersonnel;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function renouveler($id){
        $agentHab = HabilitationPersonnel::find($id);
        $agent = Personnel::find($agentHab->personnel_id);
        $habilitation = Habilitation::find($agentHab->habilitation_id);


        //return view('mail.renouveler', compact('agentHab', 'agent', 'habilitation'));

        Mail::to('devdia10@gmail.com')->send(new RenouvelerHabilitation($agent, $habilitation, $agentHab));

        if (Mail::failures()) {
            return redirect()->route('personnels.show', [$agent->id])->withSuccessMessage('Erreur');
        }else{
            return redirect()->route('personnels.show', [$agent->id])->withSuccessMessage('Mail envoyé avec succès');;
        }

    }


    public function suspendre($id){
        $agentHab = HabilitationPersonnel::find($id);
        $agent = Personnel::find($agentHab->personnel_id);
        $habilitation = Habilitation::find($agentHab->habilitation_id);


        //return view('mail.suspendre', compact('agentHab', 'agent', 'habilitation'));

        Mail::to('devdia10@gmail.com')->send(new SuspendreHabilitation($agent, $habilitation, $agentHab));

        if (Mail::failures()) {
            return redirect()->route('personnels.show', [$agent->id])->withSuccessMessage('Erreur');
        }else{
            return redirect()->route('personnels.show', [$agent->id])->withSuccessMessage('Mail envoyé avec succès');;
        }
    }

    public function retirer($id){
        $agentHab = HabilitationPersonnel::find($id);
        $agent = Personnel::find($agentHab->personnel_id);
        $habilitation = Habilitation::find($agentHab->habilitation_id);


        //return view('mail.retirer', compact('agentHab', 'agent', 'habilitation'));

        Mail::to('devdia10@gmail.com')->send(new RetirerHabilitation($agent, $habilitation, $agentHab));

        if (Mail::failures()) {
            return redirect()->route('personnels.show', [$agent->id])->withSuccessMessage('Erreur');
        }else{
            return redirect()->route('personnels.show', [$agent->id])->withSuccessMessage('Mail envoyé avec succès');;
        }
    }


}
