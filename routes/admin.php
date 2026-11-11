<?php

use App\Http\Controllers\Admin\Category\Cat_Controller;
use App\Http\Controllers\Admin\Product\Pro_Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Category
Route::get('/Cat', [Cat_Controller::class,'index']);

// Product
Route::get('/Pro', [Pro_Controller::class,'index']);

// Users
Route::get('/Pro', [Pro_Controller::class,'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
