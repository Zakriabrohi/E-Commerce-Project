<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login( Request $request ){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
           return back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();

        if(Auth::attempt(['email' => $user  , 'password' => $request->password])){
           $request->session()->regenerate();

        $user = Auth::user();
        $request->session()->put('user', $user);

           return Auth::user()->role === 'admin'
           ? redirect()->route('admin.dashboard')
           : redirect()->route('user.dashboard');
        }

        $request->session()->put('user' , $user);
        return back()->with('error' , 'eithrer email or password incorrect')->withinput();


        // $user = User::where('email', $request->email)->first();

        //   if(!$user || !Hash::check($request->password , $user->password))
        //   {
        //     return 'User or Passsword or Not Match';
        //   }else{
        //     $request->session()->put('user' , $user);
        //     return redirect('/index');
        //   }
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
