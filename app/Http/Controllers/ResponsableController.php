<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;
class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $responsables = Responsable::all();

        return view('dashboard.admin.responsable.index',compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.responsable.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            // 'statuts' => 'required|string',
            'activite' => 'required',
            // 'date'      =>  'required|date',
            
        ]);
    

        $responsable = new Responsable;
        $responsable->nom = $request->nom;
        $responsable->prenom = $request->prenom;
        $responsable->contact = $request->contact;
        $responsable->quartier = $request->quartier;
        $responsable->activite = $request->activite;
        $responsable->save();

        return redirect()->back()->with('message', "Le responsable a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $responsable = Responsable::findOrFail($id);

        return view('dashboard.admin.responsable.show', compact('responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $responsable = Responsable::findOrFail($id);

        return view('dashboard.admin.responsable.edit', compact('responsable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // dd($request);
         $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            // 'statuts' => 'required|string',
            'activite' => 'required',
            // 'date'      =>  'required|date',
            
        ]);
    

        $responsable = Responsable::find($id);
        $responsable->nom = $request->nom;
        $responsable->prenom = $request->prenom;
        $responsable->contact = $request->contact;
        $responsable->quartier = $request->quartier;
        $responsable->activite = $request->activite;
        $responsable->save();

        return redirect()->route('responsable.index')->with('message', "Le responsable a bien été modifier!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
