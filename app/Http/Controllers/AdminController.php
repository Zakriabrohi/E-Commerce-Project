<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // ✅ Basic Stats
        $totalUsers      = User::count();
        $totalOrders     = Order::count();
        $pendingOrders   = Order::where('status', 'pending')->count();
        $completedOrders = Order::where('status', 'completed')->count();

        // ✅ Sales Today (join orders with products)
        $salesToday = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->whereDate('orders.created_at', today())
            ->sum('products.price');

        // ✅ Sales Last Week
        $salesLastWeek = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->whereBetween('orders.created_at', [now()->subWeek(), now()])
            ->sum('products.price');

        return view('Admin.dashboard', compact(
            'totalUsers',
            'totalOrders',
            'pendingOrders',
            'completedOrders',
            'salesToday',
            'salesLastWeek'
        ));
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}
