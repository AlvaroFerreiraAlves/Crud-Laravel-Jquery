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




Route::get('/', 'ProductController@listar');

Route::get('productajaxCRUD/{product_id?}','ProductController@show');

Route::post('productajaxCRUD','ProductController@store')->middleware('auth');

Route::put('productajaxCRUD/{product_id?}','ProductController@update')->middleware('auth');

Route::delete('productajaxCRUD/{product_id?}','ProductController@destroy')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
