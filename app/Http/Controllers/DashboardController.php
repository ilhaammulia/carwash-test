<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::orderBy("created_at", "desc");
        $orders = $query->get();
        $totalProfit = $query->sum("total_price");
        $pendingOrders = $query->where("status", "pending")->count();

        return view("home", ["orders" => $orders, "totalProfit" => $totalProfit, "pendingOrders" => $pendingOrders]);
    }
}
