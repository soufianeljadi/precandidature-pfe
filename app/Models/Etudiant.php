<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Etudiant extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;



  protected $table = 'etudiants';
  protected $guard = 'etudiant';
  protected $fillable = [
    'nom',
    'prenom',
    'email',
    'password',
    "code_massar"
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];



  public function lieu_naissance_etudiant()
  {
    return $this->belongsTo(Ville::class, "lieu_naissance");
  }

  public function ville_etudiant()
  {
    return $this->belongsTo(Ville::class, "ville");
  }

  public function province_naissance_etudiant()
  {
    return $this->belongsTo(Ville::class, "province_naissance");
  }

  public function dossier()
  {
    return $this->hasOne(Dossier::class);
  }

  public function candidatures()
  {
    return $this->hasMany(Candidature::class);
  }


  //Check the student has enter all informations in his profile
  public function isProfileComplete()
  {
    $requiredFields = [
      'nom', 'nom_ar', 'prenom', 'prenom_ar', 'code_massar', 'cin', 'lieu_naissance', 'lieu_naissance_ar', 'date_naissance', 'province_naissance','photo',
      'telephone', 'ville', 'sexe', 'adresse_perso3', 'adresse_perso2', 'adresse_perso1', 'situation_familiale', 'pays', 'email', 'fonctionnaire'
    ];
    $dossierRequiredFields =  ['annee_obt_bac','annee_obt_diplome', 'moyenne_bac', 'serie_bac', 'province_bac', 'mention_bac', 'academie', 'type_diplome', 'etablissement','mention_diplome','moyenne_diplome',"note_s1",'note_s2','note_s3','note_s4','diplome_document','releve_note','bac_document','cv'];

    foreach ($requiredFields as $field) {
      if (empty($this->$field)) {
        return false;
      }
    }
    //! Rah 0 ki3tabro database field khawi
    foreach ($dossierRequiredFields as $field) {
      if (empty($this->$field)) {
        return false;
      }
    }
    return true;
  }



  // calculate the percentage of profile completion
  public function profileCompletionPercentage()
  {
    $requiredFields = [
      'nom', 'nom_ar', 'prenom', 'prenom_ar', 'code_massar', 'cin', 'lieu_naissance', 'lieu_naissance_ar', 'date_naissance', 'province_naissance','photo',
      'telephone', 'ville', 'sexe', 'adresse_perso3', 'adresse_perso2', 'adresse_perso1', 'situation_familiale', 'pays', 'email', 'fonctionnaire'
    ];
    $dossierRequiredFields =  ['annee_obt_bac','annee_obt_diplome', 'moyenne_bac', 'serie_bac', 'province_bac', 'mention_bac', 'academie', 'type_diplome', 'etablissement','mention_diplome','moyenne_diplome',"note_s1",'note_s2','note_s3','note_s4','diplome_document','releve_note','bac_document','cv'];

    $totalFields = count($requiredFields) + count($dossierRequiredFields);

    $filledFields = 0;


    foreach ($requiredFields as $field) {
      if (isset($this->$field)) {
        $filledFields++;

      }

    }
    foreach ($dossierRequiredFields as $field) {
      if (isset($this->dossier->$field)) {
        $filledFields++;
      }

    }

    // Calculate the percentage of filled fields
    $percentage = $filledFields / $totalFields * 100;
    $percentage = number_format($percentage, 2);
    return $percentage;
  }



  public function profileCompletionColor()
  {
    // Define the color based on the profile completion percentage
    $percentage = $this->profileCompletionPercentage();
    if ($percentage >= 80) {
      $color = 'success';
    } elseif ($percentage >= 50) {
      $color = 'primary';
    } elseif ($percentage >= 30) {
      $color = 'warning';
    } else {
      $color = 'danger';
    }
    return $color;
  }
}
