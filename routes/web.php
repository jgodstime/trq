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

Route::match(['get', 'post'], '/index', 'LandingController@index');
Route::match(['get', 'post'], '/index2', 'LandingController@index2');
Route::match(['get', 'post'], '/index3', 'LandingController@index3');
Route::match(['get', 'post'], '/', 'LandingController@index');