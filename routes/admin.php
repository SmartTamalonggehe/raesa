<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('admin');

Route::resource('pendapatan', 'PendapatanController');
Route::resource('jenisBelanja', 'JenisBelanjaController');
Route::resource('belanjaDetail', 'BelanjaDetailController');
Route::resource('itemBelanja', 'ItemBelanjaController');
Route::resource('pengeluaran', 'PengeluaranController');

Route::get('/kas', 'KasController@index');
