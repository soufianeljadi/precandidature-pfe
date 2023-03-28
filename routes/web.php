<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
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
Route::view("/etudiant/register","auth.register_etudiant")->name("etudiant.registerForm")->middleware("guest");
Route::post("/etudiant/login",[LoginController::class,"login"])->name("login.etudiant");
Route::post("/etudiant/register",[LoginController::class,"register"])->name("etudiant.register");

Route::middleware('auth:etudiant')->group(function () {
  Route::get("/etudiant/dashboard",[EtudiantController::class,"index"])->name("etudiant.dashboard");
  Route::get("/etudiant/profile",[EtudiantController::class,"profile"])->name("etudiant.profile");
  Route::post("/etudiant/save",[EtudiantController::class,"store"])->name("etudiant.store");
  Route::view("/avisLicencesPro","pages.etudiants.avis")->name("avislicencespro");

});


// Enseignants routes


Route::middleware('auth:enseignant')->group(function () {
  Route::get("/enseignant/dashboard",[EtudiantController::class,"index2"])->name("enseignant.dashboard");
});

Route::view("/test","test")->middleware("auth:enseignant");
Route::view("/blank","blank");

// Admin routes
Route::middleware('auth:web')->group(function () {
  Route::get("/dashboard",[UserController::class,"index"])->name("dashboard");
//enseignant controle
  Route::get("/enseignants",[EnseignantController::class,"index"])->name("enseignants.index");
  Route::get("/ajouter-enseignant",[EnseignantController::class,"create"])->name("enseignant.create");
  Route::post("/sauvgarder-enseignant",[EnseignantController::class,"store"])->name("enseignant.store");
  Route::get('/editer-enseignant/{id}', [EnseignantController::class, 'edit'])->name('enseignant.edit');
  Route::post('/update-enseignant', [EnseignantController::class, 'update'])->name('enseignant.update');
  Route::get('/supprimer-enseignant/{id}', [EnseignantController::class, 'destroy'])->name('enseignant.delete');
//formation routes
  Route::get("/formations",[FormationController::class,"index"])->name("formations.index");
  Route::get("/ajouter-formation",[FormationController::class,"create"])->name("formation.create");
  Route::post("/sauvgarder-formation",[FormationController::class,"store"])->name("formation.store");
  Route::get('/editer-formation/{id}', [FormationController::class, 'edit'])->name('formation.edit');
  Route::post('/update-formation', [FormationController::class, 'update'])->name('formation.update');
  Route::get('/supprimer-formation/{id}', [FormationController::class, 'destroy'])->name('formation.delete');
  //Gestion avis
  Route::get("/avis",[AvisController::class,"index"])->name("avis.index");
  Route::get("/ajouter-avis",[AvisController::class,"create"])->name("avis.create");
  Route::post("/sauvgarder-avis",[AvisController::class,"store"])->name("avis.store");


});




//Commun routes
Route::view("/selection","auth.selection")->name("selection")->middleware("guest");
Route::view("/usms/login","auth.usms-login")->name("usms.loginForm")->middleware("guest");
Route::post("/usms/login",[LoginController::class,"login"])->name("login.usms");
Route::get('/logout', [LoginController::class,"logout"])->name('logout');


// Route::middleware(['auth:etudiant'])->group(function () {
//   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


















