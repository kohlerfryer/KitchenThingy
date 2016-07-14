<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('kitchen_dreamer', function()
{
	return View::make('kitchen_dreamer');
});

Route::get('admin', function()
{
	return View::make('admin');
});

Route::post('admin_panel/add_stone', 'AdminController@add_stone');