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
});

Route::post('/crd', 'CrudController@create' );
Route::get('/crd', function () { return view('signupForm'); });
Route::get('/list','CrudController@view');
Route::get('/edit/{id}','CrudController@edit')->name('showEdit');
Route::post('/update/{id}','CrudController@update')->name('update');

