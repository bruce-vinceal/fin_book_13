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

Route::get('/', 'GeneralController@index');

Route::get('/login', 'LoginController@show');
Route::post('/login', 'LoginController@authenticate');

Route::get('/signup', 'RegisterController@show');
Route::post('/signup', 'RegisterController@store');

Route::get('/finote/category', 'CategoryController@show');
Route::post('/finote/category/{id}', 'CategoryController@store');
Route::patch('/finote/category/{id}/{category}', 'CategoryController@update');
Route::get('/finote/category/{id}/{category}', 'CategoryController@destroy');
Route::get('/finote/category/{id}', 'GeneralController@categoryManagement');

Route::get('finote/ledger', 'LedgerController@show');
Route::post('finote/ledger/{id}', 'LedgerController@store');
Route::get('finote/ledger/{id}/{noteId}', 'LedgerController@destroy');
Route::get('/finote/ledger/{id}', 'GeneralController@ledger');

Route::get('/finote/monthly-report', 'ReportController@show');
Route::post('/finote/monthly-report/{id}', 'ReportController@generate');
Route::get('/finote/monthly-report/{id}', 'GeneralController@monthlyReport');