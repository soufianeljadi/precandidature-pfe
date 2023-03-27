<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Dossier;
use App\Models\Etudiant;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{

  public function __construct()
  {
      $this->middleware('guest')->except('logout');
  }


  public function login(Request $request)
  {
    // return $request;
    if($request->type == "etudiant"){
      if (Auth::guard("etudiant")->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->intended(RouteServiceProvider::ETUDIANT);
     }
     else return back()->with("error","Email ou Mot de pass invalide");
    }

    if($request->type == "enseignant"){
      if (Auth::guard("enseignant")->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->intended(RouteServiceProvider::ENSEIGNANT);
     }
     else return redirect()->route("usms.loginForm")->with("error","Email ou Mot de pass invalide");
    }

    if($request->type == "administrateur"){
      if (Auth::guard("web")->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->intended(RouteServiceProvider::HOME);
     }
     else return redirect()->route("usms.loginForm")->with("error","Email ou Mot de pass invalide");
    }

  }

  public function register(Request $request): RedirectResponse
  {
    // return $request;
    $request->validate([
      'nom' => ['required', 'string', 'max:255'],
      'prenom' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Etudiant::class],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
  ]);

  $etudiant = Etudiant::create([
      'nom' => $request->nom,
      'prenom' => $request->prenom,
      'email' => $request->email,
      'password' => Hash::make($request->password),
  ]);

  Dossier::create([
    "etudiant_id" => $etudiant->id
  ]);

  // event(new Registered($etudiant));

  Auth::guard("etudiant")->login($etudiant);

  return redirect(RouteServiceProvider::ETUDIANT);
  }



  public function logout(Request $request)
  {
      Auth::guard($request->type)->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
  }
}
