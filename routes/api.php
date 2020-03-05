<?php

use Illuminate\Http\Request;


// Returnerer 9 produkter for hver gender (ligger bare 4 herre produkter inne)
Route::get('/products/Men', 'ProductController@index');
Route::get('/products/Woman', 'ProductController@index');

// Returnerer produktet til id
Route::get('/products/{product}', 'ProductController@show');

// Returnerer alle produktene til kategori
Route::get('/categories/{category}', 'CategoryController@show');

// Returnerer alle kategorier
Route::get('/categories', 'CategoryController@index');



