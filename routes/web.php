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
use Illuminate\Support\Facades\Input;
use App\Disciplina;

Route::get('/', 'siteController@index');
Route::get('/contato', 'siteController@contato');
Route::get('/depoimentos', 'siteController@depoimentos');
Route::get('/professores', 'siteController@professores');
Route::get('/institucional', 'siteController@institucional');

Route::get('/inscricao', 'siteController@inscricao');
Route::post('/inscricao/salvar', ['as' => 'inscricao.storePessoa', 'uses' => 'siteController@storePessoa']);



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
Route::get('/interno/matricula/remove/{id}', ['as' => 'interno.matricula.remove', 'uses' => 'MatriculaController@remove']);
Route::put('/interno/matricula/update/{id}', ['as' => 'interno.matricula.update', 'uses' => 'MatriculaController@update']);

//MATERIAL DIDÁTICO
Route::get('/interno/material', ['as' => 'interno.material.index', 'uses' => 'MaterialController@index']);
Route::get('/interno/material/indexProfessor', ['as' => 'interno.material.indexProfessor', 'uses' => 'MaterialController@indexProfessor']);
Route::get('/interno/material/indexAluno', ['as' => 'interno.material.indexAluno', 'uses' => 'MaterialController@indexAluno']);
Route::get('/interno/material/createPdf', ['as' => 'interno.material.createPdf', 'uses' => 'MaterialController@createPdf']);
Route::get('/interno/material/createPdfProfessor', ['as' => 'interno.material.createPdfProfessor', 'uses' => 'MaterialController@createPdfProfessor']);
Route::post('/interno/material/salvarPdf', ['as' => 'interno.material.storePdf', 'uses' => 'MaterialController@storePdf']);
Route::post('/interno/material/salvarPdfProfessor', ['as' => 'interno.material.storePdfProfessor', 'uses' => 'MaterialController@storePdfProfessor']);
Route::get('/interno/material/createVideo', ['as' => 'interno.material.createVideo', 'uses' => 'MaterialController@createVideo']);
Route::get('/interno/material/createVideoProfessor', ['as' => 'interno.material.createVideoProfessor', 'uses' => 'MaterialController@createVideoProfessor']);
Route::post('/interno/material/salvarVideo', ['as' => 'interno.material.storeVideo', 'uses' => 'MaterialController@storeVideo']);
Route::post('/interno/material/salvarVideoProfessor', ['as' => 'interno.material.storeVideoProfessor', 'uses' => 'MaterialController@storeVideoProfessor']);
Route::get('/interno/material/remove/{id}', ['as' => 'interno.material.remove', 'uses' => 'MaterialController@remove']);

Route::get('/ajax-disciplina', function (){

    $dbDisciplina = new Disciplina();

    $idturma = Input::get('idTurma');
    $idProfessor = Input::get('idProfessor');

    if($idProfessor == 40000)
    {
        $disciplinas = $dbDisciplina->where('idTurma',$idturma)->get();
    }
    else
    {
        $disciplinas = $dbDisciplina->where('idTurma',$idturma)->where('idProfessor', $idProfessor)->get();
    }

    return \Illuminate\Support\Facades\Response::json($disciplinas);
});

Auth::routes();
Route::get('/home', 'HomeController@index');
