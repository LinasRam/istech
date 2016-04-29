<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'welcomeController@getWelcomePage',
    'as' => 'home'
]);

Route::get('/straipsniai', function(){
    return view('straipsniai');
})->name('straipsniai');

Route::get('/straipsnis', function(){
    return view('straipsnis');
})->name('straipsnis');

Route::get('/kategorija/{kategorija}', [
    'uses' => 'kategorijaController@getKategorijaPage',
    'as' => 'kategorija'
]);

Route::get('/straipsnis/{kategorija?}/{url?}', [
    'uses' => 'straipsnisController@getStraipsnis',
    'as' => 'straipsnis'
]);