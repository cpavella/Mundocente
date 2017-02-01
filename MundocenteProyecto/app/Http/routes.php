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

Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::get('cuenta', 'HomeController@cuenta');
Route::get('publications', 'HomeController@publications');
Route::get('publicar-convocatoria', 'HomeController@publicarconvocatoria');
Route::get('publicar-revista', 'HomeController@publicarrevista');
Route::get('publicar-invitacion', 'HomeController@publicarinvitacion');
Route::get('publicar-evento', 'HomeController@publicarevento');
Route::get('signup', 'HomeController@registrar');




Route::resource('user', 'UserController');




Route::resource('session', 'SessionController');
Route::resource('logout', 'SessionController@cerrarsesion');