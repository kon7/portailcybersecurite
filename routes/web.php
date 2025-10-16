<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\AlerteController;


Route::get('/', function () {
    return view('welcome');
});
    //route formulaire incident 
Route::get('/incidents', [IncidentController::class, 'create'])->name('incidents.create');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');
    /**site vitrine route alerte */
Route::get('/cert', [AlerteController::class, 'certIndex'])->name('cert.index');
Route::get('/cert/{id}', [AlerteController::class, 'certShow'])->name('cert.show');
