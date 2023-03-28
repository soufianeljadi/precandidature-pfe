<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $table ='formations';

    public function enseignant(){
      return $this->belongsTo(Enseignant::class,"enseignant_id");
    }

    public function avis(){
      return $this->hasOne(Avis::class);
    }


}
