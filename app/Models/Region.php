<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ville;
use App\Models\Etudiant;

class Region extends Model
{
  use HasFactory;

  public function villes()
  {
    return $this->hasMany(Ville::class);
  }

  public function etudiants()
  {
    return $this->hasManyThrough(Etudiant::class,Ville::class,"region_id","ville");
  }
}
