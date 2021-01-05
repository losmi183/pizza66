<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\CheckoutStoreRequest;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('checkout', compact('user'));
    }


    public function store(CheckoutStoreRequest $request)
    {   
        $order = Order::create([

            'suma' => Cart::subtotal(),

            'ime' => $request->ime,
            'email' => $request->email ?? $request->email,
            'adresa' => $request->adresa,
            'telefon' => $request->telefon,
            'mesto' => $request->mesto ?? $request->mesto,
            'napomene' => $request->napomene ?? $request->napomene,
        ]);


        foreach(Cart::content() as $product)
        {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $product->id,

                'price' => $product->price,
                'quantity' => $product->qty,
                
                'size' => $product->options->size,
                'addons' => json_encode($product->options->addons),
            ]);
        }

        Cart::destroy();

        return redirect()->route('/');
    }


}
