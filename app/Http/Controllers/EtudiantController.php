<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Dossier;
use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Do_;

class EtudiantController extends Controller
{
  /**
   * Display a listing of the resource.
   */

  public function index()
  {
    return view("pages.etudiants.dashboard");
  }
  public function avis()
  {
    $avis = Avis::all();
    return view("pages.etudiants.avis")->with([
      "avis" => $avis
    ]);
  }
  public function profile()
  {
    $villes = Ville::all();
    return view("pages.etudiants.profile")->with([
      "villes" => $villes,
    ]);
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
    // return $request;

    // DB::beginTransaction();

    try {
      // update in table student
      $student = Etudiant::findOrFail(auth()->user()->id);
      $dossier =  auth()->user()->dossier;
      $student->nom = $request->nom;
      $student->prenom = $request->prenom;
      $student->date_naissance = $request->date_naissance;
      $student->lieu_naissance = $request->lieu_naissance;
      $student->code_massar = $request->code_massar;
      $student->cin = $request->cin;
      $student->telephone = $request->telephone;
      $student->ville = $request->ville;
      $student->sexe = $request->sexe;
      $student->adresse = $request->adresse;
      $student->save();



      // insert in to Dosiier
      $dossier->annee_obt_bac = $request->annee_obt_bac;
      $dossier->note_bac = $request->note_bac;
      $dossier->type_bac = $request->type_bac;
      $dossier->mention_bac = $request->mention_bac;
      $dossier->annee_obt_diplome = $request->annee_obt_diplome;
      $dossier->note_diplome = $request->note_diplome;
      $dossier->type_diplome = $request->type_diplome;
      $dossier->specialite_diplome = $request->specialite_diplome;
      $dossier->mention_diplome = $request->mention_diplome;
      $dossier->etablissement_diplome = $request->etablissement_diplome;
      $dossier->etablissement_ville = $request->etablissement_ville;
      $dossier->save();


      // DB::commit();
      toastr()->success("Data Saved successfully!");
      return redirect()->route("etudiant.profile");
    } catch (\Exception $e) {
      // DB::rollback();
      return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Etudiant $etudiant)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Etudiant $etudiant)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Etudiant $etudiant)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Etudiant $etudiant)
  {
    //
  }


  public function tousEtudiants()
  {
    return view("pages.etudiants.index")->with([
      "etudiants" => Etudiant::all(),
    ]);
  }
}
