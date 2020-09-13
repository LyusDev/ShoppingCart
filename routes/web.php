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

Auth::routes();
Route::get('/index', 'ProductController@index');
Route::get('/user/profile', 'UserController@index');

Route::get('/add-to-cart/{id}', 'ProductController@AddToCart');
Route::get('/shopping-cart', 'ProductController@getCart');
Route::get('/checkout', 'ProductController@getCheckOut');
Route::post('/checkout', 'ProductController@postCheckOut');



Route::get('/home', 'ProductController@index')->name('home');
