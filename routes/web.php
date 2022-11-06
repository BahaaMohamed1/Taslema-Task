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
    return view('Dashboard.index');
});

Route::group(['prefix' => 'dashboard'], function() {
    Route::get('orders','OrderController@index')->name('orders');
    Route::get('orders/{order}','OrderController@orderDetails')->name('orderDetails');
    Route::delete('orders/{order}','OrderController@orderDelete')->name('orderDelete');
    Route::delete('orderItem/{orderItem}','OrderController@orderItemDelete')->name('orderItemDelete');
});
