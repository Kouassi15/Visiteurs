<?php

namespace App\Http\Controllers;
use App\Models\Type_visiteur;
use Illuminate\Http\Request;

class TypevisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typevisiteurs = Type_visiteur::all();

        return view('dashboard.admin.type_visiteur.index',compact('typevisiteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.typevisiteur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
        ]);

        $typevisiteur = new Type_visiteur;
        $typevisiteur->libelle = $request->libelle;

        $typevisiteur->save();

        return redirect()->back()->with('message', "Le typevisiteur a bien été créée !");
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
