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
//directions
Route::get('/', 'PagesController@index' );
Route::get('/about', 'PagesController@about' );
Route::get('/service', 'PagesController@service' );

//contact
Route::get('contact', 'ContactsController@create')->name('contact.create');
Route::post('contact', 'ContactsController@store')->name('contact.store');
