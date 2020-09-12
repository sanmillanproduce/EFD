<?php

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::bind('product', function($id) {
    return App\Product::where('id' ,$id)->first();
});


/*Login-Facebook*/
Route::get('login/facebook',                        'Auth\LoginFacebookController@redirect');
Route::get('login/facebook/callback',               'Auth\LoginFacebookController@callback');

Auth::routes();
Route::get('/login',                                'HomeController@log')            ->name('login');
Route::get('/',                                     ['as'=> 'home',             'uses' => 'HomeController@index']);



/*SERVICIES*/
Route::get('/detalles/{id}',                                 ['as'=> 'general',          'uses' => 'HomeController@general']);

/*Producto-Detalle*/
Route::get('producto/{name}',                       'HomeController@producto')      ->name('producto');


/*Cart-Market*/
Route::get('/cart/show',                            ['as'=> 'cart-show',          'uses' => 'CartController@show']);
Route::get('/cart/add/{product}',                   ['as'=> 'cart-add',           'uses' => 'CartController@add']);
Route::get('/cart/delete/{product}',                ['as'=> 'cart-delete',        'uses' => 'CartController@delete']);
Route::get('/cart/update/{product}/{quantity}',     ['as'=> 'cart-update',        'uses' => 'CartController@update']);


/*EFD*/
Route::get('/mision',                               'HomeController@mision')         ->name('mision');
Route::get('/sedes',                                'HomeController@sedes')          ->name('sedes');
Route::get('/directorio',                           'HomeController@directorio')     ->name('directorio');
Route::get('/contacto',                             'HomeController@contacto')       ->name('contacto');

/*Noticia-Detalle*/
Route::get('noticia/{name}',                        'HomeController@noticia')         ->name('noticia');

/*Filmografia*/
Route::get('/filmografia',                        'HomeController@filmografia')         ->name('filmografia');
Route::get('descargar-filmografia', 'HomeController@pdf_filmografia')->name('products.pdf');

Route::post('descargar-contacto', 'HomeController@pdf_contacto')->name('pdf.contacto');

Route::post('cheked-extra', 'HomeController@checked_extras')->name('checked.extras');