<?php

namespace App\Http\Controllers;

use App\Models\Membre;

use Illuminate\Http\Request;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membres = Membre::all();
        return view('dashboard.admin.membre.index',compact('membres'));
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
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nom' => 'required|string|max:255',
    //         'prenom' => 'required|string|max:255',
    //         'contact' => 'required|string|max:255', 
    //         'poste' => 'required|string|max:255',
    //         'sexe' => 'required|in:Homme,Femme',
    //         'domicile' => 'required|string|max:255',
    //         'personne_contacte' => 'required|string|max:255',
    //         'numero_urgent' => 'required|string|max:255',
    //         'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
    //     ]);
        
        
    //         $membre = new Membre();
    //         $membre->nom = $request->nom;
    //         $membre->prenom = $request->prenom;
    //         $membre->contact = $request->contact;
    //         $membre->poste = $request->poste;
    //         $membre->sexe = $request->sexe;
    //         $membre->domicile = $request->domicile;
    //         $membre->personne_contacte = $request->personne_contacte;
    //         $membre->numero_urgent = $request->numero_urgent ;
        
        
           
    //          // télécharger l'image
    //             $imageName = $request->file('image')->getClientOriginalName();
    //             $path = $request->file('image')->move(public_path('assets/images',$imageName),$imageName);
    //             $membre->image = $imageName;
            
    //             //dd($membre);
    //         $membre->save();
    //         return redirect()->route('membre.index')->with('success', 'Membre ajouté avec succès.');
    // }
    
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'sexe' => 'required|in:Homme,Femme',
            'domicile' => 'required|string|max:255',
            'personne_contacte' => 'required|string|max:255',
            'numero_urgent' => 'required|string|max:255',
            'date_naissance' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $membre = new Membre();
        $membre->nom = $request->nom;
        $membre->prenom = $request->prenom;
        $membre->contact = $request->contact;
        $membre->poste = $request->poste;
        $membre->sexe = $request->sexe;
        $membre->domicile = $request->domicile;
        $membre->personne_contacte = $request->personne_contacte;
        $membre->numero_urgent = $request->numero_urgent;
        $membre->date_naissance = $request->date_naissance ;

        // Télécharger l'image
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/images'), $imageName);
            $membre->image = $imageName;
        }

        $membre->save();
        return redirect()->route('membre.index')->with('success', 'Membre ajouté avec succès.');
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
