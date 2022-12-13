<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('carrinho.cart', compact('cartItems'));
    }


    public function addToCart($id)
    {
        $item = DB::table('sabores')->find($id);

        \Cart::add([
            'id' => $item->id,
            'name' => $item->sabor,
            'price' => $item->preco,
            'quantity' => 1,
            'attributes' => array(
                'image' => $item->foto,
            )
        ]);
        session()->flash('success', 'Produto adicionado com sucesso');

        return redirect('cart');

    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Removido com sucesso');

        return redirect('/cart');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Carrinho limpo com sucesso');

        return redirect('/cart');
    }
}
