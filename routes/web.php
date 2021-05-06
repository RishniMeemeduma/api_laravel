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

Route::post('/api/v1/bet','App\Http\Controllers\api\v1\betController@show')->name('show');
Route::resource('betController','App\Http\Controllers\api\v1\betController');
Route::resource('bet','App\Http\Controllers\api\v1\betController');
Route::resource('balancetransactionController','App\Http\Controllers\api\v1\balancetransactionController');
Route::resource('playerController','App\Http\Controllers\api\v1\playerController');
//Route::resource('betController/store','betController@store_bet')->name('betController.store_bet');