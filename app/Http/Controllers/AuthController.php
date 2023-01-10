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
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
          ]);

          $credentials = $request->only('email', 'password');
          if (Auth::attempt($credentials)) {

            // If the user is authenticated, redirect them to the desired protected page
          return redirect()->intended('/protected');
          
          } else {
            // If the user's credentials are invalid, return an error message
           return redirect()->back()->withErrors([
          'message' => 'Invalid email or password',
            ]);
          }
        
       /* $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return redirect('/')->withErrors(['Invalid email or password']);*/
    }

}
