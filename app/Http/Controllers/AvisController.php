<?php

namespace App\Http\Controllers;

use App\Http\Traits\AttachFilesTrait;

use App\Models\Avis;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvisController extends Controller
{
  use AttachFilesTrait;
  /**
   * Display a listing of the resource.
   */
  public function index()
  {

    return view("pages.admin.avis.index")->with([
      "tous_avis" => Avis::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $formations = Formation::all();
    return view("pages.admin.avis.create")->with([
      "formations" => $formations,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'image_avis' => 'required|image|max:1024',
      'debut_precandidature' => 'required',
      'fin_precandidature' => 'required',
    ]);
    if($request->formation_id == null ){
      $formation = Formation::findOrFail($request->formation_id);
      if($formation->avis){
        return redirect()->back()->withErrors(['error' => "Un avis est déjà créé pour la formation: " . $formation->nom ]);
      }
    }
    try {
      Avis::create([
        "debut_precandidature" => $request->debut_precandidature,
        "fin_precandidature" => $request->fin_precandidature,
        "formation_id" => $request->formation_id,
        "image_avis" => $request->file('image_avis')->getClientOriginalName(),
      ]);
      $extension = $request->file("image_avis")->getClientOriginalExtension();
      $name_file = $request->file('image_avis')->getClientOriginalName();
      $request->file("image_avis")->storeAs('avis/', $name_file, 'upload_avis');




      toastr()->success('Les données sont enregistrées avec succès !');
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
  public function destroy(Request $request)
  {

    $avis = Avis::findOrFail($request->avis_id);
    Storage::disk('upload_avis')->delete('avis/' . $avis->image_avis);

    $avis->delete();
    toastr()->error('L\'avis a été bien supprimé !', " ");
    return redirect()->route("avis.index");
  }
}
