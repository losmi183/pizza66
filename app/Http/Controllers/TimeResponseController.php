<?php

namespace App\Http\Controllers;

use App\Events\TimeResponse;
use App\Models\Order;
use Illuminate\Http\Request;

class TimeResponseController extends Controller
{
    public function fireTime(Request $request)
    {
        $time = $request->time;
        $order_id = $request->order_id;

        event(new TimeResponse($time, $order_id));

        $order = Order::find($request->order_id);
        $order->time = $time;
        $order->save();

        return back()->with('success', 'Uspešno ste odgovorili mušteriji');
    }
}
