<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use App\Models\TypeActeur;
use Illuminate\Http\Request;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acteurs = Acteur::all();
        return view('dashboard.admin.acteur.create',compact('acteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeacteurs = TypeActeur::all();
        return view('dashboard.admin.acteur.create', compact('typeacteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
          'typeActeur_id' => 'required',
          'nom' => 'required',
          'prenom' => 'required',
          'contact' => 'required',
          'sexe' => 'required',
        ]);

        $acteur = new Acteur();
        $acteur->typeActeur_id = $request->typeActeur_id;
        $acteur->nom = $request->nom;
        $acteur->prenom = $request->prenom;
        $acteur->contact = $request->contact;
        $acteur->sexe = $request->sexe;

        $acteur->save();
        return redirect()->route('acteur.index')->with('Succèc','Acteur enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
