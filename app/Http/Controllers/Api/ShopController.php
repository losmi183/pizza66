<?php

namespace App\Http\Controllers\Api;

use App\Models\Addon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function pizza()
    {
        $pizza = Product::where('type', 'pizza')->get();

        return response()->json($pizza, 200);
    }

    public function drinks()
    {
        $drinks = Product::where('type', 'drink')->get();

        return response()->json($drinks, 200);
    }

    public function bbq()
    {
        $bbq = Product::where('type', 'bbq')->get();

        return response()->json($bbq, 200);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if(! $product OR $product == null) {
            return response()->json('No product found', 404);
        }

        $addons = Addon::with('addonOption')->get();

        $data = [
            'product' => $product,
            'addons' => $addons
        ];
        
        return response()->json($data, 200);
    }
}
