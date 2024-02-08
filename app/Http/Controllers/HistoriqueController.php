<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function index(Request $request)
    // {
    //     $start_date = $request->input('start_date');
    //     $end_date = $request->input('end_date');

    //     $visiteurs = Visiteur::orwhere('date', 'ASC', $start_date)
    //                          ->orwhere('date', 'DESC', $end_date)
    //                          ->get();

    //     return view('dashboard.admin.visiteur.historique', ['visiteurs' => $visiteurs]);
    // }
    public function index(Request $request)
    {
        

        $start_date =$request->start_date;
        $end_date = $request->end_date;

        $visiteurs = Visiteur::where('date','>=',$request->start_date)
                                                        ->where('date','<',$request->end_date)
                                                        ->get();
        $query = Visiteur::whereBetween('date', [$start_date, $end_date])->get();
         return view('dashboard.admin.visiteur.historique',compact('visiteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visiteurs = Visiteur::all();
        return view('dashboard.admin.visiteur.historique',compact('visiteurs'));
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
