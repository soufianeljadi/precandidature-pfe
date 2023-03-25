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
            "cin" => "required",
            "telephone" => "required",
            // "age" => "required",
            // "nationalite" => "required",
            // "ville" => "required",
            // "nationalite" => "required",
            // "adresse" => "",
            "email" => "required",
            "password" => "required",
            "matricule" => "required",
        ];
    }
}
