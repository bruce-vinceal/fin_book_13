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

Route::get('/finote', 'GeneralController@index');

Route::get('/login', 'LoginController@show');

Route::get('/signup', 'RegisterController@show');

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