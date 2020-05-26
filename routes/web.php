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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/category-management', function () {
    return view('category-management');
});

Route::get('/ledger', function () {
    return view('ledger');
});

Route::get('/monthly-report', function () {
    return view('monthly-report');
});