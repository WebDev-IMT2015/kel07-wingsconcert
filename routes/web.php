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

Route::get('/cshome', 'HomeController@index')->name('cshome');




Route::resource('users', 'usersController');
Route::get('/users', 'usersController@index')->name('user');

Route::resource('concerts', 'concertsController');
Route::get('/concerts', 'concertsController@index')->name('concert');

Route::resource('transactions', 'transactionsController');

Route::get('/transactions', 'transactionsController@create')->name('transaction');

//Route::post('/transactions', 'transactionsController@simpan');

Route::get('/historytransactions', 'transactionsController@history')->name('historytransaction');

//Route::post('transactions/simpan','transactionsController@simpan');

// Route::get('/transactions/getdataconcert', 'transactionsController@getdataconcert')->name('getdataconcert');

