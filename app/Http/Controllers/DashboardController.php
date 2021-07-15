<?php

namespace App\Http\Controllers;

use App\Models\Habilitation;
use App\Models\HabilitationPersonnel;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function dashboard() {
        if (session('success_message')){
            Alert::success('Réussi', session('success_message'));
        }

        $agents = count(Personnel::all());
        $habilitations = count(Habilitation::all());

        $current_date = Carbon::now();
        $date = Carbon::parse($current_date)->addMonths(6);
        $test = HabilitationPersonnel::whereDate('date_fin_validite', '<=', $date)->get();
        $expired = count($test);

        return view('dashboard', compact('agents', 'habilitations', 'expired'));
    }
}
