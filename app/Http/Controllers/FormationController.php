<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Models\Formation;
use Illuminate\Support\Str;



class FormationController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {

    return view("pages.admin.formations.index")->with([
      "formations" => Formation::all(),
      "enseignants" => Enseignant::all(),


    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view("pages.admin.formations.create")->with([
      "enseignants" => Enseignant::all(),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      "nom" => "unique:formations",
    ]);
    try {
      $formation = new Formation();
      $formation->nom = $request->nom;
      $formation->slug = Str::slug($request->nom);
      $formation->description = $request->description;
      $formation->duree = $request->duree;
      $formation->enseignant_id = $request->enseignant_id;
      $formation->save();
      toastr()->success('Les Données sont enregistrées avec succès !');

      return redirect()->route("formations.index");
    } catch (\Throwable $th) {
      return redirect()->back()->withErrors(['error' => $th->getMessage()]);
    }
  }

  public function formationDetails($slug)
  {
    $formation =  Formation::where("slug", $slug)->first();
    return view("pages.etudiants.avis_details")->with([

      "formation" => $formation
    ]);
  }




  public function show(string $id)
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
  public function update(Request $request)
  {
    try {
      $formation = Formation::findOrFail($request->id);
      $formation->nom = $request->nom;
      $formation->description = $request->description;
      $formation->enseignant_id = $request->enseignant_id;
      $formation->duree = $request->duree;
      $formation->save();
      toastr()->success('Les données sont enregistrées avec succès');
      return redirect()->route("formations.index");
    } catch (\Throwable $th) {
      return redirect()->back()->withErrors(['error' => $th->getMessage()]);
    }
  }

  /**
   * Remove the specified resource from storage.
   */

  public function destroy(Request $request)
  {

    $formation = Formation::findOrFail($request->formation_id);
    $formation->delete();
    toastr()->error('La formation a été bien supprimé !', " ");
    return redirect()->route("formation.index");
  }
}
