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

Route::get('/', 'DataController@index')->name('data.index');
Route::post('/data/store', 'DataController@store')->name('data.store');


Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::post('/admin/validateLogin', 'AdminController@validateLogin')->name('admin.validateLogin');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::post('/admin/dashboard/search', 'AdminController@search')->name('admin.dashboard.search');

// Pills
Route::get('/admin/dashboard/all', 'AdminController@all')->name('admin.dashboard.all');
Route::get('/admin/dashboard/males', 'AdminController@males')->name('admin.dashboard.males');
Route::get('/admin/dashboard/females', 'AdminController@females')->name('admin.dashboard.females');
Route::get('/admin/dashboard/eleven', 'AdminController@eleven')->name('admin.dashboard.eleven');
Route::get('/admin/dashboard/twelve', 'AdminController@twelve')->name('admin.dashboard.twelve');