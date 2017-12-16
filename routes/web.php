<?php

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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});



Route::get('productajaxCRUD', 'ProductController@listar');

Route::get('productajaxCRUD/{product_id?}','ProductController@show');

Route::post('productajaxCRUD','ProductController@store');

Route::put('productajaxCRUD/{product_id?}','ProductController@update');

Route::delete('productajaxCRUD/{product_id?}','ProductController@destroy');