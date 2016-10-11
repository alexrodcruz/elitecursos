<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\Pessoas;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DisciplinaRequest;

class DisciplinaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbDisciplina = new Disciplina();

        $disciplina['disciplina'] = $dbDisciplina::all();

        return view('interno.disciplina.index')->with($disciplina);
    }

    public function create()
    {
        $dbTurma = new Turma();

        $dbPessoa = new Pessoas();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        $turma['professor'] = $dbPessoa->where('isProfessor', '=', 1)->where('ativo', '=', 1)->get()->toArray();

        return view('interno.disciplina.create')->with($turma);
    }

    public function store(DisciplinaRequest $request)
    {
        $dbDisciplina = new Disciplina();

        $dadosForm = $request->all();

        $dbDisciplina->create($dadosForm);

        $disciplina['disciplina'] = $dbDisciplina::all();

        return view('interno.disciplina.index')->with($disciplina);
    }

    public function edit($id)
    {
        $dbDisciplina = new Disciplina();

        $disciplina = $dbDisciplina->find($id);

        return view("interno.disciplina.edit", compact("disciplina"));
    }

    public function update(DisciplinaRequest $request, $id)
    {
        $dbDisciplina = new Disciplina();

        $upd = $request->all();

        unset($upd['_token']);
        unset($upd['_method']);

        $dbDisciplina->where(['id' => $id])->update($upd);

        $disciplina['disciplina'] = $dbDisciplina::all();

        return view('interno.disciplina.index')->with($disciplina);
    }
}
