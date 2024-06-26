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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('categories.index');

Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create')->name('categories.create');

Route::post('/categories', 'App\Http\Controllers\CategoryController@store')->name('categories.store');
