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

Route::get('/', 'DefaultController@index')->name('default');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('/dashboard/portfolio','Dashboard\PortfolioController');

Route::get('/dashboard/about', 'Dashboard\AboutController@index')->name('about');
Route::post('/dashboard/about', 'Dashboard\AboutController@store');

Route::get('/dashboard/reports', 'Dashboard\ReportController@index')->name('reports');

Route::get('/dashboard/settings', 'Dashboard\SettingController@index')->name('settings');
Route::post('/dashboard/settings', 'Dashboard\SettingController@store');

Route::get('/dashboard/{models}/{model}/edit','Dashboard\FactoryController@edit');
Route::patch('/dashboard/{models}/{model}','Dashboard\FactoryController@update');
Route::delete('/dashboard/{models}/{model}','Dashboard\FactoryController@destroy');

Route::resource('/dashboard/{models}','Dashboard\FactoryController');

