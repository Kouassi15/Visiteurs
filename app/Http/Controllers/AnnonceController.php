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
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $annonce = Annonce::create([
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
        //
    }
}
