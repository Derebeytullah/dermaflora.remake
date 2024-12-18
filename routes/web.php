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
Route::get('/admin', [AuthController::class, 'index'])->name('admin');

//login sistemi için route
Route::post('/admin', [AuthController::class, 'login']);


Route::get('product', [ProductController::class,'index']);