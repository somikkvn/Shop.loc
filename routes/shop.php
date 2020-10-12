<?php

Route::get('/categories', 'MainController@categories');
//Route::get('/washmashine/{product}', 'MainController@product');

//Route::get('/categories/{category}', 'MainController@category');
Route::get('/category/tv', 'MainController@getCategoryTv');
Route::get('/category/kitchen', 'MainController@getCategoryKitchen');
Route::get('/category/vacuum', 'MainController@getCategoryVacuum');
Route::get('/category/coffeemachine', 'MainController@getCategoryCoffee');

Route::get('/category', 'MainController@getCategory');





