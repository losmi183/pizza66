<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Action;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('admin');
    }

    public function index()
    {
        $users = User::count();
        $products = Product::count();
        $actions = Action::count();
        $orders = Order::count();

        return view('admin.dashboard', compact('users', 'products', 'actions', 'orders'));
    }
}
