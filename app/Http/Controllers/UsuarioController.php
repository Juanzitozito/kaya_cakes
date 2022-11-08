<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    public function redirectlogin()
    {
        return view('usuario.login');
    }

    public function login(Request $form)
    {
        $credenciais = $form->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credenciais)) {
            session()->regenerate();
            return redirect()->route('/');
        } else {
            return redirect()->route('login')->with(
                'erro',
                'Usuário ou senha inválidos.'
            );
        }
    }
}
