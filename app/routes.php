<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|-------------------------------------------------------------------------
| Rutas para la sección de administrador
|-------------------------------------------------------------------------
*/
Route::group(array('prefix' => 'admin'), function(){
	
	Route::get('/', 'Admin@index');
	
	Route::get('login', 'Login@showLogin');
	
	Route::post('login', 'Login@adminLogin');
	
	Route::resource('noticias', 'NewsController');
	
	Route::resource('usuarios', 'UsersController');
	
	Route::resource('fotos', 'PhotosController').
	
	Route::resource('videos', 'VideosController');
	
}) ;

/*
|------------------------------------------------------------------------
| Rutas de las secciones generales
|------------------------------------------------------------------------
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));

Route::resource('registro','RegisterController', ['only' => ['index', 'store', 'success']]);

Route::resource('noticias','NewsController', ['only' => ['index']]);

// TODO: 1.- Ruta filtrada por Auth:: para el perfil del usuario

/*
|-----------------------------------------------------------------------
| Rutas estáticas
|-----------------------------------------------------------------------
*/
Route::get('convocatoria', array('as' => 'convocatoria', function()
{
	return View::make('static.convocatoria');
})
);

Route::get('reglas', array('as' => 'reglas', function(){
	return View::make('static.reglas');
}));
