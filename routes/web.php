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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dit is om de help pagina te laten zien
Route::get('/help', function(){
    return view('help');
})->name('help');

Route::get('/laravel-links', 'LinksController@index')->name('laravel-links');
Route::get('/laravel-toevoegen', 'LinksController@showLinksForm')->name('laravel-toevoegen');
Route::post('/links-opslaan', 'LinksController@handleLinksForm')->name('links-opslaan');
