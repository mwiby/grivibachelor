<?php


// Route for default
Route::get('/', function () {
    return view('welcome');
});
 

//Returnerer ALLE brands
Route::get('/clothes/brands', 'BrandController@index');


//Returnerer bare brands som eksisterer i oppgitt kategori
Route::get('/clothes/{gender}/category/{c_slug}/brands', 'BrandController@show');


/*
 - Første route kall når man trykker mann eller dame
 - Returnerer 6 produkter og kategorier for kjønnet
*/
Route::get('/clothes/{gender}', 'ClothesController@index');

// Returnerer produktene til kategori
Route::get('/clothes/{gender}/category/{c_slug}', 'CategoryController@show');

// Returnerer produktet til slug
Route::get('/product/{slug}', 'ProductController@showOne');


/*Returnerer flere utvalgte brands sine produkter
* {slug} inneholder mange verdier gucci/Veromoda/Nike
* 
*Ikke ferdig
*
Route::get('/clothes/{gender}/category/{c_slug}/brands/{slug}', 'ProductController@show')
->where('slug', '.*');
*/

// admin siden
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
