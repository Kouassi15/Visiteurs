<?php

namespace App\Http\Controllers;

use App\Models\Fidele;
use App\Models\Annonce;
use App\Models\Programme;
use Illuminate\Http\Request;
use App\Models\AnnonceDepartement;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::all();
        $annonceDepartements = AnnonceDepartement::all();
        $programmes = Programme::all();
        return view('dashboard.admin.annonce.index',compact('annonces','annonceDepartements','programmes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'dirigeant' => 'required',
            'orateur' => 'required',
            'texte' => 'required',
            'theme' => 'required',
            'description' => 'required',
            'date' => 'required',
            'annonceJepcma' => 'nullable',
            'annonceAfecmaci' => 'nullable',
            'annonceRecmaci' => 'nullable',
            'annonceFeci' => 'nullable',
            'annonceNational' => 'nullable',
            'annonceecoleDimanche' => 'nullable',
            'ensiegnementFemme' => 'nullable',
            'heureEnseignementFemme' =>'nullable',
            'heurefinEnseignementFemme' =>'nullable',
            'enseignementBiblique' => 'nullable',
            'heureEnseignementBiblique'=>'nullable',
            'heurefinEnseignementBiblique'=>'nullable',
            'premierCulte' =>'nullable',
            'deuxiemeCulte' => 'nullable',
            'culteJumele' => 'nullable',
            'heureCulte1' => 'nullable',
            'heurefinCulte1' => 'nullable',
            'heureCulte2' => 'nullable',
            'heurefinCulte2' => 'nullable',
            'heureCulteJumele' => 'nullable',
            'heurefinCulteJumele' =>'nullable',
            
        ]);
        DB::transaction(function () use ($request) {
        $programme = Programme::create([
            'enseignementFemme' => $request->input('enseignementFemme'),
            'heureEnseignementFemme' => $request->input('heureEnseignementFemme'),
            'heurefinEnseignementFemme' => $request->input('heurefinEnseignementFemme'),
            'enseignementBiblique' => $request->input('enseignementBiblique'),
            'heureEnseignementBiblique' => $request->input('heureEnseignementBiblique'),
            'heurefinEnseignementBiblique' => $request->input('heurefinEnseignementBiblique'),
            'premierCulte' => $request->input('premierCulte'),
            'deuxiemeCulte' => $request->input('deuxiemeCulte'),
            'culteJumele' => $request->input('culteJumele'),
            'heureCulte1' => $request->input('heureCulte1'),
            'heurefinCulte1' => $request->input('heurefinCulte1'),
            'heureCulte2' => $request->input('heureCulte2'),
            'heurefinCulte2' => $request->input('heureCulte2'),
            'heureCulteJumele' => $request->input('heureCulteJumele'),
            'heurefinCulteJumele' => $request->input('heurefinCulteJumele'),
        ]);
        $annonceDepartement = AnnonceDepartement::create([
         'annonceJepcma' => $request->input('annonceJepcma'),
         'annonceAfecmaci' => $request->input('annonceAfecmaci'),
         'annonceFeci' => $request->input('annonceFeci'),
         'annonceRecmaci' => $request->input('annonceRecmaci'),
         'annonceNational' => $request->input('annonceNational'),
         'annonceecoleDimanche' => $request->input('annonceecoleDimanche'),
        ]);
        
        $annonce = Annonce::create([
            //  'fidele_id'=> $fidele->id,
            'programme_id' => $programme->id,
            'annonceDepartement_id'=> $annonceDepartement->id,
            'texte' => $request->input('texte'),
            'description'=> $request->input('description'),
            'theme' => $request->input('theme'),
            'dirigeant'=> $request->input('dirigeant'),
            'orateur' => $request->input('orateur'),
            'date' => $request->input('date'),
        ]);
        
        });
       
        // if ($request->hasFile('image')) {
        //     $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
        //     $request->file('image')->move(public_path('assets/images/img'), $imageName);
        //     $annonce->image = $imageName;
        // }

        // $annonce->save();
        return redirect()->route('annonce.index')->with('Succès','Annonce ajouté avec succès');
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
        $annonce = Annonce::findOrFail($id);
        return view('dashboard.admin.annonce.edit', compact('annonce'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);
        $annonce = Annonce::findOrFail($id);
        $annonce->update([
            'titre' => $request->titre,
            'description'=> $request->description,
        ]);
         
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/images/img'), $imageName);
            $annonce->image = $imageName;
        }

        $annonce->save();
        return redirect()->route('annonce.index')->with('Succès','Annonce ajouté avec succès');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $annonce = Annonce::find($id);
        $annonce->delete();
    }
}
