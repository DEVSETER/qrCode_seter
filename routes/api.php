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

//Route::get('api/personnels', 'PersonnelController@index');


Route::get('apiPersonnels', function () {
    return \App\Models\Personnel::all()->toJson();
});

Route::get('personnel/{matricule}', function ($matricule) {
    //return \App\Models\Personnel::findOrFail($id);
    $personnel = \App\Models\Personnel::where(['matricule' => $matricule])->firstOrFail();
    $habilitations =  $personnel->habilitations;
    //return $habilitations[0]->pivot->date_obtention;

    $habilitationArray = [];
    foreach ($habilitations as $habilitation){
        $habilitationObject = (object)['code' => $habilitation->code, 'libelle' => $habilitation->libelle,
            'dateObtention' => $habilitation->pivot->date_obtention,
            'dateFinValidite' => $habilitation->pivot->date_fin_validite];
        array_push($habilitationArray, $habilitationObject);
    }

    //return $habilitationArray;

    return ['matricule'=>$personnel->matricule, 'prenom' => $personnel->prenom,
        'nom' => $personnel->nom, 'photo' => $personnel->photo ,'telephone' => $personnel->telephone, 'email' => $personnel->email,
         'ville' => $personnel->ville, 'societe' => $personnel->societe, 'direction' => $personnel->direction,
        'fonction' => $personnel->fonction, 'habilitations' => $habilitationArray];


});

Route::get('images/{matricule}', function ($matricule)
{
    $personnel = \App\Models\Personnel::where(['matricule' => $matricule])->firstOrFail();
    $file = \Illuminate\Support\Facades\Storage::get($personnel->photo);
    return response($file, 200)->header('Content-Type', 'image/jpeg');
});

Route::get('personnels', function () {
    $personnels = \App\Models\Personnel::all();
    return $personnels[0]->prenom;
});



