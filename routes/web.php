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

Route::get('/', 'bookcontroller@index');
Route::get('/book/create', 'bookcontroller@create');
Route::post('/book', 'bookcontroller@store');
Route::get('/book/{id}/edit', 'bookcontroller@edit');
Route::patch('/book/{id}', 'bookcontroller@update');
Route::delete('/book/{id}', 'bookcontroller@destroy');
