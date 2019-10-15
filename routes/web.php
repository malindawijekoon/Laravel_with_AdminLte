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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index')->name('products');
Route::get('/add-product', 'ProductController@create')->name('add-product');
Route::post('/save-product', 'ProductController@store')->name('save-product');


Route::get('/sales-reps', 'SalesRepController@index')->name('sales-reps');
Route::get('/add-rep', 'SalesRepController@create')->name('add-rep');
Route::post('/save-rep', 'SalesRepController@store')->name('save-rep');


