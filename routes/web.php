<?php

use App\Http\Controllers\admin\AdminController;
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
Route::get('/',[UserController::class,'index'])->name('home.index');
Route::get('/home1',[FrontController::class,'index']);
//Route for Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route for Admin
Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard.index');
Route::get('/add-product',[AdminController::class,'create'])->name('add.index');
Route::post('/store-product',[AdminController::class,'store'])->name('store.index');
Route::get('/show-product',[AdminController::class,'show'])->name('show.index');