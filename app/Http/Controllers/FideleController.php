<?php

namespace App\Http\Controllers;

use App\Models\Fidele;
use Illuminate\Http\Request;

class FideleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fideles = Fidele::all();

        return view('dashboard.admin.fidele.index',compact('fideles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fidele = Fidele::all();
        return view('dashboard.admin.fidele.create', compact('fidele'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nombre_enfants' => 'required',
            'nombre_femmes' => 'required',
            'nombre_hommes' => 'required',
            'nombre_visiteurs' => 'required',
            'total_fidele' => 'required',
            'date' => 'required',
        ]);

        $fidele = new Fidele;
        $fidele->nombre_enfants = $request->nombre_enfants;
        $fidele->nombre_femmes = $request->nombre_femmes;
        $fidele->nombre_hommes = $request->nombre_hommes;
        $fidele->nombre_visiteurs = $request->nombre_visiteurs;
        $fidele->date = $request->date;
        $fidele->total_fidele = $request->nombre_enfants + $request->nombre_femmes + $request->nombre_hommes;

        $fidele->save();

        return redirect()->route('fidele.index')->with('message', "Le total personne a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fidele = Fidele::findOrFail($id);

        return view('dashboard.admin.fidele.show',compact('fidele'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fidele = Fidele::findOrFail($id);

        return view('dashboard.admin.fidele.edit',compact('fidele'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'nombre_enfants' => 'required',
            'nombre_femmes' => 'required',
            'nombre_hommes' => 'required',
            'nombre_visiteurs' => 'required',
            'total_fidele' => 'required',
            'date' => 'required',
        ]);

        $fidele = Fidele::findOrFail($id);
        $fidele->nombre_enfants = $request->nombre_enfants;
        $fidele->nombre_femmes = $request->nombre_femmes;
        $fidele->nombre_hommes = $request->nombre_hommes;
        $fidele->nombre_visiteurs = $request->nombre_visiteurs;
        $fidele->date = $request->date;
        $fidele->total_fidele = $request->nombre_enfants + $request->nombre_femmes + $request->nombre_hommes + $request->nombre_visiteurs;

        $fidele->save();

        return redirect()->route('fidele.index')->with('message', "Le total personne a bien été modifié !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fidele = Fidele::findOrFail($id);
        $fidele->delete();
        return redirect()->route('fidele.index')->with('message', "Le total personne a bien été modifié !"); 
    }
}
