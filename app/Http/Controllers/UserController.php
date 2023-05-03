<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Etudiant;
use App\Models\Formation;
use App\Models\Region;
use App\Models\Ville;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
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
    $formations = Formation::all();
    $nbr_candidatures_today = DB::table('candidatures')->whereDate('created_at', '=', now()->format('Y-m-d'))->count();

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

      $dates = CarbonPeriod::create(Carbon::now()->subDays(30), '1 day', Carbon::now())->toArray();

      $candidaturesParJour = Candidature::selectRaw('date(created_at) as jour, count(*) as nombreCandidatures')
      ->where('created_at', '>=', Carbon::now()->subDays(30))
      ->groupBy('jour')
      ->get();

      $results = collect($dates)->map(function ($date) use ($candidaturesParJour) {
        $candidature = $candidaturesParJour->firstWhere('jour', $date->toDateString());
        return [
            'jour' => $date->toDateString(),
            'nombreCandidatures' => $candidature ? $candidature->nombreCandidatures : 0,
        ];
    });



    return view("pages.admin.dashboard")->with([
      "nbr_etudiants"  => $nbr_etudiants,
      "nbr_candidatures"  => $nbr_candidatures,
      "candidatures"  => $candidatures,
      "formations"  => $formations,
      "candidaturesParRegion"  => $candidaturesParRegion,
      "candidaturesParJour"  => $results,
      "nbr_candidatures_today"  => $nbr_candidatures_today,
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
