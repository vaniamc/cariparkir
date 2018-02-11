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

Route::get('/','AdminController@home' )->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'AdminController@index' )->name('dashboard');
Route::get('/tempat-parkir', 'AdminController@parkir' )->name('tempat-parkir');
Route::get('/history', 'AdminController@history' )->name('history');
Route::get('/ban-user', 'AdminController@banuser' )->name('ban-user');