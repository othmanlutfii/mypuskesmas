<?php

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

Route::get('/login', function () {
    return view('registration/login');
});

Route::get('/register', function () {
    return view('registration/signup');
});

Route::get('/registration', function () {
    return view('regis');
});

Route::get('/admin', function () {
    return view('navbar');
});

Route::get('/dev', function () {
    return view('dashboard');
});