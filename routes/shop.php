<?php

Route::get('/categories', 'MainController@categories');

Route::post('/insbasket', 'BasketController@insetInBasket');

Route::post('/delbasket', 'BasketController@delInBasket');

Route::post('/delbasketall', 'BasketController@delInBasketAll');

//Route::get('/{items}/{product}', 'MainController@product');
Route::get('/category', 'MainController@getCategory');
Route::get('/category/{items}', 'MainController@getItems');

Route::get('/cart', 'BasketController@getBasket')->middleware('auth');
