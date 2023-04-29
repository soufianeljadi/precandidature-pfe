<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Etudiant;
use App\Models\Region;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $nbr_etudiants = Etudiant::count();
    $nbr_candidatures = Candidature::count();
    $candidatures = Candidature::all();
    // $candidaturesParRegion = Region::withCount(['villes.etudiants.candidatures'])
    // ->orderByDesc('villes_count')
    // ->get()
    // ->pluck('villes_count', 'nom');

    $candidaturesParRegion = DB::table('candidatures')
      ->join('etudiants', 'candidatures.etudiant_id', '=', 'etudiants.id')
      ->join('villes', 'etudiants.ville', '=', 'villes.id')
      ->join('regions', 'villes.region_id', '=', 'regions.id')
      ->select('regions.nom AS region', DB::raw('count(*) as total'))
      ->groupBy('region')
      ->orderBy('total', 'desc')
      ->get();


    return view("pages.admin.dashboard")->with([
      "nbr_etudiants"  => $nbr_etudiants,
      "nbr_candidatures"  => $nbr_candidatures,
      "candidatures"  => $candidatures,
      "candidaturesParRegion"  => $candidaturesParRegion,
      // "candidaturesParRegion" => $candidaturesParRegion

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
    //
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
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
