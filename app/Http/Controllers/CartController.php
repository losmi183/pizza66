<?php

namespace App\Http\Controllers;

use App\Models\AddonOption;
use App\Pizza;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Product::where('type', 'drink')->inRandomOrder()->get();

        return view('cart', compact('drinks'))  ;
    }

    /**
     * Store product in cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        

        // return $request->all();

        // Calculate sum of all addons
        $addonSum = 0;
        $addons = [];

        if($request->addon) 
        {
            foreach($request->addon as $addon) 
            {
                $addon = AddonOption::find($addon);
                $addonSum += $addon->price;
                array_push($addons, $addon->addon->name .' '. $addon->size .' '. $addon->grams .'g'. ' - ' . $addon->price .'rsd ');
            }
        }

        Cart::add([
            'price' => $request->price + $addonSum, 
            'id' => $request->id, 
            'name' => $request->name, 
            'qty' => $request->qty, 
            'weight' => 1, 
            'options' => [
                'content' => $request->content,
                'size' => $request->size,
                'image' => $request->image,
                'addons' => $addons
            ]
        ]);

        return back();
    }
    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }

    /**
     * Custom methods
     */
    public function calculateAddonPrice($addons)
    {
        $sum = 0;

        // IF There is Addons, Calculate sum of all addons price sum
        if($addons) 
        {            
            foreach($addons as $addon) {
                $sum += $addon;
            }
        }
        // Return sum, if no addons, 0 is result
        return $sum;
    }


}
