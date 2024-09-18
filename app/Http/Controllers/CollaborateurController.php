<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Collaborateur;
use Illuminate\Support\Facades\Hash;

class CollaborateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $collaborateurs = Collaborateur::all();
        return view('dashboard.admin.collaborateur.index',compact('users','collaborateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.collaborateur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4',
            'prenom' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
        ]);
        //create user account
        $user = User::create(
            [
                "name" => $request->name . ' ' . $request->prenom,
                "email" => $request->email,
                "password" => Hash::make($request->password)
            ]
        );

        $collaborateur = new Collaborateur();
        $collaborateur->user_id = $user->id;
        $collaborateur->nom = $request->name;
        $collaborateur->prenom = $request->prenom;
        $collaborateur->contact = $request->contact;
        $collaborateur->poste = $request->poste;

        $collaborateur->save();

        return redirect()->route('collaborateur.index')->with('Succès','Collaborateur ajouté avec succès');
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
        $collaborateur = Collaborateur::find($id);
        return view('dashboard.admin.collaborateur.edit', compact('collaborateur'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4',
            'prenom' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
        ]);
        //create user account
        $user = User::find($id);
        if ($user) {
        $user->update(
            [
                "name" => $request->name . ' ' . $request->prenom,
                "email" => $request->email,
                "password" => Hash::make($request->password)
            ]
        );
        $user->save();
    }

        $collaborateur = Collaborateur::find($id);
        $collaborateur->user_id = $user->id;
        $collaborateur->nom = $request->name;
        $collaborateur->prenom = $request->prenom;
        $collaborateur->contact = $request->contact;
        $collaborateur->poste = $request->poste;

        $collaborateur->save();

        return redirect()->route('collaborateur.index')->with('Succès','Collaborateur ajouté avec succès');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $collaborateur = Collaborateur::find($id);
        $collaborateur->delete();

        return redirect()->route('collaborateur.index')->with('Succès','Collaborateur à été suprimer avec succès');
    }
}
