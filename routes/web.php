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

Route::resource('/', 'WelcomeController');

Auth::routes();

Route::resource('cotizaciones', 'formController');

Route::resource('trabajos-destacados', 'trabajosDestacadosController');

Route::resource('destacados', 'destacadosController');

Route::resource('/recibodatos', 'ReciboDatos');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UserController@index');

Route::get('/usuarios/{id}','UserController@show')->where('id','[0-9]+');

// Route::resource('/','FormController');




Route::get('/usuarios/nuevo','UserController@create');

Route::post('/usuarios/crear','UserController@store');

Route::resource('/{pagina}','ProductController');

//Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');


