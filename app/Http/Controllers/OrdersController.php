<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {

        $status = request()->query('status');

        // return $status;

        $orders = Order::orderBy('status', 'ASC')
            ->when($status, function($query, $status) {
                return $query->where('status', $status);
            })            
            ->paginate(20);

        return view('admin.orders.index', compact('orders'));
    }


    public function show($id)
    {
        $order = Order::with('products')->where('id', $id)->first();

        return view('admin.orders.show', compact('order'));
    }

    public function changeStatus(Request $request, Order $order)
    {
        // return $request->all();

        $order->status = $request->status;
        $order->save();

        return back();
    }

}
