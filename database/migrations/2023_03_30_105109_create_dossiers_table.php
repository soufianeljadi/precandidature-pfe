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
      $table->integer("annee_obt_bac")->nullable();
      $table->string("serie_bac")->nullable();
      $table->float("moyenne_bac")->nullable();
      $table->string("mention_bac")->nullable();
      $table->foreignId('province_bac')->nullable()->nullable()->references("id")->on("villes")->onDelete('cascade');
      $table->string("bac_document")->nullable();
      $table->string("academie")->nullable();

      //bac +2

      $table->integer("annee_obt_diplome")->nullable();
      $table->string("type_diplome")->nullable();
      $table->string("etablissement")->nullable();
      $table->string("mention_diplome")->nullable();
      $table->string("specialite_diplome")->nullable();
      $table->float("moyenne_diplome")->nullable();
      $table->float("note_s1")->nullable(); // -s1
      $table->float("note_s2")->nullable(); // -s2
      $table->float("note_s3")->nullable(); // -s3
      $table->float("note_s4")->nullable(); // -s4
      $table->string("diplome_document")->nullable();
      $table->string("releve_annee_1")->nullable();
      $table->string("releve_annee_2")->nullable();
      $table->string("cv")->nullable();
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
