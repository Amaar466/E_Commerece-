<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\FrontController;
use App\Http\Controllers\frontend\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Route for Home
//Route::get('/',[UserController::class,'index'])->name('home.index');
Route::get('/',[FrontController::class,'index'])->name('home1.index');
Route::get('/product-detail/{id}',[UserController::class,'detail'])->name('detail.index');
Route::get('/product-search',[UserController::class,'search'])->name('search.index');
Route::post('/add-to-cart',[CartController::class,'addtocart'])->name('addtocart.index');
//Route for Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route for Admin
Route::prefix('admin')->middleware('auth' , 'isAdmin')->group(function(){
Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard.index');
Route::get('/add-product',[AdminController::class,'create'])->name('add.index');
Route::post('/store-product',[AdminController::class,'store'])->name('store.index');
Route::get('/show-product',[AdminController::class,'show'])->name('show.index');
});