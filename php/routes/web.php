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

Route::get('/','App\Http\Controllers\HomePageController@index');
Route::get('/index','App\Http\Controllers\HomePageController@index');
Route::get('/contact','App\Http\Controllers\HomePageController@contact');
Route::get('/hp-service','App\Http\Controllers\HomePageController@hp_service');
Route::post('/contact/confirm','App\Http\Controllers\HomePageController@confirm');
Route::post('/contact/send','App\Http\Controllers\HomePageController@send');


//エラー対応
Route::get('/contact/confirm','App\Http\Controllers\HomePageController@error');
Route::get('/contact/send','App\Http\Controllers\HomePageController@error');
