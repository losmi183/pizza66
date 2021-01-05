<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function pizza()
    {        
        $pizza = Product::where('type', 'pizza')->get();

        return view('shop', compact('pizza'));
    }

    public function drinks()
    {        
        $drinks = Product::where('type', 'drink')->get();

        return view('drinks', compact('drinks'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        $addons = Addon::with('addonOption')->get();

        return view('product', compact('product', 'addons'));
    }

}
