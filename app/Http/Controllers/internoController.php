<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class internoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $email = Auth::user()->email;

        $idPessoa = DB::select("SELECT id FROM pessoas WHERE email = '$email';");

        $idAluno = $idPessoa[0]->id;

        $turma = DB::select("SELECT B.nome as nomeTurma
                                  FROM matricula A 
                                  INNER JOIN turma B 
                                  ON (A.idTurma = B.id)
                                  WHERE A.idAluno = $idAluno;");


        $disciplinas = DB::select("SELECT B.nome as nomeTurma,
                                          C.nome as nomeDisciplina,
                                          C.id as idDisciplina,
                                          B.id as idTurma
                                  FROM matricula A 
                                  INNER JOIN turma B 
                                  ON (A.idTurma = B.id)
                                  INNER JOIN disciplina C
                                  ON (A.idTurma = C.idTurma) WHERE A.idAluno = $idAluno;");

        $turmasAluno['turmasAluno'] = $turma;

        $turmasAluno['disciplinaAluno'] = $disciplinas;

        return view('interno.index')->with($turmasAluno);

    }
}
