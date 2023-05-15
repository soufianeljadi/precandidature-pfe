<?php

namespace App\Http\Livewire;

use App\Models\Enseignant;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EnseignantValidator extends Component
{
  public $nom;
  public $prenom;
  public $date_naissance;
  public $email;
  public $password;
  public $telephone;
  public $cin;
  public $adresse;
  public $ville;
  public $nationalite;
  public $matricule;

  protected $rules = [
    'nom' => 'required',
    'prenom' => 'required',
    'date_naissance' => 'required',
    'cin' => 'required|min:8|max:10|unique:enseignants,cin,',
    'telephone' => 'required|max:13|min:10',
    'nationalite' => 'required',
    'ville' => 'required',
    'adresse' => 'required',
    'email' => 'required|email|unique:enseignants,email,',
    'matricule' => 'required|unique:enseignants,matricule,'
  ];

  public function render()
  {
    return view('livewire.enseignant-validator');
  }
  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }
  public function submit()
  {
    $this->validate();

    $enseignant = new Enseignant();
    $enseignant->nom = $this->nom;
    $enseignant->prenom = $this->prenom;
    $enseignant->date_naissance = $this->date_naissance;
    $enseignant->email = $this->email;
    $enseignant->password = Hash::make($this->password);
    $enseignant->telephone = $this->telephone;
    $enseignant->cin = $this->cin;
    $enseignant->adresse = $this->adresse;
    $enseignant->ville = $this->ville;
    $enseignant->nationalite = $this->nationalite;
    $enseignant->matricule = $this->matricule;
    $enseignant->save();
    toastr()->success('Data saved Successfully !');
    return redirect()->route("enseignants.index");

  }
}
