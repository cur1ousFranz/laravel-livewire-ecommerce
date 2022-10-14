<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\Auth\Signin;
use App\Http\Livewire\Auth\Signup;
use App\Http\Livewire\Seller\Dashboard;
use App\Http\Livewire\Seller\Order;
use App\Http\Livewire\Seller\Product;
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
;
Route::get('/', Home::class)->name('home');

Route::group(['middleware' => 'guest'], function() {

    Route::get('/signup', Signup::class)->name('signup');
    Route::get('/signin', Signin::class)->name('signin');
});

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'customer'], function() {

    });

    Route::group(['middleware' => 'seller'], function() {

        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/products', Product::class)->name('products');
        Route::get('/orders', Order::class)->name('orders');
    });

    Route::get('/logout', Logout::class)->name('logout');
});

