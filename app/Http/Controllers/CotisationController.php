<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Cotisation;
use Illuminate\Http\Request;

class CotisationController extends Controller
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
        $membres = Membre::all();
        return view('dashboard.admin.cotisation.create',compact('membres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'membre_id' => 'required',
            'montant_mensuel' => 'required',
            'mois' => 'required|string|max:255',
            'date' => 'required',
            'status' => 'nullable',
        ]);

        $cotisation = new Cotisation();
        $cotisation->membre_id = $request->membre_id;
        $cotisation->montant_mensuel = $request->montant_mensuel;
        $cotisation->mois = $request->mois;
        $cotisation->date = $request->date;
        $cotisation->montant_total = $request->montant_mensuel * 12;

        $cotisation->save();

        return redirect()->route('cotisation.index')->with('Succès','Une cotisation ajouté avec succès.');
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
