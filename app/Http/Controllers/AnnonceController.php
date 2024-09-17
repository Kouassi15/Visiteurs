<?php

namespace App\Http\Controllers;

use App\Models\Fidele;
use App\Models\Annonce;
use App\Models\Programme;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $fideles = Fidele::all();
        return view('dashboard.admin.annonce.create',compact('fideles'));
    }


    public function generatePDF($id)
    {
        $fideles = Fidele::all();
        $annonce = Annonce::all();
        $pdf =  Pdf::loadView('dashboard.admin.annonce.pdf.annoncepdf', ['annonce' => Annonce::findOrFail($id)]);
        $pdf->setPaper('A4', 'portrait')->render();

        $response = new Response();
        $response->setContent($pdf->output())->header('Content-Type', 'application/pdf');
        $response->header('Content-Disposition', "inline; filename=$id-" . date('dmY') . ".pdf");

        return $response;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'fidele_id' => 'required',
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
            'programme_id' => $programme->id,
            'annonceDepartement_id'=> $annonceDepartement->id,
             'fidele_id'=> $request->input('fidele_id'),
            'texte' => $request->input('texte'),
            'description'=> $request->input('description'),
            'theme' => $request->input('theme'),
            'dirigeant'=> $request->input('dirigeant'),
            'orateur' => $request->input('orateur'),
            'date' => $request->input('date'),
        ]);
    
        });
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
        $fideles = Fidele::all();
        $annonce = Annonce::findOrFail($id);
        return view('dashboard.admin.annonce.edit', compact('annonce','fideles'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fidele_id' => 'required',
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
        DB::transaction(function () use ($request,$id) {
        $programme = Programme::findOrFail($id);
        $programme->update([
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
         
        $annonceDepartement = AnnonceDepartement::findOrFail($id);
          $annonceDepartement->update([
            'annonceJepcma' => $request->input('annonceJepcma'),
            'annonceAfecmaci' => $request->input('annonceAfecmaci'),
            'annonceFeci' => $request->input('annonceFeci'),
            'annonceRecmaci' => $request->input('annonceRecmaci'),
            'annonceNational' => $request->input('annonceNational'),
            'annonceecoleDimanche' => $request->input('annonceecoleDimanche'),
           ]);

        $annonce = Annonce::findOrFail($id);
         $annonce->update([
            'programme_id' => $programme->id,
            'annonceDepartement_id'=> $annonceDepartement->id,
             'fidele_id'=> $request->input('fidele_id'),
            'texte' => $request->input('texte'),
            'description'=> $request->input('description'),
            'theme' => $request->input('theme'),
            'dirigeant'=> $request->input('dirigeant'),
            'orateur' => $request->input('orateur'),
            'date' => $request->input('date'),
        ]);
   
       });
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
