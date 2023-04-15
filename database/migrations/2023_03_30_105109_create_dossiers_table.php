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
    Schema::create('dossiers', function (Blueprint $table) {
      $table->id();
      $table->foreignId('etudiant_id')->nullable()->references("id")->on("etudiants")->onDelete('cascade');
      //bac
      $table->integer("annee_obt_bac");
      $table->string("serie_bac");
      $table->foreignId('province_bac')->references("id")->on("villes")->onDelete('cascade');
      $table->float("note_bac");
      $table->string("mention_bac");
      $table->string("bac_document");
      $table->string("academie");

      //bac +2

      $table->integer("annee_obt_diplome");
      $table->string("type_diplome");
      $table->string("etablissement_diplome");
      $table->string("mention_diplome");
      $table->string("specialite_diplome");
      $table->float("moyenne_diplome");
      $table->string("notes_diplome"); // s1 - s2  -s3 -s4
      $table->string("diplome_document");
      $table->string("notes_document");
      $table->string("cv_document");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('dossiers');
  }
};
