<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function index(){

        $products = product::all();
        return view('Admin.products' , ['data' => $products]);
    }

    // public function GetProduct(){
    //    $data = product::all();
    //    return view('Admin.products' , compact('data') );
    // }
    public function AddProducts(request $request){

                // get file
                $file = $request->file('file');

                // make folder path: public/uploads/storage/images
                $destinationPath = public_path('uploads/storage/images');

                // generate unique name
                $filename = time() . '.' . $file->getClientOriginalExtension();

                // move file
                $file->move($destinationPath, $filename);

                // save path in DB
                $product = new Product();
                $product->Gallery = 'uploads/storage/images/' . $filename;
                $product->name = $request->name;
                $product->price = $request->price;
                $product->Category = $request->Category;
                $product->Discription = $request->discription;
                $product->save();
                return redirect()->route('admin.products')->with('success', 'Product added successfully!');

  }

     public function DeleteProdects( $id){
            product::destroy($id);
            return redirect()->route('admin.products');
     }

     public function UpdateProducts(request $request , $id){
         $product = product :: find($id);
         $product->name = $request->name;
         $product->price = $request->price;
         $product->Category = $request->Category;
         $product->Discription = $request->Discription;
         $product->save();
         return redirect()->route('admin.products')->with('success', 'Product Updated successfully!');
     }

     public function AddView(){
      return view('Admin.AddProducts');
     }


}
