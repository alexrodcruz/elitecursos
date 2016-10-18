<?php

namespace App\Http\Controllers;

use App\Matricula;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Pessoas;
use App\Turma;

use App\Http\Requests\MatriculaRequest;
use Illuminate\Support\Facades\DB;


class MatriculaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $matriculas = DB::select("SELECT A.id,
                                       B.nome as nomeAluno,
                                       B.cpf,
                                       C.nome as nomeTurma,
                                       C.dataFim
                                  FROM matricula A
                            INNER JOIN pessoas B
                                    ON (A.idAluno = B.id)
                            INNER JOIN turma C
                                    ON (A.idTurma = C.id);");

        $matriculas['matriculas'] = $matriculas;

        return view('interno.matricula.index')->with($matriculas);
    }

    public function create()
    {
        $dbTurma = new Turma();

        $dbPessoa = new Pessoas();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        $turma['aluno'] = $dbPessoa->where('isAluno', '=', 1)->where('ativo', '=', 1)->get()->toArray();

        $turma['idTurma'] = null;

        $turma['idAluno'] = null;

        return view('interno.matricula.create')->with($turma);
    }

    public function store(MatriculaRequest $request)
    {
        $dadosForm = $request->all();

        $dbMatricula = new Matricula();

        for($i=0; $i<count($dadosForm['idAluno']); $i++)
        {
            $alunos[] = $dadosForm['idAluno'][$i];
        }

        for($j=0; $j<count($alunos); $j++)
        {
            $dadosForm['idAluno'] = $alunos[$j];

            $dadosForm['idTurma'] = $dadosForm['idTurma'];

            $dbMatricula->create($dadosForm);
        }

        $matriculas = DB::select("SELECT A.id,
                                       B.nome as nomeAluno,
                                       B.cpf,
                                       C.nome as nomeTurma,
                                       C.dataFim
                                  FROM matricula A
                            INNER JOIN pessoas B
                                    ON (A.idAluno = B.id)
                            INNER JOIN turma C
                                    ON (A.idTurma = C.id);");

        $matriculas['matriculas'] = $matriculas;

        return view('interno.matricula.index')->with($matriculas);
    }

    public function remove($id)
    {
        $dbMatricula = new Matricula();

        $dbMatricula->where(['id' => $id])->delete();


        $matriculas = DB::select("SELECT A.id,
                                       B.nome as nomeAluno,
                                       B.cpf,
                                       C.nome as nomeTurma,
                                       C.dataFim
                                  FROM matricula A
                            INNER JOIN pessoas B
                                    ON (A.idAluno = B.id)
                            INNER JOIN turma C
                                    ON (A.idTurma = C.id);");

        $matriculas['matriculas'] = $matriculas;

        return view('interno.matricula.index')->with($matriculas);
    }
}
