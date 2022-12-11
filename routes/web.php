<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/data', 'DataController@index')->name('data');
    Route::get('/detail/{id}', 'DataController@detail');
    Route::get('/regis', 'DataController@regis')->name('regis');
    Route::post('/user_store', 'DataController@user_store')->name('user_store');
    Route::get('/data_edit/{id}', 'DataController@edit')->name('data_edit');
    Route::post('/data_update', 'DataController@update');
    Route::delete('/data_delete', 'DataController@destroy')->name('data_delete');
    Route::get('export', 'DataController@export')->name('export');
    Route::get('export_pdf', 'DataController@export_pdf')->name('export_pdf');
});

Route::group(['middleware' => 'App\Http\Middleware\UserMiddleware'], function () {
    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/data_user', 'UserController@data')->name('data_user');
    Route::post('/user_store', 'UserController@user_store')->name('user_store');
    Route::delete('/data_delete', 'UserController@destroy')->name('data_delete');
});
