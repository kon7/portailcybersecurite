<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\AlerteController;


Route::get('/', function () {
    return view('welcome');
})->name('home');
    //route formulaire incident 
Route::get('/incidents', [IncidentController::class, 'create'])->name('incidents.create');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');
    /**site vitrine route alerte */
Route::get('/cert', [AlerteController::class, 'certIndex'])->name('cert.index');
Route::get('/cert/{id}', [AlerteController::class, 'certShow'])->name('cert.show');
    //routes alertes 
Route::get('/alertes', [AlerteController::class, 'index'])->name('alertes.index');
Route::get('/alertes/{id}', [AlerteController::class, 'show'])->name('alertes.show');
Route::get('/latest-alertes', [AlerteController::class, 'getLatestAlertes'])->name('alertes.latest');