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

Route::get('/', "TopController@list")->name('top');
Route::get('/player/{authid}', 'PlayerController@view')->name('player');
Route::get('/player/{authid}/weapons', 'PlayerController@weapons')->name('player.weapons');
Route::get('/player/{authid}/maps', 'PlayerController@maps')->name('player.maps');
Route::get('weapons', 'WeaponsController@view')->name('weapons');
Route::get('weapons/{weapon}', 'WeaponsController@players')->name('weapons.players');
