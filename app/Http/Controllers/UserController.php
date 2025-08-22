<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login( Request $request ){
         $user = User::where('email', $request->email)->first();
         
          if(!$user || !Hash::check($request->password , $user->password))
          {
            return 'User or Passsword or Not Match';
          }else{
            $request->session()->put('user' , $user);
            return redirect('/index');
          }
    }
    public function register(request $req){
            // return $req->input() ;
            $user = new User;
            $user->name=$req->name;
            $user->email=$req->email;
            $user->password=Hash::make($req->password);
            $user->save();
            return redirect('/');
    }
}
