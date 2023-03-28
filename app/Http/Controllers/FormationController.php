<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;



class FormationController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $formations = Formation::all();
    return view("pages.formation.index", compact("formations"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view("pages.formation.create");
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
   * Display the specified resource.
   */
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
    return view('pages.formation.edit',compact('formation'));
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
      $formation->description = $request->description ;
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
