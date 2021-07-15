<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (\Illuminate\Support\Facades\Auth::check()) {
        return redirect()->route('dashboard');
    }else {
        return redirect()->route('login');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('dashboard');
});


Route::group(['middleware' => 'auth'], function () {
    //Dashboard
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])
        ->name('dashboard');


    //Route Personnel
    Route::resource('personnels', \App\Http\Controllers\PersonnelController::class);
    Route::post('personnel/update', [\App\Http\Controllers\PersonnelController::class, 'update'])
        ->name('personnel.update');
    Route::get('personnel/destroy/{id}', [\App\Http\Controllers\PersonnelController::class, 'destroy'])
        ->name('personnel.destroy');

    Route::get('personnel/agents-supprimés', [\App\Http\Controllers\PersonnelController::class, 'showDeletedAgent'])
        ->name('personnel.deletedList');
    Route::get('personnel/restaurer/{id}', [\App\Http\Controllers\PersonnelController::class, 'restoreRecord'])
        ->name('personnel.restaurer');

//Route Ajout habilitations pour personnel
    Route::get('personnels/ajout-habilitation/{id}', [\App\Http\Controllers\PersonnelController::class, 'formulaireAjoutHabilitation'])
        ->name('personnels.formulaireAjoutHabilitation');
    Route::post('personnels/ajout-habilitation/store', [\App\Http\Controllers\PersonnelController::class, 'ajoutHabilitation'])
        ->name('personnels.ajoutHabilitation');

//Route Habilitation
    Route::resource('habilitations', \App\Http\Controllers\HabilitationController::class);
    Route::post('habilitations/modifier', [\App\Http\Controllers\HabilitationController::class, 'update'])
        ->name('habilitations.modification');

    Route::get('about-to-expire', [\App\Http\Controllers\HabilitationController::class, 'aboutToExpire'])
        ->name('habilitations.aboutToExpire');

    Route::get('habilitation/renouveler/{id}', [\App\Http\Controllers\PersonnelController::class, 'formulaireRenouvellementHabilitation'])
        ->name('habilitation.renouveler');
    Route::post('habilitation/renouveler/post', [\App\Http\Controllers\PersonnelController::class, 'renouvelerHabilitationAgent'])
        ->name('habilitation.renouvelerPost');

    Route::post('habilitation/suspendre', [\App\Http\Controllers\PersonnelController::class, 'suspendreHabilitationAgent'])
        ->name('habilitation.suspendre');

    Route::get('habilitation/delete/{id}', [\App\Http\Controllers\HabilitationController::class, 'destroy']);

    Route::get('habilitation/supprimées');

    Route::get('habilitation/habilitations-supprimées', [\App\Http\Controllers\HabilitationController::class, 'showDeletedRecords'])
        ->name('habilitation.deletedRecords');
    Route::get('habilitation/restaurer/{id}', [\App\Http\Controllers\HabilitationController::class, 'restoreHabilitation'])
        ->name('habilitation.restore');


    //Route Utilisateurs
    Route::resource('utilisateurs', \App\Http\Controllers\UtilisateursController::class);
    Route::get('utilisateur/delete/{id}', [\App\Http\Controllers\UtilisateursController::class, 'destroy']);
    Route::post('utilisateur/modifier', [\App\Http\Controllers\UtilisateursController::class, 'update'])
        ->name('utilisateur.modifier');

});




