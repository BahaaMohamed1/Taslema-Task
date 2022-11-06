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

Route::group(['prefix' => 'dashboard'], function () {


    Route::group(['prefix' => 'orders'], function () {
        Route::get('', 'OrderController@index')->name('orders');
        Route::get('/{order}', 'OrderController@orderDetails')->name('orderDetails');
        Route::delete('/{order}', 'OrderController@orderDelete')->name('orderDelete');
    });

    Route::group(['prefix' => 'orderItem'], function () {
        Route::get('/{orderItem}/edit', 'orderItemController@edit')->name('orderItemEdit');
        Route::patch('/{orderItem}', 'orderItemController@update')->name('orderItemUpdate');
        Route::delete('/{orderItem}', 'orderItemController@destroy')->name('orderItemDelete');
    });

    Route::get('api','ApiController@index')->name('api-form');
});
