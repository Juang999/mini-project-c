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

Route::get('/dashboard', 'SudoController@dashboard');
Route::get('/user', 'SudoController@index');
Route::get('/user/{user}', 'SudoController@show');
Route::delete('/user/{user}', 'SudoController@destroy');

Auth::routes();

Route::get('/home', 'homeController@index')->name('home');
