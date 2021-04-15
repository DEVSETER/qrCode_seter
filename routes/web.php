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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $personnels = \App\Models\Personnel::all();
    return view('dashboard', compact('personnels'));
})->name('dashboard');

//Route Personnel
Route::resource('personnels', \App\Http\Controllers\PersonnelController::class);
Route::post('personnel/update', [\App\Http\Controllers\PersonnelController::class, 'update'])
    ->name('personnel.update');
Route::get('personnel/destroy/{id}', [\App\Http\Controllers\PersonnelController::class, 'destroy'])
    ->name('personnel.destroy');

//Route Ajout habilitations pour personnel
Route::get('personnels/ajout-habilitation/{id}', [\App\Http\Controllers\PersonnelController::class, 'formulaireAjoutHabilitation'])
    ->name('personnels.formulaireAjoutHabilitation');
Route::post('personnels/ajout-habilitation/store', [\App\Http\Controllers\PersonnelController::class, 'ajoutHabilitation'])
    ->name('personnels.ajoutHabilitation');

//Route Habilitation
Route::resource('habilitations', \App\Http\Controllers\HabilitationController::class);


