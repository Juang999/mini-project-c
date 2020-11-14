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

// product
Route::get('/product', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/toko/{id}', 'ProductController@getByToko');

// toko
Route::get('/toko/{nama_toko}', 'TokoController@show');

Route::get('/user', 'UserController@index');
Route::get('/home', 'HomeController@index')->name('home');

// test
Route::get('create', 'ImagestorageController@create');
Route::post('store', 'ImagestorageController@store')->name('store');

// user
Route::get('/user/edit/{id}', 'UserController@edit');
Route::put('/user/edit/{id}', 'UserController@update');