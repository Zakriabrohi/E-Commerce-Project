<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\ProductController as AdminProductController ;
use App\Http\Controllers\admin\OrderController as AdminOrdersCortroller ;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\admin\SettingController as AdminSettingController;
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
Route::get('/index' , [ProductController::class,'index'])->middleware(UserAuth::class)->name('user.dashboard');
Route::get('/details/{id}' , [ProductController::class,'details']);
Route::get('/search' , [ProductController::class,'search']);
Route::post('/add_to_cart' , [ProductController::class,'AddToCart']);
Route::get('/logout' , [ProductController::class,'logout'])->name('user.logout');
Route::get('/cartlist' , [ProductController::class,'CartList']);
Route::post('/remove_from_cart' , [ProductController::class,'Removecart']);
Route::get('/order' , [ProductController::class,'Order']);
Route::post('/ordernow' , [ProductController::class,'OrderNow']);
Route::get('/myorder' , [ProductController::class,'MyOrder']);

// admin routes ...

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products');
    Route::post('/addproduct',[AdminProductController::class,'AddProducts'])->name('addproduct');
    Route::get('/addview',[AdminProductController::class,'AddView'])->name('addview');
    Route::put('/updateproducts/{id}',[AdminProductController::class,'UpdateProducts'])->name('updateproducts');
    Route::delete('/deleteprodects/{id}',[AdminProductController::class,'DeleteProdects'])->name('deleteprodects');

    Route::get('/orders', [AdminOrdersCortroller::class, 'index'])->name('admin.orders');
    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::get('/settings', [AdminSettingController::class, 'index'])->name('admin.settings');
    Route::get('/logout' , [ProductController::class,'logout'])->name('admin.logout');
});


