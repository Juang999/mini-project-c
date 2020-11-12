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
Route::post('register', 'UserControllerAPI@register');
Route::post('login', 'UserControllerAPI@login');
Route::get('user', 'UserControllerAPI@getAuthenticatedUser')->middleware('jwt.verify');
Route::put('user/{id}', 'UserControllerAPI@update')->middleware('jwt.verify');

// products
Route::get('product', 'ProductControllerAPI@index');
Route::get('product/{id}', 'ProductControllerAPI@show');
Route::post('product', 'ProductControllerAPI@store')->middleware('jwt.verify');
Route::put('product/{id}', 'ProductControllerAPI@update')->middleware('jwt.verify');
Route::delete('product/{id}', 'ProductControllerAPI@destroy')->middleware('jwt.verify');
Route::get('toko/{id}', 'ProductControllerAPI@getByToko');

// toko
Route::get('toko', 'TokoControllerAPI@tokoSaya')->middleware('jwt.verify');
Route::post('toko', 'TokoControllerAPI@store')->middleware('jwt.verify');

// test
Route::get('test', 'APIController@getDataByUser');