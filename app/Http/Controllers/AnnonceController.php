<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::all();
        return view('dashboard.admin.annonce.index',compact('annonces'));
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
            'id_fidele' => 'nullable',
            'id_annonceDepartement' => 'nullable',
            'id_programme' => 'nullable',
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
            'enseignementBiblique' => 'nullable',
            'heureEnseignementBiblique'=>'nullable',
            'premierCulte' =>'nullable',
            'deuxiemeCulte' => 'nullable',
            'culteJumele' => 'nullabe',
            'heureCulte1' => 'nullable',
            'heureCulte2' => 'nullable',
            'heureCulteJumele' => 'nullable',
            
        ]);
        DB::transaction(function () use ($request) {
        $annonce = Annonce::create([
            'id_fidele'=> $fidele->id,
            'id_programme' => $programme->id,
            'id_annonceDepartement'=> $annonceDepartement->id,
            'texte' => $request->texte,
            'description'=> $request->description,
            'theme' => $request->theme,
            'dirigeant'=> $request->dirigeant,
            'orateur' => $request->orateur,
        ]);
        $programme = Programme::create([
            'ensiegnementFemme' => $request->enseignentFemme,
            'heureEnseignementFemme' => $request->heureEnseignementFemme,
            'enseignementBiblique' => $request->enseignementBiblique,
            'heureEnseignementBiblique' => $request->heureEnseignementBiblique,
            'premierCulte' => $request->premierCulte,
            'deuxiemeCulte' => $request->deuxiemeCulte,
            'culteJumele' => $request->culteJumele,
            'heureCulte1' => $request->heureCulte1,
            'heureCulte2' => $request->heureCulte2,
            'heureCulteJumele' => $request->heureCulteJumele,
        ]);
        $annonceDepartement = AnnonceDepartement::create([
         'annonceJepcma' => $request->annonceJepcma,
         'annonceAfecmaci' => $request->annonceAfecmaci,
         'annonceFeci' => $request->annonceFeci,
         'annonceRecmaci' => $request->annonceRecmaci,
         'annonceNational' => $request->annonceNational,
         'annonceecoleDimanche' => $request->annonceecoleDimanche,
        ]);
        });
         
        // if ($request->hasFile('image')) {
        //     $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
        //     $request->file('image')->move(public_path('assets/images/img'), $imageName);
        //     $annonce->image = $imageName;
        // }

        $annonce->save();
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
