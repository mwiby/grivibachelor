<?php


// Route for default
Route::get('/', function () {
    return view('welcome');
});
 

//Returnerer alle brands
Route::get('/clothes/brands', 'BrandController@index');
//Returnerer ett bestemt brand sine produkter
Route::get('/clothes/brands/{slug}', 'BrandController@show');

/*
 - Første route kall når man trykker mann eller dame
 - Returnerer 6 produkter og kategorier for kjønnet
*/
Route::get('/clothes/{gender}', 'ClothesController@index');

// Returnerer produktene til kategori
Route::get('/clothes/{gender}/category/{c_slug}', 'CategoryController@show');

// Returnerer produktet til slug
Route::get('/product/{slug}', 'ProductController@show');


// admin siden
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
