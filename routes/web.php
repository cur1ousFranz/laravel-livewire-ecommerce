<?php

use App\Http\Livewire\Auth\Signin;
use App\Http\Livewire\Auth\Signup;
use App\Http\Livewire\Home;
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
Route::get('/signup', Signup::class)->name('signup');
Route::get('/signin', Signin::class)->name('signin');
