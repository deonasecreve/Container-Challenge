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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
//ship Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('ship','\App\Http\Controllers\ShipController');
  Route::post('ship/{id}/update','\App\Http\Controllers\ShipController@update');
  Route::get('ship/{id}/delete','\App\Http\Controllers\ShipController@destroy');
  Route::get('ship/{id}/deleteMsg','\App\Http\Controllers\ShipController@DeleteMsg');
});
