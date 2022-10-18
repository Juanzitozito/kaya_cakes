<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function login(Request $form)
{

 if ($form->isMethod('POST'))
 {

 $credenciais = $form->validate([
 'username' => ['required'],
 'password' => ['required'],
 ]);
 

 if (Auth::attempt($credenciais))
 {
 }
 else
 {

 return redirect()->route('login')->with('erro', 
'Usuário ou senha inválidos.');
 }
 }
 return view('usuarios.login');
}

}
