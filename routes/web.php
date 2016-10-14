<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//FRONTEND
Route::get('/', 'siteController@index');
Route::get('/contato', 'siteController@contato');
Route::get('/depoimentos', 'siteController@depoimentos');
Route::get('/professores', 'siteController@professores');
Route::get('/institucional', 'siteController@institucional');


//BACKEND
Route::get('/interno', 'internoController@index');

//GESTÃO DE PESSOAS
Route::get('/interno/pessoas', ['as' => 'interno.pessoas.index', 'uses' => 'PessoasController@index']);
Route::get('/interno/pessoas/create', ['as' => 'interno.pessoas.create', 'uses' => 'PessoasController@create']);
Route::post('/interno/pessoas/salvar', ['as' => 'interno.pessoas.store', 'uses' => 'PessoasController@store']);
Route::get('/interno/pessoas/edit/{id}', ['as' => 'interno.pessoas.edit', 'uses' => 'PessoasController@edit']);
Route::put('/interno/pessoas/update/{id}', ['as' => 'interno.pessoas.update', 'uses' => 'PessoasController@update']);
Route::get('/interno/pessoas/ativar/{id}', ['as' => 'interno.pessoas.ativar', 'uses' => 'PessoasController@ativar']);
Route::get('/interno/pessoas/inativar/{id}', ['as' => 'interno.pessoas.inativar', 'uses' => 'PessoasController@inativar']);

//GESTÃO DE TURMAS
Route::get('/interno/turma', ['as' => 'interno.turma.index', 'uses' => 'TurmaController@index']);
Route::get('/interno/turma/create', ['as' => 'interno.turma.create', 'uses' => 'TurmaController@create']);
Route::post('/interno/turma/salvar', ['as' => 'interno.turma.store', 'uses' => 'TurmaController@store']);
Route::get('/interno/turma/edit/{id}', ['as' => 'interno.turma.edit', 'uses' => 'TurmaController@edit']);
Route::put('/interno/turma/update/{id}', ['as' => 'interno.turma.update', 'uses' => 'TurmaController@update']);

//GESTÃO DE DISCIPLINAS
Route::get('/interno/disciplina', ['as' => 'interno.disciplina.index', 'uses' => 'DisciplinaController@index']);
Route::get('/interno/disciplina/create', ['as' => 'interno.disciplina.create', 'uses' => 'DisciplinaController@create']);
Route::post('/interno/disciplina/salvar', ['as' => 'interno.disciplina.store', 'uses' => 'DisciplinaController@store']);
Route::get('/interno/disciplina/edit/{id}', ['as' => 'interno.disciplina.edit', 'uses' => 'DisciplinaController@edit']);
Route::put('/interno/disciplina/update/{id}', ['as' => 'interno.disciplina.update', 'uses' => 'DisciplinaController@update']);

//MATRÍCULA
Route::get('/interno/matricula', ['as' => 'interno.matricula.index', 'uses' => 'MatriculaController@index']);
Route::get('/interno/matricula/create', ['as' => 'interno.matricula.create', 'uses' => 'MatriculaController@create']);
Route::post('/interno/matricula/salvar', ['as' => 'interno.matricula.store', 'uses' => 'MatriculaController@store']);
Route::get('/interno/matricula/edit/{id}', ['as' => 'interno.matricula.edit', 'uses' => 'MatriculaController@edit']);
Route::put('/interno/matricula/update/{id}', ['as' => 'interno.matricula.update', 'uses' => 'MatriculaController@update']);

Auth::routes();
Route::get('/home', 'HomeController@index');
