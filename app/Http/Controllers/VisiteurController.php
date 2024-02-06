<?php

namespace App\Http\Controllers;
use App\Models\Visiteur;
use App\Models\Responsable;
use Illuminate\Http\Request;
use App\Models\Type_visiteur;
// use Illuminate\Support\Facades\Validator;

class VisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visiteurs = Visiteur::all();
        $typevisiteurs = Type_visiteur::all();
        $responsables = Responsable::all();

        return view('dashboard.admin.visiteur.index',compact('typevisiteurs','responsables','visiteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typevisiteurs = Type_visiteur::all();
        $responsables = Responsable::all();
        return view('dashboard.admin.visiteur.create',compact('typevisiteurs','responsables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'sexe'   => 'required',
            // 'statuts' => 'required',
            'activite' => 'required',
            'date'      =>  'required',
             'responsable_id' => 'required',
            'type_visiteur_id'=> 'required',
        ]);
    
        // dd($visiteur);
        $visiteur = new Visiteur;
        $visiteur->nom = $request->nom;
        $visiteur->prenom = $request->prenom;
        $visiteur->contact = $request->contact;
        $visiteur->sexe = $request->sexe;
        // $visiteur->statuts = $request->statuts;
        $visiteur->activite = $request->activite;
        $visiteur->date = $request->date;
        $visiteur->responsable_id = $request->responsable_id;
        $visiteur->type_visiteur_id = $request->type_visiteur_id;

        $visiteur->save();

        return redirect()->route("visiteur.index")->with('message', "Un visiteur a bien été créée !");


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $visiteur = Visiteur::findOrfail($id);
        return view('dashboard.admin.visiteur.show',compact('visiteur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visiteur = Visiteur::find($id);
        $typevisiteurs = Type_visiteur::all();
        $responsables = Responsable::all();
        return view('dashboard.admin.visiteur.edit',compact('visiteur','typevisiteurs','responsables'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'sexe'   => 'required',
            // 'statuts' => 'required',
            'activite' => 'required',
            'date'      =>  'required',
             'responsable_id' => 'required',
            'type_visiteur_id'=> 'required',
        ]);
    
        // dd($visiteur);
        $visiteur = Visiteur::findOrFail($id);
        $visiteur->nom = $request->nom;
        $visiteur->prenom = $request->prenom;
        $visiteur->contact = $request->contact;
        $visiteur->sexe = $request->sexe;
        // $visiteur->statuts = $request->statuts;
        $visiteur->activite = $request->activite;
        $visiteur->date = $request->date;
        $visiteur->responsable_id = $request->responsable_id;
        $visiteur->type_visiteur_id = $request->type_visiteur_id;

        $visiteur->save();

        return redirect()->route('visiteur.index')->with('message', "Un visiteur a bien été modifieé !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visiteur = Visiteur::findOrfail($id);
        $visiteur->delete();

        return redirect()->route('visiteur.index')->with('message', "Un visiteur a bien été supprimer !");


    }
}
