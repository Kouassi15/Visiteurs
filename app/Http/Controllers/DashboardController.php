<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use App\Models\Fidele;
use App\Models\Membre;
use App\Models\Activite;
use App\Models\Paiement;
use App\Models\Visiteur;
use App\Models\Cotisation;
use App\Models\Jepcemiste;
use App\Models\Responsable;
use Illuminate\Http\Request;
use App\Models\Collaborateur;
use App\Models\Type_visiteur;

class DashboardController extends Controller
{

    public function login(){
        return view('auth.login');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $totalvisiteurs = Visiteur::all();
        $jepcemistes = Jepcemiste::all();
        $jepcemiste = Jepcemiste::count();
        $activites = Activite::count();
        $totalvisiteurs = Visiteur::count();
        $totalresponsables = Responsable::count();
        $collaborateurs = Collaborateur::count();
        // $totaltypevisiteurs = Type_visiteur::whereNotNull()->count();
        $acteurs = Acteur::count();
        $totalfideles = Fidele::count();
        $totalenfants = Fidele::whereNotNull('nombre_enfants')->count();
        $totalfemmes = Fidele::whereNotNull('nombre_femmes')->count();
        $totalhommes = Fidele::whereNotNull('nombre_hommes')->count();
        
        $membresall = Membre::all();
        $membres = Membre::count();
        // $cotisations = Cotisation::count();
        $montantTotal = Cotisation::whereNotNull('montant_total')->sum('montant_total');
        $montantVerse = Paiement::whereNotNull('montant_verse')->sum('montant_verse');

        return view('dashboard', compact('totalvisiteurs','totalresponsables','totalfideles','jepcemiste','acteurs','collaborateurs','totalhommes','membres','membresall','montantTotal','montantVerse','activites','jepcemistes'));
    }
    public function liste()
    {
        $membres = Membre::count();
        $cotisations = Cotisation::count();
        $montantTotal = Cotisation::whereNotNull('montant_total')->count();
        return view('dashboard.admin.homeaffairesocial', compact('membres','cotisations','montantTotal'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
