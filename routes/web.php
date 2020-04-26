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
    return view('home');
});


Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/register','AuthController@register');
Route::post('/postregister','AuthController@postregister');
Route::get('/logout','AuthController@logout');


Route::get('/dashboard','DashboardController@index');
Route::get('/absensi','AbsensiController@index');
Route::post('/absensi/create','AbsensiController@create');
Route::get('/absensi/{id}/edit','AbsensiController@edit');
Route::post('/absensi/{id}/update','AbsensiController@update');
Route::get('/absensi/{id}/delete','AbsensiController@delete');

Route::get('/datadiri','DataDiriController@index');
Route::post('/datadiri/create','DataDiriController@create');
Route::get('/datadiri/{id}/edit','DataDiriController@edit');
Route::post('/datadiri/{id}/update','DataDiriController@update');
Route::get('/datadiri/{id}/delete','DataDiriController@delete');

Route::get('/kegiatan','KegiatanController@index');
Route::post('/kegiatan/create','KegiatanController@create');
Route::get('/kegiatan/{id}/edit','KegiatanController@edit');
Route::post('/kegiatan/{id}/update','KegiatanController@update');
Route::get('/kegiatan/{id}/delete','KegiatanController@delete');

Route::get('/laporan','LaporanController@index');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
