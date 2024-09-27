<?php

namespace App\Http\Controllers;

use App\Models\Jepcemiste;
use Illuminate\Http\Request;

class JepcemisteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jepcemistes = Jepcemiste::all();
        return view('dashboard.admin.jepcemiste.index',compact('jepcemistes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.jepcemiste.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'activite' => 'nullable',
            'profession' => 'nullable',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quartier' => 'required',
            'sexe' => 'required',           
        ]);
    
        $jepcemiste = new Jepcemiste();
        $jepcemiste->fill($validatedData);
    
        if ($request->hasFile('photo')) {
            $imageName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('assets/images/photos'), $imageName);
            $jepcemiste->photo = $imageName;
        }
    
       

        $jepcemiste->save();

        return redirect()->route('jepcemiste.index')->with('Succès','Un jepcemiste a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jepcemiste = Jepcemiste::find($id);
        return view('dashboard.admin.jepcemiste.show',compact('jepcemiste'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jepcemiste = Jepcemiste::find($id);
        return view('dashboard.admin.jepcemiste.edit',compact('jepcemiste'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'activite' => 'nullable',
            'profession' => 'nullable',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quartier' => 'required',
            'sexe' => 'required',
            'status'=> 'required',           
        ]);
    
        $jepcemiste = Jepcemiste::findOrFail($id);
        $jepcemiste->fill($validatedData);
    
        if ($request->hasFile('photo')) {
            $imageName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('assets/images/photos'), $imageName);
            $jepcemiste->photo = $imageName;
        }
    
       

        $jepcemiste->save();

        return redirect()->route('jepcemiste.index')->with('Succès','Un jepcemiste a été modifie avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jepcemiste = Jepcemiste::find($id);
        $jepcemiste->delete();
        return redirect()->route('jepcemiste.index')->with('Succès','Un jepcemiste a été ajouté avec succès');
    }
}
