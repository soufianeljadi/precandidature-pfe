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
    $requiredFields = ['nom', 'nom_ar', 'prenom', 'prenom_ar', 'code_massar', 'cin', 'lieu_naissance', 'lieu_naissance_ar'];
    foreach ($requiredFields as $field) {
      if (empty($this->$field)) {
        return false;
      }
    }
    return true;
  }



  // calculate the percentage of profile completion
  public function profileCompletionPercentage()
  {
    $requiredFields = ['nom', 'nom_ar', 'prenom', 'prenom_ar', 'code_massar', 'cin', 'lieu_naissance', 'lieu_naissance_ar'];

    $totalFields = count($requiredFields);

    $filledFields = 0;


    foreach ($requiredFields as $field) {
      if (!empty($this->$field)) {
        $filledFields++;
      }
    }

    // Calculate the percentage of filled fields
    $percentage = $filledFields / $totalFields * 100;

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
