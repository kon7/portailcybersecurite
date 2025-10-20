<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\AlerteController;



//route pour afficher tous les alertes classifier par type
Route::get('/', [AlerteController::class, 'certIndex'])->name('accueil');

//route pour afficher les alerte d'un type
Route::get('/type/{id}', [AlerteController::class, 'alertesParType'])->name('alertes.par.type');

//route pour afficher une alerte
Route::get('/alertes/{id}', [AlerteController::class, 'show'])->name('alertes.show');

    //route formulaire incident 
Route::get('/incidents', [IncidentController::class, 'create'])->name('incidents.create');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');


    /**site vitrine route alerte */
// Route::get('/cert', [AlerteController::class, 'certIndex'])->name('cert.index');
// Route::get('/cert/{id}', [AlerteController::class, 'certShow'])->name('cert.show');
    //routes alertes 
// Route::get('/alertes', [AlerteController::class, 'index'])->name('alertes.index');

// Route::get('/latest-alertes', [AlerteController::class, 'getLatestAlertes'])->name('alertes.latest');