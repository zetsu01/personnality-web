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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Auth::routes();*/
Route::get('/', 'App\Http\Controllers\Admin\ToganController@index');
Route::post('/', 'App\Http\Controllers\Admin\ToganController@store')->name('store');

/*Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix'=>'admin'], function(){
Route::get('/togan', 'ToganController@index');
});
Route::get('login', ['as'=>'login','uses'=>'App\Http\Controllers\Auth\LoginController']);*/
