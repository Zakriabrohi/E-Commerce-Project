<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\UserAuth;


Route::get('/first', function () {
    return view('welcome');
});

Route::get('/', function () {

    return view('login');
})->middleware(UserAuth::class);

Route::get('/reg', function () {
    return view('regisration');
})->middleware(UserAuth::class);


Route::get('/login' , [UserController::class,'login']);
Route::get('/register' , [UserController::class,'register']);
Route::get('/index' , [ProductController::class,'index'])->middleware(UserAuth::class);
Route::get('/details/{id}' , [ProductController::class,'details']);
Route::get('/search' , [ProductController::class,'search']);
Route::post('/add_to_cart' , [ProductController::class,'AddToCart']);
Route::get('/logout' , [ProductController::class,'logout']);
Route::get('/cartlist' , [ProductController::class,'CartList']);
Route::post('/remove_from_cart' , [ProductController::class,'Removecart']);
Route::get('/order' , [ProductController::class,'Order']);
Route::post('/ordernow' , [ProductController::class,'OrderNow']);
Route::get('/myorder' , [ProductController::class,'MyOrder']);


