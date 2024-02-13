<?php

namespace App\Http\Controllers;

use App\Models\Fidele;
use App\Models\Visiteur;
use App\Models\Responsable;
use App\Models\Type_visiteur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $totalvisiteurs = Visiteur::all();
        
        $totalvisiteurs = Visiteur::count();
        $totalresponsables = Responsable::count();
        $totaltypevisiteurs = Type_visiteur::count();
        // $totaltypevisiteurs = Type_visiteur::whereNotNull()->count();

        $totalfideles = Fidele::count();
        $totalenfants = Fidele::whereNotNull('nombre_enfants')->count();
        $totalfemmes = Fidele::whereNotNull('nombre_femmes')->count();
        $totalhommes = Fidele::whereNotNull('nombre_hommes')->count();

        return view('dashboard', compact('totalvisiteurs','totalresponsables','totalfideles','totalenfants','totalfemmes','totaltypevisiteurs','totalhommes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
