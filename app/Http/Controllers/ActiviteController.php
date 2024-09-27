<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activites = Activite::all();
        return view('dashboard.admin.activite.index',compact('activites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.activite.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'titre' => 'required',
          'description' => 'required',
          'date' => 'required',
        ]);

        $activite = Activite::create([
            'titre'=> $request->input('titre'),
            'description'=> $request->input('description'),
            'date'=> $request->input('date'),
        ]);

        $activite->save();

        return redirect()->route('activite.index')->with('Succès','Une activite ajouté avec succès');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activite = Activite::find($id);
        return view('dashboard.admin.activite.show',compact('activite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activite = Activite::find($id);
        return view('dashboard.admin.activite.edit',compact('activite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'date' => 'required',
          ]);
  
         $activite = Activite::find($id);
            $activite->update([
              'titre'=> $request->input('titre'),
              'description'=> $request->input('description'),
              'date'=> $request->input('date'),
          ]);
  
          $activite->update();
  
          return redirect()->route('activite.index')->with('Succès','Une activite ajouté avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activite = Activite::find($id);
        $activite->delete();
        return redirect()->route('activite.index')->with('Succès','Une activite a été mise à jour avec succès');
    }
}
