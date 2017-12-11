<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return redirect('anuncio');
});

Route::auth();

Route::group(['middleware' => ['auth']], function() {
    Route::group(array('prefix' => 'agricultor'), function()
    {   
        Route::resource('anuncio', 'AnuncioAgricultorController');

        Route::get('anuncio', 'HomeController@index');

        Route::get('', ['as' => 'agricultor.index', 'uses' => 'AnuncioAgricultorController@index', 'middleware' => ['permission:anuncio-list|anuncio-create|anuncio-edit|anuncio-delete']]);

        Route::get('novo', ['as' => 'agricultor.create', 'uses' => 'AnuncioAgricultorController@create', 'middleware' => ['permission:anuncio-list|anuncio-create|anuncio-edit|anuncio-delete']]);
        
    });

    Route::group(array('prefix' => 'secretaria'), function()
    {   

        Route::resource('chamadapublica', 'ChamadaPublicaSecretariaController');

        Route::get('', ['as' => 'secretaria.index', 'uses' => 'ChamadaPublicaSecretariaController@index', 'middleware' => ['permission:anuncio-list|anuncio-create|anuncio-edit|anuncio-delete|chamadapublica-list']]);

        Route::get('nova', ['as' => 'secretaria.create', 'uses' => 'ChamadaPublicaSecretariaController@create', 'middleware' => ['permission:anuncio-list|anuncio-create|anuncio-edit|anuncio-delete']]);

    });


});

Route::resource('anuncio', 'AnuncioController', ['only' => ['index', 'show']]);

Route::resource('chamadapublica', 'ChamadaPublicaController', ['only' => ['index', 'show']]);

