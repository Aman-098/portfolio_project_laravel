<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/', 'frontend.home');
// Frontend Routes
Route::get('/',[HomeController::class,'home']);


// Admin Auth Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/admin', 'login_user')->name('login.form');   // show login form
    Route::post('/admin', 'login_user')->name('login.user'); // handle form submit
    Route::get('/admin/register', 'register_user')->name('register.form'); // handle form submit
    Route::post('/admin/register', 'register_user')->name('register.user'); // handle form submit
});

Route::view('/admin', 'admin.login');
Route::view('/register', 'admin.register');
