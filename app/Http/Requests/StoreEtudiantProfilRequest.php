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
          "nom" => "required",
          "prenom" => "required",
          "lieu_naissance" => "required",
          "lieu_naissance_ar" => "required",
          "pays" => "required",
          "date_naissance" => "required",
          "situation_familiale" => "required",
          "sexe" => "required",
          "nom" => "required",
          "nom" => "required",
          "nom" => "required",
          "nom" => "required",
          "fonctionnaire" => "required",
        ];
    }
}
