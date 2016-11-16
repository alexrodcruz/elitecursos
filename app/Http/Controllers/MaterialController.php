<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Material;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MaterialController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $material = DB::select("SELECT A.id,
                                       D.descricao,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id)
                            INNER JOIN assunto D
                                    ON (A.idAssunto = D.id);");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }

    public function indexProfessor()
    {
        $email = Auth::user()->email;

        $idPessoa = DB::select("SELECT id FROM pessoas WHERE email = '$email';");

        $isProfessor = $idPessoa[0]->id;

        $material = DB::select("SELECT A.id,
                                       D.descricao,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id)
                            INNER JOIN assunto D
                                    ON (A.idAssunto = D.id)
                                 WHERE C.idProfessor = $isProfessor;");

        $material['material'] = $material;

        $material['isProfessor'] = 'S';

        return view('interno.material.index')->with($material);
    }

    public function indexAluno()
    {

        $idDisciplina = $_GET['idDisciplina'];

        $idTurma = $_GET['idTurma'];

        $email = Auth::user()->email;

        $idPessoa = DB::select("SELECT id FROM pessoas WHERE email = '$email';");

        $idAluno = $idPessoa[0]->id;

        $assunto = DB::select("SELECT A.id, A.descricao,A.sumario FROM assunto A WHERE A.idDisciplina = $idDisciplina;");

        $dados = DB::select("SELECT A.nome as nomeDisciplina, B.nome as nomeTurma, A.sumario FROM disciplina A INNER JOIN turma B ON(A.idTurma = B.id) WHERE A.id = $idDisciplina;");

        $materialDidatico = DB::select("SELECT A.id, D.descricao, A.link, A.material, D.id as idAssunto FROM material A INNER JOIN matricula B ON(A.idTurma = B.id) INNER JOIN disciplina C ON(A.idDisciplina = C.id) INNER JOIN assunto D ON(A.idAssunto = D.id) WHERE A.idTurma = $idTurma AND A.idDisciplina = $idDisciplina;");

        $material['assunto'] = $assunto;

        $material['materialDidatico'] = $materialDidatico;

        $material['dados'] = $dados;

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

        $material['turmasAluno'] = $turma;

        $material['disciplinaAluno'] = $disciplinas;

        return view('interno.aluno.index')->with($material);
    }

    public function create()
    {
        $dbTurma = new Turma();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        return view('interno.material.create ')->with($turma);
    }


    public function createProfessor()
    {
        $email = Auth::user()->email;

        $idPessoa = DB::select("SELECT id FROM pessoas WHERE email = '$email';");

        $idProfessor = $idPessoa[0]->id;

        $dbTurma = new Turma();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = DB::select("SELECT B.id,
                                            B.nome
                                        FROM disciplina A 
                                    INNER JOIN turma B 
                                    ON(A.idTurma = B.id)
                                     WHERE A.idProfessor = $idProfessor
                                     GROUP BY B.id,B.nome;");

        $turma['idProfessor'] = $idProfessor;

        return view('interno.material.createProfessor ')->with($turma);
    }

    public function store(MaterialRequest $request)
    {
        $dbMaterial = new Material();

        $dadosForm = $request->all();

        $uploaddir = 'backend/dist/material/';

        for($i=0; $i<count($_FILES['material']['name']); $i++)
        {
            $novoNome = $this->remover_acentos($_FILES['material']['name'][$i]);

            $novoNome = $this->remover_espacos($novoNome);

            $data = Carbon::now();

            $data = $this->remover_acentos($data);

            $data = $this->remover_espacos($data);

            $novoNome = $data.$novoNome;

            $uploadfile = $uploaddir . basename($novoNome);

            $dadosForm['material'] = $uploadfile;

            move_uploaded_file($_FILES['material']['tmp_name'][$i], $uploadfile);

            $dbMaterial->create($dadosForm);
        }

        $material = DB::select("SELECT A.id,
                                        D.descricao,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id)
                            INNER JOIN assunto D
                                    ON (A.idAssunto = D.id);");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }


    public function storeProfessor(MaterialRequest $request)
    {
        $dbMaterial = new Material();

        $dadosForm = $request->all();

        $uploaddir = 'backend/dist/material/';

        for($i=0; $i<count($_FILES['material']['name']); $i++)
        {
            $novoNome = $this->remover_acentos($_FILES['material']['name'][$i]);

            $novoNome = $this->remover_espacos($novoNome);

            $data = Carbon::now();

            $data = $this->remover_acentos($data);

            $data = $this->remover_espacos($data);

            $novoNome = $data.$novoNome;

            $uploadfile = $uploaddir . basename($novoNome);

            $dadosForm['material'] = $uploadfile;

            move_uploaded_file($_FILES['material']['tmp_name'][$i], $uploadfile);

            $dbMaterial->create($dadosForm);
        }

        $email = Auth::user()->email;

        $idPessoa = DB::select("SELECT id FROM pessoas WHERE email = '$email';");

        $idProfessor = $idPessoa[0]->id;

        $material = DB::select("SELECT A.id,
                                        D.descricao,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id)
                            INNER JOIN assunto D
                                    ON (A.idAssunto = D.id)
                                 WHERE C.idProfessor = $idProfessor ;");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }

    public function remove($id)
    {
        $dbMaterial = new Material();

        $material = DB::select("SELECT A.material FROM material A WHERE id = $id;");

        if (isset($material[0]->material))
        {
            unlink($material[0]->material);

            $dbMaterial->where(['id' => $id])->delete();
        }
        else
        {
            $dbMaterial->where(['id' => $id])->delete();
        }

        $material = DB::select("SELECT A.id,
                                       D.descricao,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id)
                            INNER JOIN assunto D
                                    ON (A.idAssunto = D.id);");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);

    }

    function remover_espacos($texto)
    {
        return preg_replace('/\s/', '', $texto);
    }

    /**
     * Remove acentos de uma string
     * @param string $texto Texto a ser filtrado
     * @return string Texto sem acentos
     */
    function remover_acentos($string)
    {
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/","/(-|:)/"),explode(" ","a A e E i I o O u U n N c C _"),$string);
    }

}
