<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

  public function __construct()
  {
      $this->middleware('guest')->except('logout');
  }


  public function login(Request $request)
  {
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
     else return redirect()->route("enseignant.login")->with("error","Email ou Mot de pass invalide");

    }


  }



  public function logout(Request $request)
  {
      Auth::guard($request->type)->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
  }
}
