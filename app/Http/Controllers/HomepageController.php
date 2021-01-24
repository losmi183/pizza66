<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Today's day number in a week
        $now = strtotime("now");        
        $day_number = date('N', $now);

        /**
         * Actions fetch
         */
        $fixedAction = Action::where('fixed', 1)->orderBy('created_at', 'DESC')->first();        
        // daily action
        $dailyAction = Action::where('day', $day_number)->first();


        // 6 Products preview
        $pizza = Product::where('type', 'pizza')->with('prices')->inRandomOrder()->take(6)->get();        
        $bbq = Product::where('type', 'bbq')->inRandomOrder()->take(6)->get();

        return view('home', compact('pizza', 'bbq', 'fixedAction', 'dailyAction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
