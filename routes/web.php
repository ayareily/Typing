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

Auth::routes();
Route::get('/drills/new', 'DrillsController@new')->name('drills.new');
Route::get('/drills/create', 'DrillsController@create');
Route::get('/drills', 'DrillsController@index')->name('drills');
Route::get('/', function () {
    return view('welcome');
});
