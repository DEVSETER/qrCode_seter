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
        return redirect()->route('auth.loginSsoForm');
    }
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

    /**
     * Actions sur habilitation personnel
     */
    Route::get('personnel/habilitations/{id}/actions', [\App\Http\Controllers\PersonnelController::class, 'actionForm'])->name('personnel.actionForm');
    Route::post('personnel/habilitations/{id}/actions', [\App\Http\Controllers\PersonnelController::class, 'actionHab'])->name('personnel.actionHab');

    //Levée de retrait au poste
    Route::get('personnel/habilitations/{id}/levee-retrait', [\App\Http\Controllers\PersonnelController::class, 'leveeDeRetraitPosteForm'])->name('personnel.retraitPosteForm');
    Route::post('personnel/habilitations/{id}/levee-retrait', [\App\Http\Controllers\PersonnelController::class, 'leveeRetraitPoste'])->name('personnel.retraitPoste');

    //Levée de Suspension
    Route::get('personnel/habilitations/{id}/levee-suspension', [\App\Http\Controllers\PersonnelController::class, 'leveeSuspensionForm'])->name('personnel.retraitSuspensionForm');
    Route::post('personnel/habilitations/{id}/levee-suspension', [\App\Http\Controllers\PersonnelController::class, 'leveeSuspension'])->name('personnel.retraitSuspension');

//Route Habilitation
    Route::resource('habilitations', \App\Http\Controllers\HabilitationController::class);
    Route::post('habilitations/modifier', [\App\Http\Controllers\HabilitationController::class, 'update'])
        ->name('habilitations.modification');

    Route::get('about-to-expire', [\App\Http\Controllers\HabilitationController::class, 'aboutToExpire'])
        ->name('habilitations.aboutToExpire');

    Route::get('habilitation/renouveler/{id}', [\App\Http\Controllers\PersonnelController::class, 'formulaireRenouvellementHabilitation'])
        ->name('habilitation.renouveler');
    Route::post('habilitation/renouveler', [\App\Http\Controllers\PersonnelController::class, 'renouvelerHabilitationAgent'])
        ->name('habilitation.renouvelerPost');

    Route::post('habilitation/suspendre', [\App\Http\Controllers\PersonnelController::class, 'suspendreHabilitationAgent'])
        ->name('habilitation.suspendre');

    Route::get('habilitation/retirer/{id}', [\App\Http\Controllers\PersonnelController::class, 'formulaireRetraitHabilitation'])
        ->name('habilitation.retirer');
    Route::post('habilitation/renouveler/post', [\App\Http\Controllers\PersonnelController::class, 'retirerHabilitation'])
        ->name('habilitation.retirerPost');

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


    //Route send mail
    Route::get('habilitation/renouveler/envoi-mail/{id}', [\App\Http\Controllers\SendMailController::class, 'renouveler'])->name('email.renew');
    Route::get('habilitation/suspendre/envoi-mail/{id}', [\App\Http\Controllers\SendMailController::class, 'suspendre'])->name('email.suspend');
    Route::get('habilitation/retirer/envoi-mail/{id}', [\App\Http\Controllers\SendMailController::class, 'retirer'])->name('email.withdraw');

    //Logout
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

});


Route::get('login', [\App\Http\Controllers\AuthController::class, 'loginSsoForm'])->name('auth.loginSsoForm');
Route::get('login/sso', [\App\Http\Controllers\AuthController::class, 'loginSso'])->name('auth.loginSso');

Route::get('test/login', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('auth.loginForm');
Route::post('test/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::get('test/verify-token', [\App\Http\Controllers\AuthController::class, 'verifyTokenForm'])->name('auth.verifyTokenForm');
Route::post('test/verify-token', [\App\Http\Controllers\AuthController::class, 'verifyToken'])->name('auth.verifyToken');
//Route::get('sms/test', [\App\Http\Controllers\PersonnelController::class, 'test']);

