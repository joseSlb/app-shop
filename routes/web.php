<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'TestController@welcome' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/categories/{category}', 'CategoryController@show');

Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update');

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')
->group(function () {
    Route::get('/products', 'ProductController@index'); // devuelve un listado.
    Route::get('/products/create', 'ProductController@create'); //crea un formulario.
    Route::post('/products' , 'ProductController@store'); /// registrar los datos ingresados en el formulario.
    Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario para editar el producto segun su ID.
    Route::post('/products/{id}/edit', 'ProductController@update');  //actualizar listado.
    Route::delete('/products/{id}', 'ProductController@destroy'); // formulario para eliminar un producto segun su ID.

    // rutas para imagenes:
	Route::get('/products/{id}/images', 'ImageController@index'); // listado
	Route::post('/products/{id}/images', 'ImageController@store'); // registrar
	Route::delete('/products/{id}/images', 'ImageController@destroy'); // form eliminar	
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // destacar imagen

    // rutas para categorias:
    Route::get('/categories', 'CategoryController@index'); // listado
	Route::get('/categories/create', 'CategoryController@create'); // formulario
	Route::post('/categories', 'CategoryController@store'); // registrar
	Route::get('/categories/{category}/edit', 'CategoryController@edit'); // formulario edición
	Route::post('/categories/{category}/edit', 'CategoryController@update'); // actualizar
	Route::delete('/categories/{category}', 'CategoryController@destroy'); // form eliminar
});


// Un middleware es un mecanismo que se utiliza para filtrar las peticiones HTTP en una aplicación.