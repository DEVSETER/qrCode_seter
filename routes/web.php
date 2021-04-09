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


//Route Habilitation
Route::resource('habilitations', \App\Http\Controllers\HabilitationController::class);
