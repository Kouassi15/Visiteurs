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
        //
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
        $responsable->activite = $request->activite;
        $responsable->save();

        return redirect()->back()->with('message', "Le responsable a bien été créée !");
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
