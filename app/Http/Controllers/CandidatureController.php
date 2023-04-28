<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.etudiants.candidatures")->with([

        ]);
    }

    public function candidatures()
    {
      return view("pages.admin.candidatures.index")->with([
        "candidatures" => Candidature::all(),

      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $candidature = new Candidature();
        $candidature->etudiant_id = auth()->id();
        $candidature->formation_id = $request->formation_id;
        $candidature->save();
        return redirect()->route("etudiant.dashboard");
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
    public function show(Request $request)
    {
      $candidature =  Candidature::findOrFail($request->candidature_id);
      return view("pages.etudiants.candidature_details")->with([
        "candidature" => $candidature,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidature $candidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidature $candidature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidature $candidature)
    {
        //
    }
}
