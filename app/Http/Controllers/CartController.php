<?php

namespace App\Http\Controllers;

use App\Models\AddonOption;
use App\Models\Price;
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
        $price = Price::find($request->price);

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
            'price' => $price->rsd + $addonSum, 
            'id' => $request->id, 
            'name' => $request->name, 
            'qty' => $request->qty, 
            'weight' => 1, 
            'options' => [
                'image' => $request->image,
                'content' => $request->content,
                'size' => $price->size,
                'cm' => $price->cm,
                'addons' => $addons
            ]
        ]);

        if($request->redirect) {
            return redirect()->route('cart')->with('success', 'Proizvod je dodat u korpu');
        }

        return back()->with('success', 'Proizvod je dodat u korpu');
    }

    /**
     * Store Drink in cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDrink(Request $request)
    {
        // return $request->all();
        $addons = [];

        Cart::add([
            'id' => $request->id, 
            'name' => $request->name, 
            'price' => $request->price, 
            'qty' => $request->qty, 
            'weight' => 1, 
            'options' => [
                'image' => $request->image,
                'content' => '',
                'size' => '',
                'cm' => '',
                'addons' => $addons
            ]
        ]);

        if($request->redirect) {
            return redirect()->route('cart')->with('success', 'Proizvod je dodat u korpu');
        }

        return back()->with('success', 'Proizvod je dodat u korpu');

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
        return back()->with('success', 'Proizvod uklonjen iz korpe');
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
