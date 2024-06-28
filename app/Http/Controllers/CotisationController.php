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
        $membres = Membre::all();
        $cotisations = Cotisation::all();
        return view('dashboard.admin.cotisation.index',compact('membres','cotisations'));
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

    public function store(Request $request)
    {

        $request->validate([
            'membre_id' => 'required|string|max:255',
            'montant_mensuel' => 'required|numeric|min:0',
            'mois' => 'required|string|max:255',
            'annee' => 'required|string|max:255', 
            'date' => 'required|date',
            'status' => 'nullable',
        ]);

        $cotisation = Cotisation::where('membre_id', $request->membre_id)
                                //->whereYear('date', $request->annee)
                                ->whereMonth('date', $request->mois)
                                ->first();

        if ($cotisation) {
            
            $cotisation->montant_total += $request->montant_mensuel ;
            } else {
           
            $cotisation = new Cotisation();
            $cotisation->membre_id = $request->membre_id;
            $cotisation->montant_mensuel = $request->montant_mensuel;
            $cotisation->mois = $request->mois;
            $cotisation->annee = $request->annee;
            $cotisation->date = $request->date;
            $cotisation->montant_total = $request->montant_mensuel;
           
            }
        $cotisation->save();

        return redirect()->route('cotisation.index')->with('success', 'Une cotisation ajoutée avec succès.');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cotisations = Cotisation::where('membre_id',$id)->get();
        return view('dashboard.admin.cotisation.show',compact('cotisations'));
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
        $cotisation = Cotisation::find($id);
        $cotisation->delete();
        return redirect()->route('cotisation.index')->with('success', 'Une cotisation supprimé avec succès.');
    }
}
