<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SaboresController extends Controller
{
    public function index()
    {
        $sabores = DB::table('sabores')->get();

        return view('sabores.index', ['sabores' => $sabores]);
    }

    public function create()
    {
        return view('sabores.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $data['disponivel'] = 0;

        $file = $request->file('foto');
        $destinationPath = 'images/';
        $originalFile = $file->getClientOriginalName();
        $filename = uniqid() . $originalFile;
        $file->move($destinationPath, $filename);

        $data['foto'] = 'images/' . $filename;

        DB::table('sabores')->insert($data);

        return redirect('/sabores');
    }

    public function edit($id)
    {
        $sabor = DB::table('sabores')->find($id);

        return view('sabores.edit', ['sabor' => $sabor]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        unset($data['_token']);

        $file = $request->file('foto');
        $destinationPath = 'images/';
        $originalFile = $file->getClientOriginalName();
        $filename = uniqid() . $originalFile;
        $file->move($destinationPath, $filename);

        $data['foto'] = 'images/' . $filename;

        DB::update("UPDATE sabores SET sabor = :sabor, preco = :preco, disponivel = :disponivel, descricao = :descricao, foto = :foto WHERE id = :id", $data);

        return redirect('/sabores');
    }

    public function destroy($id)
    {
        DB::delete("DELETE FROM sabores WHERE id = ?", [$id]);

        return redirect('/sabores');
    }

    public function addcarrinho($id)
    {

        session()->put('item' . $id, $id);
        return redirect('/sabores');
    }
}
