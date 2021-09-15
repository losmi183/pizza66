<?php

namespace App\Http\Controllers\Api;

use App\Models\Action;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DailyActionResource;
use App\Http\Resources\FixedActionResource;
use App\Http\Resources\ProductResource;

class HomepageController extends Controller
{
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
        $drinks = Product::where('type', 'drink')->inRandomOrder()->take(6)->get();

        $data = [
            'pizza' => ProductResource::collection($pizza),
            'bbq' => ProductResource::collection($bbq),
            'drink' => ProductResource::collection($drinks),
            'fixedAction' => new FixedActionResource($fixedAction),
            'dailyAction' => new DailyActionResource($dailyAction),
        ];

        return response()->json($data, 200);
    }

}
