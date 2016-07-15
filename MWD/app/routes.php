<?php

Route::get('/', function(){return View::make('home');});
Route::get('kitchen_dreamer', function(){return View::make('kitchen_dreamer');});
Route::get('admin_add_stone', function(){return View::make('admin_add_stone');});
Route::get('admin_inventory_management', function(){return View::make('admin_inventory_management');});

Route::post('admin_panel/add_stone', 'AdminController@add_stone');
Route::get('admin_panel/populate_stone', 'AdminController@populate_stone');
Route::post('admin_panel/update_stone', 'AdminController@update_stone');
Route::post('admin_panel/get_stone', 'AdminController@get_stone');
Route::get('admin_panel/delete_stone', 'AdminController@delete_stone');