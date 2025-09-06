<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('index',['product' => $product ]);
    }
    public function details($id){
      $details = Product::find($id);
      return view('DetailsView' , ['ProDetails' => $details]);
    }
    public function search(request $request){
      // $data =  ;
      $search = Product::
      where('name' , 'like' , '%'.$request->input('search').'%')->get();

      // return $search;
      return view('SearchDataDisplay' , ['product' => $search]);

    }

    public function AddToCart(request $req){
      if($req->session()->has('user')){
        $cart = new cart ;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
            //  return 'successfully ';
        return redirect('cartlist');
      }
      else{
        return redirect('/');
      }

    }
    static function cartItems(){

      if(Session::has('user')){
      $userid=Session::get('user')['id'];
      return Cart::where('user_id',$userid)->count();
      }else{
        return 0;
      }
    }

    public function logout(){
      Session::forget('user');
      return redirect('/');
    }

    public function CartList(){
      // return 'wellcome brohi listing cart';
      if(Session::has('user')){
      $userid = Session::get('user')['id'];
      $data =  DB::table('cart')
      ->join('products' , 'cart.product_id' , 'products.id')
      ->select('products.*' , 'cart.id as cart_id')
      ->where('user_id' , $userid)
      ->get();

      return view('CartListView' , ['products' =>  $data]);
      }
      else{
        return redirect('/');
      }
    }
    public function Removecart(request $req){
      $cartid = $req -> product_id ;
      Cart::destroy($cartid);
      return redirect('/');
    }
    public function Order(){
       if(Session::has('user')){
        $userid = Session::get('user')['id'];
       $total = DB::table('cart')
       ->join('products' , 'products.id' , 'cart.product_id')
       ->where('cart.user_id' , $userid)
       ->sum('products.price');
      return view('OrderView',['total' => $total]);
       }
       else{
        return redirect('/');
       }
    }
    public function OrderNow(Request  $Req){
        $userid = Session::get('user')['id'];
        $allcart = Cart::where('user_id' , $userid)->get();
        foreach($allcart as $cart){
          $order = new order;
          $order->product_id=$cart['product_id'];
          $order->user_id=$cart['user_id'];
          $order->address=$Req->address;
          $order->status='pending';
          $order->payment_method=$Req->paymant;
          $order->payment_status='pending';
          $order->save();
        }
        Cart::where('user_id' , $userid)->delete();
        return redirect('/myorder');
    }
    public function myorder(){
       $userid = Session::get('user')['id'];
      $data = DB::table('orders')
       ->join('products' , 'orders.product_id' , 'products.id')
       ->where('orders.user_id',$userid)
       ->get();

       return view('MyOrdersView',['data' => $data]);
    }

    public function product(request $request){
         $product = product::all();
         return view( 'ProductDisplay',  ['product' => $product]);
    }

            public function categoryProducts(Request $request)
        {
            // Get category from URL (e.g., Laptop, Android, iPhone)
            $category = $request->query('Category');

            // If "All Products" is clicked (or no category provided)
            if (!$category) {
                $products = Product::all();
            } else {
                // Fetch products by category
                $products = Product::where('Category', $category)->get();
            }

            // Send products back to view
            return view('ProductDisplay', ['product' => $products]);
        }

}
