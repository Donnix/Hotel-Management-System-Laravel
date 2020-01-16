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

Route::get('/test', function () {
    return "hello word";
});

Route::get('karyawans', 'KaryawanController@create')->name('create');
Route::post('guests', 'GuestController@edit')->name('edit');
Route::resource('kamars','KamarController');
Route::resource('guests','GuestController');
Route::resource('karyawans','KaryawanController');
Route::resource('jabatans','JabatanController');
Route::resource('transactions','TransactionController');
Route::resource('logins','AuthController');
Route::get('/laporans','LaporanController@index')->name('laporans');
Route::get('/laporans/cari','LaporanController@cari');
Route::get('/laporans/print','LaporanController@print')->name('laporans.print');
Route::get('/laporans/show','LaporanController@show')->name('laporans.show');
Route::get('/dashboard','AdminController@dashboard');
Route::get('/calendars', function () {
    return view('calendar.calendar');
});

   

