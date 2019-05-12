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
Route::get('/data/success', 'DataController@success')->name('data.success');


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

Route::get('admin/dashboard/download/all', 'AdminController@downloadAll')->name('admin.dashboard.download.all');
Route::get('admin/dashboard/download/males', 'AdminController@downloadMales')->name('admin.dashboard.download.males');
Route::get('admin/dashboard/download/females', 'AdminController@downloadFemales')->name('admin.dashboard.download.females');
Route::get('admin/dashboard/download/eleven', 'AdminController@downloadEleven')->name('admin.dashboard.download.eleven');
Route::get('admin/dashboard/download/twelve', 'AdminController@downloadTwelve')->name('admin.dashboard.download.twelve');
Route::get('admin/dashboard/download/elevenMales', 'AdminController@downloadElevenMales')->name('admin.dashboard.download.elevenMales');
Route::get('admin/dashboard/download/elevenFemales', 'AdminController@downloadElevenFemales')->name('admin.dashboard.download.elevenFemales');
Route::get('admin/dashboard/download/twelveMales', 'AdminController@downloadTwelveMales')->name('admin.dashboard.download.twelveMales');
Route::get('admin/dashboard/download/twelveFemales', 'AdminController@downloadTwelveFemales')->name('admin.dashboard.download.twelveFemales');

Route::get('admin/dashboard/download/gasEleven', 'AdminController@downloadGasEleven')->name('admin.dashboard.download.downloadGasEleven');
Route::get('admin/dashboard/download/gasTwelve', 'AdminController@downloadGasTwelve')->name('admin.dashboard.download.downloadGasTwelve');
Route::get('admin/dashboard/download/tvlEleven', 'AdminController@downloadTvlEleven')->name('admin.dashboard.download.downloadTvlEleven');
Route::get('admin/dashboard/download/tvlTwelve', 'AdminController@downloadTvlTwelve')->name('admin.dashboard.download.downloadTvlTwelve');


// Statistics
Route::get('admin/statistics/main', 'AdminStatisticsController@main')->name('admin.statistics.main');
Route::get('admin/statistics/genderDensity', 'AdminStatisticsController@genderDensity')->name('admin.statistics.genderDensity');