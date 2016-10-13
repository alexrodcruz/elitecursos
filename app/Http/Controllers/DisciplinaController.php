<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\Pessoas;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DisciplinaRequest;
use Illuminate\Support\Facades\DB;

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

        $disciplina = DB::select("SELECT A.id,
                                                       A.nome as nomeDisciplina,
                                                       A.cargaHoraria,
                                                       B.nome as nomeTurma,
                                                       B.dataFim
                                                  FROM disciplina A
                                            INNER JOIN turma B
                                                    ON (A.idTurma = B.id);");

        $disciplina['disciplina'] = $disciplina;




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

        $dbTurma = new Turma();

        $dbPessoa = new Pessoas();

        $disciplina = $dbDisciplina->find($id);

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        $turma['professor'] = $dbPessoa->where('isProfessor', '=', 1)->where('ativo', '=', 1)->get()->toArray();

        $turma['idTurma'] = $dbTurma->where('id','=', $disciplina['idTurma'])->get()->toArray();



        $turma['idProfessor'] = $dbPessoa->where('id', '=', $disciplina['idProfessor'])->get()->toArray();



        return view("interno.disciplina.edit", compact("disciplina"))->with($turma);
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
