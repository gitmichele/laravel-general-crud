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

Route::get('/', 'MainController@index')
    -> name('home');

Route::get('show/match/{id}', 'MainController@show')
    -> name('show');

Route::get('destroy/match/{id}', 'MainController@destroy')
    -> name('destroy');

Route::get('edit/match/{id}', 'MainController@edit')
    -> name('edit');
Route::post('update/match/{id}', 'MainController@update')
    -> name('update');

Route::get('create/match', 'MainController@create')
    -> name('create');
Route::post('store/match', 'MainController@store')
    -> name('store');