<?php

namespace App\Http\Traits;

use App\Models\Candidature;
use Illuminate\Support\Facades\Storage;

trait FilterCandidaturesTrait
{
  public function filterCandidatures($request)
  {
    $query = Candidature::with('etudiant')
      ->whereHas('formation', function ($query) {
        $query->where('enseignant_id', auth()->id());
      });

    if ($request->has('annee_bac') && $request->get('annee_bac') != "") {
      $annee_bac = $request->get('annee_bac');
      $query->whereHas('etudiant', function ($query) use ($annee_bac) {
        $query->whereHas('dossier', function ($query) use ($annee_bac) {
          $query->where('annee_obt_bac', $annee_bac);
        });
      });
    }

    if ($request->has('serie_bac') && $request->get('serie_bac') != "") {
      $serie_bac = $request->get('serie_bac');
      $query->whereHas('etudiant', function ($query) use ($serie_bac) {
        $query->whereHas('dossier', function ($query) use ($serie_bac) {
          $query->where('serie_bac', $serie_bac);
        });
      });
    }
    if ($request->has('moyenne_bac') && $request->get('moyenne_bac') != "") {
      $moyenne_bac = $request->get('moyenne_bac');
      $query->whereHas('etudiant', function ($query) use ($moyenne_bac) {
        $query->whereHas('dossier', function ($query) use ($moyenne_bac) {
          $query->where('moyenne_bac', ">=", $moyenne_bac);
        });
      });
    }




    $candidatures = $query->get();
    return $candidatures;
  }
}
