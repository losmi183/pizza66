<?php

namespace App\Http\Controllers\Api;

use App\Models\Addon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AddonResource;
use App\Http\Resources\ProductResource;
use App\Models\AddonOption;

class ShopController extends Controller
{
    public function pizza()
    {
        $pizza = Product::where('type', 'pizza')->get();

        return ProductResource::collection($pizza);
    }

    public function drinks()
    {
        $drinks = Product::where('type', 'drink')->get();

        return ProductResource::collection($drinks);
    }

    public function bbq()
    {
        $bbq = Product::where('type', 'bbq')->get();

        return ProductResource::collection($bbq);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if(! $product OR $product == null) {
            return response()->json('No product found', 404);
        }

        $addons = Addon::with('addonOption')->get();

        $data = [
            'product' => new ProductResource($product),
            'addons' => $addons
        ];
        
        return response()->json($data, 200);
    }

    public function addons() {
        return Addon::all();
    }
    public function addonOptions() {
        return AddonOption::all();
    }

}
