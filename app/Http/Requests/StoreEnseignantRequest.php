<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnseignantRequest extends FormRequest
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
      "nom" => "required",
      "prenom" => "required",
      "date_naissance" => "required",
      "cin" => "required|unique:enseignants|min:8|max:10",
      "telephone" => "required|max:13|min:10",
      "nationalite" => "required",
      "ville" => "required",
      "adresse" => "required",
      "email" => "required|email|unique:enseignants",
      "password" => "required|min:8",
      "matricule" => "required|unique:enseignants,matricule,except,id",
    ];
  }
  public function messages()
  {
      return [
          "nom.required" => "Le champ nom est obligatoire.",
          "prenom.required" => "Le champ prénom est obligatoire.",
          "date_naissance.required" => "Le champ date de naissance est obligatoire.",
          "cin.required" => "Le champ CIN est obligatoire.",
          "cin.min" => "Le champ CIN doit comporter au moins 8 caractères.",
          "telephone.required" => "Le champ téléphone est obligatoire.",
          "telephone.digits" => "Le champ téléphone doit comporter 10 chiffres.",
          "email.required" => "Le champ email est obligatoire.",
          "email.email" => "Le champ email doit être une adresse email valide.",
          "email.unique" => "Le champ email est déjà utilisé.",
          "nationalite.required" => "Le champ nationalite est obligatoire.",
          "adresse.required" => "Le champ adresse est obligatoire.",
          "password.required" => "Le champ mot de passe est obligatoire.",
          "matricule.required" => "Le champ matricule est obligatoire.",
      ];
  }
}




