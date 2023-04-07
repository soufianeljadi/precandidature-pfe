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

    return view("pages.formations.index")->with([
      "formations" => Formation::all(),


    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view("pages.formations.create")->with([
      "enseignants" => Enseignant::all(),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // return $request;
    try {
      $formation = new Formation();
      $formation->nom = $request->nom;
      $formation->slug = Str::slug($request->nom);
      $formation->description = $request->description;
      $formation->duree = $request->duree;
      $formation->enseignant_id = $request->enseignant_id;
      $formation->save();
      toastr()->success('Data saved Successfully !');

      return redirect()->route("formations.index");
    } catch (\Throwable $th) {
      return redirect()->back()->withErrors(['error' => $th->getMessage()]);
    }
  }

  public function formationDetails(Request $request)
  {
    $avis =  Avis::findOrFail($request->id);
    $formation = $avis->formation;
    return view("pages.etudiants.avis_details")->with([
      "avis" => $avis,
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
    //
    $formation = Formation::findOrFail($id);
    return view('pages.formations.edit', compact('formation'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {
    //
    try {
      $formation = Formation::findOrFail($request->id);
      $formation->nom = $request->nom;
      $formation->description = $request->description;
      $formation->duree = $request->duree;
      $formation->save();
      toastr()->success('Data saved Successfully !');
      return redirect()->route("formations.index");
    } catch (\Throwable $th) {
      return redirect()->back()->withErrors(['error' => $th->getMessage()]);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    //
    $formation = Formation::findOrFail($id);
    $formation->delete();
    return redirect()->back();
  }
}
