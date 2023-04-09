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
      $table->string('prenom');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('code_massar')->unique();
      $table->string('code_apogee')->unique();
      $table->string('cin')->unique();
      $table->foreignId('lieu_naissance')->references("id")->on("villes")->onDelete('cascade');
      $table->date('date_naissance');
      $table->integer('telephone');
      $table->string('adresse');
      $table->foreignId('ville')->references("id")->on("villes")->onDelete('cascade');
      $table->tinyInteger('sexe'); // 0 F  --- 1 M
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
