<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Enseignants = Enseignant::all();
        return view("pages.enseignants.index",compact("Enseignants"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view("pages.enseignants.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // public function enr(Request $request){
    $Enseignant = new Enseignant();
    $Enseignant->nom = $request->nom;
    $Enseignant->prenom = $request->prenom;
    $Enseignant->date_naissance = $request->date_naissance;
    $Enseignant->email = $request->email;
    $Enseignant->telephone = $request->telephone;
    $Enseignant->age = $request->age;
    $Enseignant->cin = $request->cin;
    $Enseignant->adresse = $request->adresse;
    $Enseignant->ville = $request->ville;
    $Enseignant->nationalite = $request->nationalite;
    $Enseignant->matricule = $request->matricule;
    $Enseignant->password = $request->password;
    $Enseignant->save();
    return view("pages.enseignants.index");
 }


    /**
     * Display the specified resource.
     */
    public function show(Enseignant $enseignant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enseignant $enseignant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enseignant $enseignant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enseignant $enseignant)
    {
        //
    }
}
