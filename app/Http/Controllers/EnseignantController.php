<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnseignantRequest;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnseignantController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $enseignants = Enseignant::all();
    return view("pages.enseignants.index", compact("enseignants"));
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
  public function store(StoreEnseignantRequest $request)
  {
    // return $request;
    try {
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
      $Enseignant->password = Hash::make($request->password);
      $Enseignant->save();
      toastr()->success('Data saved Successfully !');

      return redirect()->route("enseignants.index");
    } catch (\Throwable $th) {
      return redirect()->back()->withErrors(['error' => $th->getMessage()]);
    }
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
  public function edit($id)
  {
    $Enseignant = Enseignant::findOrFail($id);
    return view('pages.enseignants.edit',compact('Enseignant'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(StoreEnseignantRequest $request)
  {
    try {
      $Enseignant = Enseignant::find($request->id);
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
      $Enseignant->password = Hash::make($request->password);
      $Enseignant->save();
      toastr()->success('Data saved Successfully !');

      return redirect()->route("enseignants.index");
    } catch (\Throwable $th) {
      return redirect()->back()->withErrors(['error' => $th->getMessage()]);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $enseignant = Enseignant::findOrFail($id);
    $enseignant->delete();
    return redirect()->back();

  }
}
