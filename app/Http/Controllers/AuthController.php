<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin(){
        return view('auth.login');
    }

    public function logon(Request $request){


        $credenciais = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(!Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->route('login');
        }

        return redirect()->route('products.index');


    }

    public function logout(){
        session()->flush();

        return redirect()->route('login');
    }
}
