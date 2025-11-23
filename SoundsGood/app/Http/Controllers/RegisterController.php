<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function register(Request $request)
    {
        // Validação dos dados
        $request-> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:6',
        ]);

        // Criar usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Logar automaticamente
        auth::login($user);

        // Redirecionar para página inicial após cadastro
        return redirect()-> route('/index');
    }
}
