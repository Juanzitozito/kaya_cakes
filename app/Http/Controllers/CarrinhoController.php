<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    function __construct()
    {
       $this->middleware('auth');
    }
}
