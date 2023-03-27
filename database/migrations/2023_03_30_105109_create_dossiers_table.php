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
            $table->string("annee_obt_bac")->nullable();
            $table->float("note_bac")->nullable();
            $table->string("type_bac")->nullable();
            $table->string("mention_bac")->nullable();
            $table->string("annee_obt_diplome")->nullable();
            $table->float("note_diplome")->nullable();
            $table->string("type_diplome")->nullable();
            $table->string("specialite_diplome")->nullable();
            $table->string("mention_diplome")->nullable();
            $table->string("etablissement_diplome")->nullable();
            $table->string("etablissement_ville")->nullable();
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
