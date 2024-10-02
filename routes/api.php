<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => "ensureUserHasKey"], function () {

    Route::get('personnel/{matricule}', [\App\Http\Controllers\Apis\HabController::class, 'getAgentByMatricule']);

    Route::post('historique', [\App\Http\Controllers\Apis\HabController::class, 'getHabilitationActions']);

});




//Route::get('api/personnels', 'PersonnelController@index');

/*
Route::get('apiPersonnels', function () {
    return \App\Models\Personnel::all()->toJson();
});



Route::get('hab/{matricule}', function ($matricule) {
    $agent = \App\Models\Personnel::where(['matricule' => $matricule])->firstOrFail();
    $habAgent = \App\Models\HabilitationPersonnel::where(['personnel_id' => $agent->id])->get();
    $habilitations = [];
    foreach ($habAgent as $item){
        $hab = \App\Models\Habilitation::find($item->habilitation_id);
        if ($item->date_fin_validite < \Carbon\Carbon::now()){
            $expired = true;
        }else {
            $expired = false;
        }
        $obj = (object)['code' => $hab->code, 'libelle' => $hab->libelle,
            'dateObtention' =>  \Illuminate\Support\Carbon::make($item->date_obtention)->format('d M Y'),
            'dateFinValidite' => \Illuminate\Support\Carbon::make($item->date_fin_validite)->format('d M Y'),
            'status' => $item->status, 'expired' => $expired];
        array_push($habilitations, $obj);
    }

    $api = ['habilitations' => $habilitations];
    return $api;
});

Route::get('images/{matricule}', function ($matricule)
{
    $personnel = \App\Models\Personnel::where(['matricule' => $matricule])->firstOrFail();
    $file = \Illuminate\Support\Facades\Storage::get('public/'.$personnel->photo);
    return response($file, 200)->header('Content-Type', 'image/jpeg');
});


Route::get('personnels', function () {
    $personnels = \App\Models\Personnel::all();
    return $personnels[0]->prenom;
});
*/



