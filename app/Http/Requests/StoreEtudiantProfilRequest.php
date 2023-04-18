<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEtudiantProfilRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
   */
  public function rules(): array
  {
    return [
      //Informations personnelles
      "nom" => "required|string",
      "prenom" => "required|string",
      "nom_ar" => "required|string|regex:/\p{Arabic}/u",
      "prenom_ar" => "required|string|regex:/\p{Arabic}/u",
      "code_massar" => "required",
      "cin" => "required",
      "lieu_naissance" => "required",
      "lieu_naissance_ar" => "required|regex:/\p{Arabic}/u",
      "date_naissance" => "required",
      "province_naissance" => "required",
      "pays" => "required",
      "sexe" => "required",
      "telephone" => "required",
      "email" => "required",
      "situation_familiale" => "required",
      "ville" => "required",
      "photo" => "required",


      "adresse_perso1" => "required",
      "adresse_perso2",
      "adresse_perso3",
      "fonctionnaire" => "required",

      //Informations du Baccalauréat
      "annee_obt_bac" => "required",
      "serie_bac" => "required",
      "moyenne_bac" => "required",
      "mention_bac" => "required",
      "province_bac" => "required",
      "bac_document" => "required",
      "academie" => "required",
      //Informations du diplôme (BAC+2)
      "annee_obt_diplome" => "required",
      "type_diplome" => "required",
      "moyenne_diplome" => "required",
      "mention_diplome" => "required",
      "specialite_diplome" => "required",
      "etablissement" => "required",
      "note_s1" => "required",
      "note_s2" => "required",
      "note_s3" => "required",
      "note_s4" => "required",
      // "releve_annee_1" => "required",
      // "releve_annee_2" => "required",
      // "diplome_document" => "required",
      // "cv" => "required",
    ];
  }
}
