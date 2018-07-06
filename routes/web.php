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

//Route::get('/dashboard/portfolio', 'Dashboard\PortfolioController@index')->name('portfolio');
//Route::get('/dashboard/portfolio/create', 'Dashboard\PortfolioController@create');
//Route::get('/dashboard/portfolio/create', 'Dashboard\PortfolioController@create');
//Route::get('/dashboard/portfolio/{portfolio}/edit', 'Dashboard\PortfolioController@edit')->name('portfolio.edit');
//Route::put('/dashboard/portfolio/{portfolio}', 'Dashboard\PortfolioController@update')->name('portfolio.update');
//Route::delete('/dashboard/portfolio/{portfolio}', 'Dashboard\PortfolioController@destroy')->name('portfolio.destroy');
//Route::post('/dashboard/portfolio', 'Dashboard\PortfolioController@store')->name('portfolio.store');
Route::get('/dashboard/services', 'Dashboard\ServiceController@index')->name('services');
Route::get('/dashboard/about', 'Dashboard\AboutController@index')->name('about');
Route::post('/dashboard/about', 'Dashboard\AboutController@store');
Route::get('/dashboard/reports', 'Dashboard\ReportController@index')->name('reports');
Route::get('/dashboard/settings', 'Dashboard\SettingController@index')->name('settings');
Route::post('/dashboard/settings', 'Dashboard\SettingController@store');

