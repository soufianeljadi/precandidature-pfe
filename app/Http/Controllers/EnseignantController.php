<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnseignantRequest;
use App\Models\Candidature;
use App\Models\Enseignant;
use App\Models\Etudiant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnseignantController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {

    return view("pages.enseignants.dashboard")->with([
      // "ens" => Enseignant::all(),
      "nbr_etudiants" => Etudiant::count(),
      "candidatures_today" => isset(auth()->user()->formation) ? auth()->user()->formation->candidatures()->whereDate('created_at', Carbon::today())
      ->count() : null,
    ]);
  }

  //display for the admin
  public function tousEnseignants()
  {
    $enseignants = Enseignant::all();
    return view("pages.admin.enseignants.index", compact("enseignants"));
  }


  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view("pages.admin.enseignants.create");
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreEnseignantRequest $request)
  {
    // return $request;
    try {
      $enseignant = new Enseignant();
      $enseignant->nom = $request->nom;
      $enseignant->prenom = $request->prenom;
      $enseignant->date_naissance = $request->date_naissance;
      $enseignant->email = $request->email;
      $enseignant->password = Hash::make($request->password);
      $enseignant->telephone = $request->telephone;
      $enseignant->cin = $request->cin;
      $enseignant->adresse = $request->adresse;
      $enseignant->ville = $request->ville;
      $enseignant->nationalite = $request->nationalite;
      $enseignant->matricule = $request->matricule;
      $enseignant->save();
      toastr()->success('Les données sont enregistrées avec succès!');
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
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(StoreEnseignantRequest $request)
  {

    try {
      $enseignant = Enseignant::find($request->id);
      $enseignant->nom = $request->nom;
      $enseignant->prenom = $request->prenom;
      $enseignant->date_naissance = $request->date_naissance;
      $enseignant->email = $request->email;
      $enseignant->telephone = $request->telephone;
      $enseignant->cin = $request->cin;
      $enseignant->adresse = $request->adresse;
      $enseignant->ville = $request->ville;
      $enseignant->nationalite = $request->nationalite;
      $enseignant->matricule = $request->matricule;
      $enseignant->password = Hash::make($request->password);
      $enseignant->save();
      toastr()->success('les données sont enregistrées avec succès!');
      return redirect()->route("enseignants.index");
    } catch (\Throwable $th) {
      return redirect()->back()->withErrors(['error' => $th->getMessage()]);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request)
  {

    $enseignant = Enseignant::findOrFail($request->enseignant_id);
    $enseignant->delete();
    toastr()->error('L\'enseignant a été bien supprimé !', " ");
    return redirect()->route("enseignants.index");
  }
}
