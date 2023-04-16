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

      $table->string('nom')->nullable();
      $table->string('nom_ar')->nullable();
      $table->string('prenom')->nullable();
      $table->string('prenom_ar')->nullable();
      $table->string('code_massar')->nullable()->unique();
      $table->string('cin')->nullable()->unique();

      $table->string('lieu_naissance')->nullable();
      $table->string('lieu_naissance_ar')->nullable();
      $table->date('date_naissance')->nullable();
      $table->string('pays',60)->nullable();
      $table->foreignId('province_naissance')->nullable()->references("id")->on("villes")->onDelete('cascade')->nullable();
      $table->tinyInteger('sexe')->nullable(); // 0 F  --- 1 M

      $table->string('email')->unique();
      $table->string('password');
      $table->integer('telephone')->nullable();
      $table->foreignId('ville')->nullable()->references("id")->on("villes")->onDelete('cascade')->nullable();
      $table->string('situation_familiale')->nullable();
      $table->string('photo')->nullable();
      $table->tinyInteger('fonctionnaire')->nullable(); //1 => true - 0 false;

      $table->string('adresse_perso1')->nullable();
      $table->string('adresse_perso2')->nullable();
      $table->string('adresse_perso3')->nullable();

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
