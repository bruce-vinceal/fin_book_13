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
Route::post('/login', 'LoginController@authenticate');

Route::get('/signup', 'RegisterController@show');
Route::post('/signup', 'RegisterController@store');

Route::get('/finote/category', 'CategoryController@show');

Route::get('finote/ledger', 'LedgerController@show');

Route::get('/finote/monthly-report', 'ReportController@show');