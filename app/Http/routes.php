<?php

Route::singularResourceParameters();

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

Route::group(['middleware' => 'web'], function () {

	Route::resource('articles/store','ArticlesController@store');
	Route::get('articles/index','ArticlesController@index');
	Route::get('articles/create','ArticlesController@create');
	Route::get('articles/destroy','ArticlesController@destroy');
	Route::get('articles/update','ArticlesController@update');
    Route::get('articles/show','ArticlesController@show');
    Route::get('articles/edit','ArticlesController@edit');






});// aqui fecha a minha estrura de controle de acesso


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('menu','ArticlesController@Menu');


Route::get('menu', function () {
    return view('menu');
});
