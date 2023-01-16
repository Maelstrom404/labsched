<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  /**
   * Handle the login request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);
    
    $credentials = $request->only(['email', 'password']);
    //dd($credentials);
    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->route('dashboard');
    }

    return redirect('/')->withErrors([
      'email' => 'The provided credentials do not match our records.'
    ]);
  }
}
