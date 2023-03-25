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
        Schema::create('enseignants', function (Blueprint $table) {
          $table->id();
          $table->string('nom');
          $table->string('prenom');
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->string('matricule')->unique();
          $table->date('date_naissance');
          $table->string('email');
          $table->integer('telephone');
          $table->integer('age');
          $table->string('cin');
          $table->string('adresse');
          $table->string('ville');
          $table->string('nationalite');
          $table->rememberToken();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};
