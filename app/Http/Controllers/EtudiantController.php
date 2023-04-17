<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtudiantProfilRequest;
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
  public function store(StoreEtudiantProfilRequest $request)
  {


    // DB::beginTransaction();

    // try {
      // update in table student
      $student = Etudiant::findOrFail(auth()->user()->id);
      $dossier =  auth()->user()->dossier;
      $student->nom = $request->nom;
      $student->prenom = $request->prenom;
      $student->date_naissance = $request->date_naissance;
      $student->lieu_naissance = $request->lieu_naissance;
      $student->lieu_naissance_ar = $request->lieu_naissance_ar;
      $student->province_naissance = $request->province_naissance;
      $student->code_massar = $request->code_massar;
      $student->cin = $request->cin;
      $student->telephone = $request->telephone;
      $student->ville = $request->ville;
      $student->sexe = $request->sexe;
      $student->nom_ar = $request->nom_ar;
      $student->prenom_ar = $request->prenom_ar;
      $student->adresse_perso3 = $request->adresse_perso3;
      $student->adresse_perso2 = $request->adresse_perso2;
      $student->adresse_perso1 = $request->adresse_perso1;
      $student->situation_familiale = $request->situation_familiale;
      $student->pays = $request->pays;
      $student->photo = $request->photo;
      $student->email = $request->email;
      $student->fonctionnaire = $request->fonctionnaire;
      $student->save();



      // insert in to Dosiier
        //bac
      $dossier->annee_obt_bac = $request->annee_obt_bac;
      $dossier->moyenne_bac = $request->moyenne_bac;
      $dossier->serie_bac = $request->serie_bac;
      $dossier->province_bac = $request->province_bac;
      $dossier->mention_bac = $request->mention_bac;
      $dossier->bac_document = $request->bac_document;
      $dossier->academie = $request->academie;
      //bac +2
      $dossier->type_diplome = $request->type_diplome;
      $dossier->annee_obt_diplome = $request->annee_obt_diplome;
      $dossier->moyenne_diplome = $request->moyenne_diplome;
      $dossier->specialite_diplome = $request->specialite_diplome;
      $dossier->mention_diplome = $request->mention_diplome;
      $dossier->note_s1 = $request->note_s1;
      $dossier->note_s2 = $request->note_s2;
      $dossier->note_s3 = $request->note_s3;
      $dossier->note_s4 = $request->note_s4;
      $dossier->type_diplome = $request->type_diplome;
      $dossier->releve_annee_1 = $request->releve_annee_1;
      $dossier->releve_annee_2 = $request->releve_annee_2;
      $dossier->diplome_document = $request->diplome_document;
      $dossier->cv = $request->cv;
      $dossier->etablissement = $request->etablissement;
      $dossier->save();


      // DB::commit();
      toastr()->success("Data Saved successfully!");
      return redirect()->route("etudiant.profile");
    // } catch (\Exception $e) {
    //   // DB::rollback();
    //   return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    // }
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
