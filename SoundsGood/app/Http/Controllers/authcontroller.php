<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('Login');
    }

    public function auth(Request $request){
        $credenciais = $request->validate([
            'email'=> ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credenciais, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('/index');
        } else {
            return redirect()->back()-> with('erro','Usuario ou Senha invalido');
        }
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/index');
    }
}
