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
        $acteurs = Acteur::with('typeActeur')->get();
        return view('dashboard.admin.acteur.index',compact('acteurs'));
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
         
        $request->validate([
            'typeActeur_id' => 'required|integer', 
            'nom' => 'required|string|max:255', 
            'prenom' => 'required|string|max:255', 
            'contact' => 'required|string|max:255', 
            'sexe' => 'required|string|max:255', 
        ]);

        $acteur = new Acteur();
        $acteur->typeActeur_id = $request->typeActeur_id;
        $acteur->nom = $request->nom;
        $acteur->prenom = $request->prenom;
        $acteur->contact = $request->contact;
        $acteur->sexe = $request->sexe;
        // dd('ok');
        $acteur->save();
        return redirect()->route('acteur.index')->with('Succès', 'Acteur enregistré avec succès'); // Correction de "Succèc" en "Succès"
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
        $typeacteurs = TypeActeur::all();
        $acteur = Acteur::find($id);
        return view('dashboard.admin.acteur.edit',compact('acteur','typeacteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'typeActeur_id' => 'required|integer', 
            'nom' => 'required|string|max:255', 
            'prenom' => 'required|string|max:255', 
            'contact' => 'required|string|max:255', 
            'sexe' => 'required|string|max:255', 
        ]);

        $acteur = Acteur::find($id);
        $acteur->typeActeur_id = $request->typeActeur_id;
        $acteur->nom = $request->nom;
        $acteur->prenom = $request->prenom;
        $acteur->contact = $request->contact;
        $acteur->sexe = $request->sexe;
        // dd('ok');
        $acteur->save();
        return redirect()->route('acteur.index')->with('Succès', 'Acteur mise à jour avec succès'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $acteur = Acteur::find($id);
        $acteur->delete();
        return redirect()->route('acteur.index')->with('Succès', 'Acteur supprimé avec succès'); 
    }
}
