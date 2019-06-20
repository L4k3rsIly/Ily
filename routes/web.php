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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/offers', 'OfferController@index')->name('offer.index');
Route::get('/users', 'UserController@index')->name('user.index')->middleware('CheckAge');
Route::get('/offers/add', 'OfferController@add')->name('offer.add');
Route::post('/offers/add', 'OfferController@submit');
Route::get('/offers/edit/{offer}', 'OfferController@edit')->name('offer.edit');
Route::get('/{id}/delete', 'OfferController@delete')->name('offer.delete');
Route::post('/offers/edit/{offer}', 'OfferController@submit');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
