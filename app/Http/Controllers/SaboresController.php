<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SaboresController extends Controller
{
    public function index(){
        $sabores = DB::table('sabores')->get();

        return view('sabores.index', ['sabores' => $sabores]);
    }

    public function create(){
        return view('sabores.create');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $data['disponivel'] = 0;

        DB::table('sabores')->insert($data);

        return redirect('/sabores');
    }
}
