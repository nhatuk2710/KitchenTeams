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
    return view('welcome');
});

Route::get('/home','AdminController@home');

Route::get('/product','AdminController@product');
Route::post('/product','AdminController@productCreate');

Route::get('/ship','AdminController@ship');
Route::post('/ship','AdminController@shipCreate');

Route::get("/product/{id}",'AdminController@shopping');
