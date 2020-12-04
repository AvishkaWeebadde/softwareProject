<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Cart;


use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Products $product)
    {
        Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));



        return redirect()->route('cart.index');


    }

    public function index()
    {
        $cartItems = Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartItems'));
    }

    public function destroy($itemID)
    {
        Cart::session(auth()->id())->remove($itemID);

        return back();
    }
}
