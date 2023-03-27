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
      $table->string('code_massar')->unique()->nullable();
      $table->string('cin')->unique()->nullable();
      $table->foreignId('lieu_naissance')->nullable()->references("id")->on("villes")->onDelete('cascade');
      $table->date('date_naissance')->nullable();
      $table->integer('telephone')->nullable();
      $table->string('adresse')->nullable();
      $table->foreignId('ville')->nullable()->references("id")->on("villes")->onDelete('cascade');

      $table->tinyInteger('sexe')->nullable(); // 0 F  --- 1 M
      $table->timestamp('email_verified_at')->nullable();
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
