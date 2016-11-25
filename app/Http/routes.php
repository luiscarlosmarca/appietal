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
    return view('home');
});


// crear usuario

Route::get('/crear-usuario/',[
'uses'	=>'MatriculaController@create_user',
'as'	  =>'user.create'
]);

Route::post('/crear-usaurio/',[
'uses'	=>'MatriculaController@store_user',
'as'	  =>'user.store'
]);

Route::get('login',[
'uses'	=>'Auth\AuthController@getLogin',
'as'	=>'login'
]);

Route::post('login', 'Auth\AuthController@postLogin');

/// registrados..
Route::group(['middleware'=>'auth'], function(){

  Route::get('cerrar-sesión', [
  'uses'	=>'Auth\AuthController@getLogout',
  'as'	=>'cerrar'
  ]);

  Route::group(['middleware'=>'role:estudiante'], function()
  {
    Route::get('home', function () {
        return view('welcome');
    });

    // /Estudiantesb - datos personales

    Route::get('/iniciar-proceso/',[
    'uses'	=>'MatriculaController@create_datos',
    'as'	  =>'datos.create'
    ]);

    Route::post('/iniciar-proceso/',[
    'uses'	=>'MatriculaController@store_datos',
    'as'	  =>'datos.store'
    ]);

    // Estudiantesb - datos acudientes

    Route::get('/ingresar-acudientes/',[
    'uses'	=>'MatriculaController@create_acudientes',
    'as'	  =>'acudientes.create'
    ]);

    Route::post('/ingresar-acudientes/',[
    'uses'	=>'MatriculaController@store_acudientes',
    'as'	  =>'acudientes.store'
    ]);

    // Estudiantesb - datos acudientes

    Route::get('/ingresar-institucion/',[
    'uses'	=>'MatriculaController@create_institucions',
    'as'	  =>'institucions.create'
    ]);

    Route::post('/ingresar-institucion/',[
    'uses'	=>'MatriculaController@store_institucions',
    'as'	  =>'institucions.store'
    ]);


    //

    Route::get('verificar-estado', function () {
        return view('estudiantes.estado');
    });

    Route::group(['middleware'=>'role:admin'], function()
    {
      Route::get('listAprobados', function () {
          return view('admin.listAprobados');
      });
    });

 });
});
