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
            $table->string("annee_obt_bac");
            $table->float("note_bac");
            $table->string("type_bac");
            $table->string("mention_bac");
            $table->string("annee_obt_diplome");
            $table->float("note_diplome");
            $table->string("type_diplome");
            $table->string("specialite_diplome");
            $table->string("mention_diplome");
            $table->string("etablissement_diplome");
            $table->string("etablissement_ville");
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
