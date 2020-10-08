<?php

Route::get('/categories', 'MainController@categories');
Route::get('/washmashine/{product}', 'MainController@product');

Route::get('/categories/{category}', 'MainController@category');


