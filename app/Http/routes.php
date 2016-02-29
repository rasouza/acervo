<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// API
Route::get('arquivos/materia/{materia?}', 'ArquivoController@materia');
Route::get('arquivos/turma/{turma?}', 'ArquivoController@turma');
Route::get('arquivos/professor/{professor?}', 'ArquivoController@professor');
Route::get('arquivos/categoria/{categoria?}', 'ArquivoController@categoria');
Route::get('arquivos/procurar/{texto}', 'ArquivoController@procurar');



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::resource('admin', 'AdminController', ['only' => ['create', 'store']]);
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@materias');

    Route::get('/materias', 'HomeController@materias');
    Route::get('/turmas', 'HomeController@turmas');
    Route::get('/professores', 'HomeController@professores');
    Route::get('/categorias', 'HomeController@categorias');

    Route::post('procurar', 'HomeController@procurar');
    Route::get('download/{arquivo}', 'HomeController@download');

});
