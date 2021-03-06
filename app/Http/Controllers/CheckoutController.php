<?php

namespace App\Http\Controllers;

use App\Events\PizzaOrdered;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\CheckoutStoreRequest;

class CheckoutController extends Controller
{    
    public function __construct()
    {
        return $this->middleware('emptyCart');
    }

    public function index()
    {
        $user = auth()->user();

        return view('checkout', compact('user'))->with('success', 'Unesite Vaše podatke');
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

        // Fire Event for Pusher
        event(new PizzaOrdered($order));

        // Save order id in session
        session(['order_id' => $order->id]);  

        return redirect()->route('thankyou')->with('success', 'Vaša porudzbina je primljena');
    }


}
