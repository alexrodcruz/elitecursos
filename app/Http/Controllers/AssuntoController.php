<?php

namespace App\Http\Controllers;

use App\Assunto;
use App\Pessoas;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AssuntoRequest;
use Illuminate\Support\Facades\DB;

class AssuntoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $assunto = DB::select("SELECT A.id,
                                      A.descricao,
                                      B.nome as nomeDisciplina,
                                      C.nome as nomeTurma,
                                      DATE_FORMAT(C.dataFim,'%d/%m/%Y') as dataFim
                                 FROM assunto A
                           INNER JOIN disciplina B
				                   ON (A.idDisciplina = B.id)
                           INNER JOIN turma C
                                   ON (B.idTurma = C.id);");

        $assunto['assunto'] = $assunto;

        return view('interno.assunto.index')->with($assunto);
    }

    public function create()
    {
        $dbTurma = new Turma();

        $dbPessoa = new Pessoas();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        $turma['professor'] = $dbPessoa->where('isProfessor', '=', 1)->where('ativo', '=', 1)->get()->toArray();

        $turma['idTurma'] = null;

        $turma['idProfessor'] = null;

        return view('interno.assunto.create')->with($turma);
    }

    public function store(AssuntoRequest $request)
    {
        $dbAssunto = new Assunto();

        $dadosForm = $request->all();

        $dbAssunto->create($dadosForm);

        $assunto = DB::select("SELECT A.id,
                                      A.descricao,
                                      B.nome as nomeDisciplina,
                                      C.nome as nomeTurma,
                                      DATE_FORMAT(C.dataFim,'%d/%m/%Y') as dataFim
                                 FROM assunto A
                           INNER JOIN disciplina B
				                   ON (A.idDisciplina = B.id)
                           INNER JOIN turma C
                                   ON (B.idTurma = C.id);");

        $assunto['assunto'] = $assunto;

        return view('interno.assunto.index')->with($assunto);

    }

    public function edit($id)
    {
        $dbAssunto = new Assunto();

        $dbTurma = new Turma();

        $dbPessoa = new Pessoas();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $assunto['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        $assunto['professor'] = $dbPessoa->where('isProfessor', '=', 1)->where('ativo', '=', 1)->get()->toArray();

        $assunto['assunto'] = $dbAssunto->find($id);

        return view("interno.assunto.edit")->with($assunto);
    }

    public function update(AssuntoRequest $request, $id)
    {
        $dbAssunto = new Assunto();

        $upd = $request->all();

        unset($upd['_token']);
        unset($upd['_method']);

        $dbAssunto->where(['id' => $id])->update($upd);

        $assunto = DB::select("SELECT A.id,
                                      A.descricao,
                                      B.nome as nomeDisciplina,
                                      C.nome as nomeTurma,
                                      DATE_FORMAT(C.dataFim,'%d/%m/%Y') as dataFim
                                 FROM assunto A
                           INNER JOIN disciplina B
				                   ON (A.idDisciplina = B.id)
                           INNER JOIN turma C
                                   ON (B.idTurma = C.id);");

        $assunto['assunto'] = $assunto;

        return view('interno.assunto.index')->with($assunto);
    }
}
