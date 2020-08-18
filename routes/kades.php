<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('kades');

Route::get('/kas', 'KasController@index');
Route::get('/kasExport', 'KasController@exportExcel');
Route::get('/viewKasUmum', 'KasController@viewKasUmum');
Route::get('/viewTanggung', 'KasController@viewTanggung');
Route::get('/tanggungExport', 'KasController@exportWord');
Route::get('/tanggungExportPdf', 'KasController@exportPdf');
