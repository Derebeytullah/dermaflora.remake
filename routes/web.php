<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//login görüntüsü için route
Route::get('/admin', [AuthController::class, 'Loginİndex'])->name('admin');
//sign-up görüntüsü için route
Route::get('/signup', [AuthController::class,'SignUpİndex'])->name('signup');


//login sistemi için route
Route::post('/admin', [AuthController::class, 'login']);
Route::prefix('admin')->group(function () {
    Route::get('product', [ProductController::class,'index'])->name('product');
    Route::get('/product/addproduct', [ProductController::class,'AddProductİndex'])->name('addproduct');
    Route::post('/product/addproduct', [ProductController::class,'addproduct']);
});
