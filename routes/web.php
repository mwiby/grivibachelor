<?php


// Route for default
Route::get('/', function () {
    return view('welcome');
});
 

// Returnerer 9 produkter for hver gender (ligger bare 4 herre produkter inne)
Route::get('/products/men', 'ProductController@index');
Route::get('/products/woman', 'ProductController@index');

// Returnerer produktet til slug
Route::get('/products/{slug}', 'ProductController@show');

// Returnerer alle produktene til valgt kategori
Route::get('/categories/men/{slug}', 'CategoryController@show');
Route::get('/categories/woman/{slug}', 'CategoryController@show');

// Returnerer alle kategorier
Route::get('/categories', 'CategoryController@index');

//Returnerer alle Brands
Route::get('/brands', 'BrandController@index');

//Returnerer produktene til Brand slug
Route::get('/brands/{slug}', 'BrandController@show');
