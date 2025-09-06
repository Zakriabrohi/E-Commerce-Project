<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Session ;
use Session;
class OrderController extends Controller
{
    public function index()
{
    $data = Order::with(['product' , 'user'])->get();
    return view('Admin.orders', ['data' => $data]);
}

     public function View( request $request , $id){
            //  return "welcome to product id = ".$id;
             $order = Order::with(['product' , 'user'])->findOrFail($id);
              return view('Admin.orderdatials' , compact('order'));
     }
}
