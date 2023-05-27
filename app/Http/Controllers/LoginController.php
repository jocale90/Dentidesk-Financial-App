<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PharIo\Manifest\Email;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    
    public function validatelogin(Request $request)
    {
        
        
        $datos = $request->validate(
        [
            'mail'   => 'required|email|max:100',
            'pass'   => 'required|string|max:16'
        ]);

        $email = $request->get('mail');    
        $pass  = $request->get('pass');

            /*echo $email.$pass;
            DD(Auth::attempt(['email' => $email, 'password' => $pass])); */


        if (Auth::attempt(['email' => $email, 'password' => $pass]))
        {
            return redirect("dashboard");
        }
        else
        {
            return redirect()->route('login')->with('message', 'Credenciales incorrectos');
        }
    }

    public function logout()
    {
        
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect("login");
        
    }
}
