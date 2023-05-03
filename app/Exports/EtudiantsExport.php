<?php

namespace App\Exports;

use App\Http\Traits\FilterCandidaturesTrait;
use App\Models\Candidature;
use App\Models\Etudiant;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class EtudiantsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $candidatures;

    public function __construct($candidatures)
    {
        $this->candidatures = $candidatures;
    }

    public function view() : View
    {

      return view('pages.enseignants.resultats', [
        "candidatures" => $this->candidatures,
    ]);
    }
}
