<?php

Route::get('/categories', 'MainController@categories');
Route::get('/washmashine/{product}', 'MainController@product');

Route::get('/categories/{category}', 'MainController@category');


Route::get('/category', function () {
    return view('category');
});
