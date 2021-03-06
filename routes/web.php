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
use App\Assunto;
use Illuminate\Support\Facades\Input;
use App\Disciplina;

Route::get('/', 'siteController@index');
Route::get('/contato', 'siteController@contato');
Route::get('/depoimentos', 'siteController@depoimentos');
Route::get('/professores', 'siteController@professores');
Route::get('/institucional', 'siteController@institucional');
Route::post('/montaEmailContato', ['as' => 'montaEmailContato', 'uses' => 'siteController@montaEmailContato']);

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

//GESTÃO DE ASSUNTO
Route::get('/interno/assunto', ['as' => 'interno.assunto.index', 'uses' => 'AssuntoController@index']);
Route::get('/interno/assunto/create', ['as' => 'interno.assunto.create', 'uses' => 'AssuntoController@create']);
Route::post('/interno/assunto/salvar', ['as' => 'interno.assunto.store', 'uses' => 'AssuntoController@store']);
Route::get('/interno/assunto/edit/{id}', ['as' => 'interno.assunto.edit', 'uses' => 'AssuntoController@edit']);
Route::put('/interno/assunto/update/{id}', ['as' => 'interno.assunto.update', 'uses' => 'AssuntoController@update']);

//MATRÍCULA
Route::get('/interno/matricula', ['as' => 'interno.matricula.index', 'uses' => 'MatriculaController@index']);
Route::get('/interno/matricula/create', ['as' => 'interno.matricula.create', 'uses' => 'MatriculaController@create']);
Route::post('/interno/matricula/salvar', ['as' => 'interno.matricula.store', 'uses' => 'MatriculaController@store']);
Route::get('/interno/matricula/efetivarPre/{id},{idTurma}', ['as' => 'interno.matricula.efetivarPre', 'uses' => 'MatriculaController@efetivarPre']);
Route::get('/interno/matricula/remove/{id}', ['as' => 'interno.matricula.remove', 'uses' => 'MatriculaController@remove']);
Route::put('/interno/matricula/update/{id}', ['as' => 'interno.matricula.update', 'uses' => 'MatriculaController@update']);
Route::get('/interno/matricula/pre', ['as' => 'interno.matricula.pre', 'uses' => 'MatriculaController@pre']);


//MATERIAL DIDÁTICO
Route::get('/interno/material', ['as' => 'interno.material.index', 'uses' => 'MaterialController@index']);
Route::get('/interno/material/indexProfessor', ['as' => 'interno.material.indexProfessor', 'uses' => 'MaterialController@indexProfessor']);
Route::get('/interno/material/create', ['as' => 'interno.material.create', 'uses' => 'MaterialController@create']);
Route::get('/interno/material/createProfessor', ['as' => 'interno.material.createProfessor', 'uses' => 'MaterialController@createProfessor']);
Route::post('/interno/material/salvar', ['as' => 'interno.material.store', 'uses' => 'MaterialController@store']);
Route::post('/interno/material/salvarProfessor', ['as' => 'interno.material.storeProfessor', 'uses' => 'MaterialController@storeProfessor']);
Route::get('/interno/material/remove/{id}', ['as' => 'interno.material.remove', 'uses' => 'MaterialController@remove']);

//GESTÃO CAROUSEL
Route::get('/interno/carousel', ['as' => 'interno.carousel.index', 'uses' => 'CarouselController@index']);
Route::get('/interno/carousel/create', ['as' => 'interno.carousel.create', 'uses' => 'CarouselController@create']);
Route::post('/interno/carousel/salvar', ['as' => 'interno.carousel.store', 'uses' => 'CarouselController@store']);
Route::get('/interno/carousel/edit/{id}', ['as' => 'interno.carousel.edit', 'uses' => 'CarouselController@edit']);
Route::put('/interno/carousel/update/{id}', ['as' => 'interno.carousel.update', 'uses' => 'CarouselController@update']);
Route::get('/interno/carousel/destroy/{id}', ['as' => 'interno.carousel.destroy', 'uses' => 'CarouselController@destroy']);

//GESTÃO INSTITUCIONAL
Route::get('/interno/institucional', ['as' => 'interno.institucional.index', 'uses' => 'InstitucionalController@index']);
Route::get('/interno/institucional/create', ['as' => 'interno.institucional.create', 'uses' => 'InstitucionalController@create']);
Route::post('/interno/institucional/salvar', ['as' => 'interno.institucional.store', 'uses' => 'InstitucionalController@store']);
Route::get('/interno/institucional/edit/{id}', ['as' => 'interno.institucional.edit', 'uses' => 'InstitucionalController@edit']);
Route::put('/interno/institucional/update/{id}', ['as' => 'interno.institucional.update', 'uses' => 'InstitucionalController@update']);
Route::get('/interno/institucional/destroy/{id}', ['as' => 'interno.institucional.destroy', 'uses' => 'InstitucionalController@destroy']);

//ALUNO
Route::get('/interno/aluno', ['as' => 'interno.aluno.index', 'uses' => 'MaterialController@indexAluno']);


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

Route::get('/ajax-assunto', function (){

    $dbAssunto = new Assunto();

    $idDisciplina = Input::get('idDisciplina');
    $idProfessor = Input::get('idProfessor');

    if($idProfessor == 40000)
    {
        $assunto = $dbAssunto->where('idDisciplina',$idDisciplina)->get();
    }
    else
    {
        $assunto = $dbAssunto->where('idDisciplina',$idDisciplina)->get();
    }

    return \Illuminate\Support\Facades\Response::json($assunto);
});

Auth::routes();
Route::get('/home', 'HomeController@index');
