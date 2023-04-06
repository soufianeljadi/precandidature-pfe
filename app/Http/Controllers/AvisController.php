<?php

namespace App\Http\Controllers;
use App\Http\Traits\AttachFilesTrait;

use App\Models\Avis;
use App\Models\Formation;
use Illuminate\Http\Request;

class AvisController extends Controller
{
  use AttachFilesTrait;
  /**
   * Display a listing of the resource.
   */
  public function index()
  {

    return view("pages.avis.index")->with([
      "tous_avis" => Avis::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $formations = Formation::all();
    return view("pages.avis.create")->with([
      "formations" => $formations,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      Avis::create([
        "debut_precandidature" => $request->debut_precandidature,
        "fin_precandidature" => $request->fin_precandidature,
        "formation_id" => $request->formation_id,
        "image_avis" => $request->file('image_avis')->getClientOriginalName(),
      ]);
      $this->uploadFile($request,"image_avis");
      toastr()->success('Data saved Successfully !');
      return redirect()->route("avis.index");
    } catch (\Throwable $th) {
      return redirect()->back()->withErrors(['error' => $th->getMessage()]);
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Avis $avis)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Avis $avis)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Avis $avis)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Avis $avis)
  {
    //
  }
}
