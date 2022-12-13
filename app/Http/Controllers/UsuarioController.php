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

    public function create(){
        return view('usuario.create');
    }

    public function login(Request $form)
    {
        if ($form->isMethod('POST')) {
            $credenciais = $form->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);


            if (Auth::attempt($credenciais)) {
                session()->regenerate();
                return redirect('/');
            } else {
                return redirect('/login')->with(
                    'erro',
                    'Usuário ou senha inválidos.'
                );
            }
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }
}
