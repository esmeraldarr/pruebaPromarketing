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


Route::get('/', 'GameController@index')->name('game.index');
Route::get('/game/create', 'GameController@create')->name('game.create');
Route::get('/game/{game}/show', 'GameController@show')->name('game.show');
Route::post('/game', 'GameController@store')->name('game.store');
Route::get('/game/{game}/edit', 'GameController@edit')->name('game.edit');
Route::put('/game/{game}/update', 'GameController@update')->name('game.update');
Route::delete('/game/{game}/delete', 'GameController@delete')->name('game.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
