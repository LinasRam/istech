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

Route::get('/login-page', function(){
    return view('admin.login');
})->name('loginPage');

Route::get('/signup-page', function(){
    return view('admin.signup');
})->name('signupPage');

Route::post('/signup', [
    'uses' => 'userController@postSignUp',
    'as' => 'signup'
]);

Route::post('/login', [
    'uses' => 'userController@postLogIn',
    'as' => 'login'
]);

Route::get('/logout', [
    'uses' => 'userController@getLogOut',
    'as' => 'logout',
    'middleware' => 'auth'
]);

Route::get('/admin', [
    'uses' => 'adminController@getAdminPage',
    'as' => 'admin',
    'middleware' => 'auth'
]);

Route::get('/admin/kategorija/{kategorija?}', [
    'uses' => 'adminController@getKategorijaPage',
    'as' => 'admin.kategorija',
    'middleware' => 'auth'
]);

Route::get('/admin/naujas', [
    'uses' => 'adminController@getNaujasPage',
    'as' => 'admin.naujas',
    'middleware' => 'auth'
]);

Route::post('/admin/naujas', [
    'uses' => 'adminController@postNaujasStraipsnis',
    'as' => 'admin.naujas',
    'middleware' => 'auth'
]);

Route::get('/admin/redaguoti/{url?}', [
    'uses' => 'adminController@getRedaguotiPage',
    'as' => 'admin.redaguotiPage',
    'middleware' => 'auth'
]);

Route::post('/admin/redaguoti/', [
    'uses' => 'adminController@postStraipsnisUpdate',
    'as' => 'admin.redaguoti',
    'middleware' => 'auth'
]);

Route::get('admin/delete/{url?}', [
    'uses' => 'adminController@deleteStraipsnis',
    'as' => 'admin.delete'
]);