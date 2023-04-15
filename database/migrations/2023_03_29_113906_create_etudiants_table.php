<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('etudiants', function (Blueprint $table) {
      $table->id();
      $table->string('nom');
      $table->string('nom_ar');
      $table->string('prenom');
      $table->string('prenom_ar');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('code_massar')->unique();
      $table->string('cin')->unique();
      $table->date('date_naissance');
      $table->string('lieu_naissance');
      $table->string('lieu_naissance_ar');
      $table->foreignId('province_naissance')->references("id")->on("villes")->onDelete('cascade');
      $table->string('pays',60);
      $table->string('situation_familiale');
      $table->tinyInteger('sexe'); // 0 F  --- 1 M
      $table->integer('telephone');
      $table->string('photo');
      $table->string('adresse_perso1');
      $table->string('adresse_perso2')->nullable();
      $table->string('adresse_perso3')->nullable();
      $table->foreignId('ville')->references("id")->on("villes")->onDelete('cascade');
      $table->tinyInteger('fonctionnaire'); //1 => true - 0 false;
      $table->timestamp('email_verified_at');
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('etudiants');
  }
};
