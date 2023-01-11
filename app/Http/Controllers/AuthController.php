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
<<<<<<< HEAD
        $credentials = $request->only(['email', 'password']);
        //dd($credentials);
=======
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

>>>>>>> 95a86cb10b842609fb26fa6c7953194303871332
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
            dd('here');
        }

<<<<<<< HEAD
        return redirect('/')->withErrors([ 
            'email' => 'The provided credentials do not match our records.' 
        ]);
=======
        return redirect('/')->withErrors(['Invalid email or password']);*/
>>>>>>> 95a86cb10b842609fb26fa6c7953194303871332
    }

}
