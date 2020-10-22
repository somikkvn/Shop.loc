<?php

Route::get('/categories', 'MainController@categories');
Route::post('/insbasket', 'BasketController@insetInBasket');
Route::post('/delbasket', 'BasketController@delInBasket');
Route::post('/delbasketall', 'BasketController@delInBasketAll');
Route::get('/category', 'MainController@getCategory');
Route::get('/category/{items}', 'MainController@getItems');
Route::get('/cart', 'BasketController@getBasket')->middleware('auth');
Route::get('/stripe', 'StripeController@index');
Route::post('/stripe', 'StripeController@store');
Route::post('/insstripe', 'StripeController@insStripe');




