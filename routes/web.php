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
Route::get('/data_transaksi', 'HomeController@data_transaksi')->name('data_transaksi');
Route::get('/pengajuan', 'HomeController@pengajuan')->name('pengajuan');

Route::get('/perbaikan', 'HomeController@perbaikan')->name('perbaikan');