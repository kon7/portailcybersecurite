<?php

namespace App\Http\Controllers;

use App\Models\Alerte;
use Illuminate\Http\Request;

class AlerteController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */

     //fonction pour retoune les alerte sur le site vitrine cert

    public function certIndex()
    {
            $alertes = Alerte::with('typeAlerte')
                        ->latest()
                        ->get(['id', 'reference', 'intitule', 'type_alerte_id', 'date_initial', 'date_traite']);
            //le cert doit etre remlacer par le nom de la vue qui vas afficher les alerte
            return view('cert', compact('alertes'));
    }
    

    public function certShow($id)
        {
            $alerte = Alerte::with('typeAlerte')->findOrFail($id);
            //le cert_detail doit etre remlacer par le nom de la vue qui vas afficher les alertes
            return view('cert_detail', compact('alerte'));
        }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alerte $alerte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alerte $alerte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alerte $alerte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alerte $alerte)
    {
        //
    }
}
