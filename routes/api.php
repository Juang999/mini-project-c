<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// users
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');

// products
Route::get('product', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');
Route::post('product', 'ProductController@store')->middleware('jwt.verify');
Route::put('product/{id}', 'ProductController@update')->middleware('jwt.verify');
Route::delete('product/{id}', 'ProductController@destroy')->middleware('jwt.verify');

// test
Route::get('test', 'APIController@getDataByUser');