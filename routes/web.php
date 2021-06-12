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

Route::get('/', 'AuthController@index');
Route::post('/proses', 'AuthController@proses');
Route::get('/logout', 'AuthController@logout');

Route::get('/admin', 'AdminController@tampil');
Route::get('/tambah', 'AdminController@tambah');
Route::post('create', 'AdminController@create');
Route::get('/zakat/{id}/delete', 'AdminController@delete');

Route::get('/daftar', 'AdminController@show');