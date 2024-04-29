<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.membre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'contact' => 'required|string|max:255', 
            'activite' => 'required|string|max:255',
            'sexe' => 'required|in:Homme,Femme',
            'quartier' => 'required|string|max:255',
            'images' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        
        try {
            $membre = new Membre();
            $membre->nom = $request->input('nom');
            $membre->prenom = $request->input('prenom');
            $membre->contact = $request->input('contact');
            $membre->activite = $request->input('activite');
            $membre->sexe = $request->input('sexe');
            $membre->quartier = $request->input('quartier');
        
            if ($request->hasFile('images')) {
                $imageName = $request->file('images')->getClientOriginalName();
                $path = $request->file('images')->store('assets/img');
                $membre->images = $path;
            }
        
            $membre->save();
            return redirect()->route('membre.index')->with('success', 'Membre ajouté avec succès.');
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout du membre.');
        }
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
