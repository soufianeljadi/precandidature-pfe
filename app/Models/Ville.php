<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
  use HasFactory;

  public function region()
  {
    return $this->belongsTo(Region::class);
  }
  public function etudiants()
  {
    return $this->hasMany(Etudiant::class);
  }
}
