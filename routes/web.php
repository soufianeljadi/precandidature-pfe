<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.frontend.index');
});


// Etudiants routes
Route::view("/etudiant/login","auth.login_etudiant")->name("etudiant.loginForm")->middleware("guest");
Route::post("/etudiant/login",[LoginController::class,"login"])->name("login.etudiant");

Route::middleware('auth:etudiant')->group(function () {
  Route::get("/etudiant/dashboard",[EtudiantController::class,"index"])->name("etudiant.dashboard");
});


// Enseignants routes
Route::view("/enseignant/login","auth.login_enseignant")->name("enseignant.loginForm")->middleware("guest");
Route::post("/enseignant/login",[LoginController::class,"login"])->name("login.enseignant");

Route::middleware('auth:enseignant')->group(function () {
  Route::get("/enseignant/dashboard",[EtudiantController::class,"index2"])->name("enseignant.dashboard");
});
Route::view("/test","test")->middleware("auth:enseignant");

Route::view("/blank","blank");
// Admin routes
Route::middleware('auth:web')->group(function () {

  Route::get("/enseignants",[EnseignantController::class,"index"])->name("enseignants.index");
  Route::get("/dashboard",[UserController::class,"index"])->name("dashboard");
  Route::get("/ajouter-enseignant",[EnseignantController::class,"create"])->name("enseignant.create");
  Route::get("/sauvgarder-enseignant",[EnseignantController::class,"store"])->name("enseignant.store");
});







//Commun routes
Route::view("/selection","auth.selection")->name("selection");
Route::get('/logout', [LoginController::class,"logout"])->name('logout');


Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';


















