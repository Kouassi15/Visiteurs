<?php

namespace App\Http\Controllers;

use App\Models\Cotisation;
use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'montant_verse' => 'required|string|max:255',
            'date_paiement' => 'required|date',
            'mode_paiement' => 'required|string|max:255',
            'mois' => 'required|string|max:255',
            'cotisation_id' => 'required|integer|exists:cotisations,id',
        ]);

        $paiement = new Paiement();
        $paiement->montant_verse = $request->input('montant_verse');
        $paiement->cotisation_id = $request->input('cotisation_id');
        $paiement->date_paiement = $request->input('date_paiement');
        $paiement->mois = $request->input('mois');
        $paiement->mode_paiement = $request->input('mode_paiement');
        $paiement->save();

        // Mettre à jour le montant total de la cotisation
        $cotisation = Cotisation::find($request->cotisation_id);
        $cotisation->montant_total = $cotisation->calculerMontantTotal();
        $cotisation->save();
        return redirect()->back()->with('success', "Le paiement a été ajouté avec succès.");
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
