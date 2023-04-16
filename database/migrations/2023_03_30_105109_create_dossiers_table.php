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
      $table->float("moyenne_bac");
      $table->string("mention_bac");
      $table->string("bac_document");
      $table->string("academie");

      //bac +2

      $table->integer("annee_obt_diplome");
      $table->string("type_diplome");
      $table->string("etablissement");
      $table->string("mention_diplome");
      $table->string("specialite");
      $table->float("moyenne_diplome");
      $table->float("note_s1"); // -s1
      $table->float("note_s2"); // -s2
      $table->float("note_s3"); // -s3
      $table->float("note_s4"); // -s4
      $table->string("diplome");
      $table->string("releve_annee_1");
      $table->string("releve_annee_2");
      $table->string("cv");
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
