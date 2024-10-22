<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Cotisation;
use App\Models\Paiement;
use Illuminate\Http\Request;

class CotisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cotisations = Cotisation::all();
        $membre = Membre::all();
        return view('dashboard.admin.cotisation.show',compact('membre','cotisations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $membres = Membre::all();
        return view('dashboard.admin.cotisation.create',compact('membres'));
    }

    public function updateStatus(Request $request, int $id)
    {
        $cotisation = Cotisation::findOrFail($id);

        if ($cotisation->mois >= 12) {
            $cotisation->update(['status' => 'soldé']);
        } else {
            $cotisation->update(['status' => 'en cours']);
        }

        return redirect()->route('cotisations.index')->with('success', 'Statut de cotisation mis à jour avec succès');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // dd($request);
    //     $request->validate([
    //         'membre_id' => 'required|string|max:255',
    //         'montant_mensuel' => 'required|string|max:255',
    //         'mois' => 'required|string|max:255',
    //         'annee' => 'required|string|max:255'. date('Y'),
    //         'date' => 'required|string|max:255',
    //         'status' => 'nullable',
    //     ]);

    //     $cotisation = new Cotisation();
    //     $cotisation->membre_id = $request->membre_id;
    //     $cotisation->montant_mensuel = $request->montant_mensuel;
    //     $cotisation->mois = $request->mois;
    //     $cotisation->annee = $request->annee;
    //     $cotisation->date = $request->date;
    //     $cotisation->montant_total += $request->montant_mensuel + 1000 ;

    //     $cotisation->save();

    //     return redirect()->route('cotisation.index')->with('Succès','Une cotisation ajouté avec succès.');
    // }


    // public function store(Request $request)
    // {
    //     // Validation de la requête
    //     $request->validate([
    //         'membre_id' => 'required|string|max:255',
    //         'montant_mensuel' => 'required|numeric|min:0',
    //         'mois' => 'required|string|max:255',
    //         'annee' => 'required|string|max:255', 
    //         'date' => 'required|date',
    //         'status' => 'nullable',
    //     ]);

    //     // Trouver une cotisation existante pour le membre et l'année spécifiés
    //     $cotisation = Cotisation::where('membre_id', $request->membre_id);
    //                             // ->whereYear('date', $request->annee)
    //                              //->whereMonth('date', $request->mois)
    //                             // ->first();

    //     // if ($cotisation) {
    //         // Incrémenter le montant total à partir du deuxième ajout
    //         // Assurez-vous que le montant total est initialisé avant de l'incrémenter
    //         // if (!$cotisation->montant_total) {
    //         //     $cotisation->montant_total = 0; // Initialisation du montant total si jamais il était null
    //         // }
    //         // $cotisation->montant_total += $request->montant_mensuel;

    //     // } else {
    //         // Créer une nouvelle cotisation si elle n'existe pas
    //         $cotisation = new Cotisation();
    //         $cotisation->membre_id = $request->membre_id;
    //         $cotisation->montant_mensuel = $request->montant_mensuel;
    //         $cotisation->mois = $request->mois;
    //         $cotisation->annee = $request->annee;
    //         $cotisation->date = $request->date;
    //         // Initialiser le montant total au montant mensuel pour le premier ajout
    //         $cotisation->montant_total = $request->montant_mensuel;
    //     // }

    //     // Sauvegarder les modifications
    //     $cotisation->save();

    //     // Redirection avec un message de succès
    //     return redirect()->route('cotisation.index')->with('success', 'Une cotisation ajoutée avec succès.');
    // }


    // CotisationController.php

    public function updateMontantTotal(Cotisation $cotisation)
    {
        // Calculer la somme des paiements
        $montantTotal = $cotisation->calculerMontantTotal();

        // Mettre à jour le champ montant_total
        $cotisation->montant_total = $montantTotal;
        $cotisation->save();

        return redirect()->back()->with('success', 'Montant total mis à jour avec succès.');
    }



    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            // 'membre_id' => 'required|string|max:255',
            'membre_id' => 'required|integer|exists:membres,id',
            'libelle' => 'required|string|max:255',
            // 'montant_total' => 'required|string|max:255',
            'description' => 'required|string|max:255', 
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

           
            $cotisation = new Cotisation();
            $cotisation->membre_id = $request->membre_id;
            $cotisation->libelle = $request->libelle;
            $cotisation->montant_total = $request->montant_total;
            $cotisation->description = $request->description;
            $cotisation->date_debut = $request->date_debut;
            $cotisation->date_fin = $request->date_fin;
            $cotisation->status = 'en cours';
            // dd($cotisation);
            $cotisation->save();

        return redirect()->back()->with('success', 'Une cotisation ajoutée avec succès.');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cotisation = Cotisation::findOrFail($id);
        $paiements = Paiement::where('cotisation_id', $id)->get();
        return view('dashboard.admin.paiement.index',compact('cotisation','paiements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cotisation = Cotisation::findOrfail($id);
        return view('dashboard.admin.cotisation.edit',compact('cotisation'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'membre_id' => 'required|string|max:255',
            'membre_id' => 'required|integer|exists:membres,id',
            'libelle' => 'required|string|max:255',
            // 'montant_total' => 'required|string|max:255',
            'description' => 'required|string|max:255', 
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

           
            $cotisation = Cotisation::find($id);
            $cotisation->membre_id = $request->membre_id;
            $cotisation->libelle = $request->libelle;
            $cotisation->montant_total = $request->montant_total;
            $cotisation->description = $request->description;
            $cotisation->date_debut = $request->date_debut;
            $cotisation->date_fin = $request->date_fin;
            $cotisation->status = 'en cours';
            // dd($cotisation);
            $cotisation->save();

        return redirect()->back()->with('success', 'Une cotisation a été mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cotisation = Cotisation::findOrFail($id);
        $cotisation->delete();
        return redirect()->route('cotisation.index')->with('success', 'Une cotisation supprimé avec succès.');
    }
}
