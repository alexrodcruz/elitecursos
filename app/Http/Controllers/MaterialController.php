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
                                       A.descricao,
                                       A.tipoMaterial,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id);");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }

    public function indexProfessor()
    {
        $email = Auth::user()->email;

        $idPessoa = DB::select("SELECT id FROM pessoas WHERE email = '$email';");

        $isProfessor = $idPessoa[0]->id;

        $material = DB::select("SELECT A.id,
                                       A.descricao,
                                       A.tipoMaterial,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id)
                                 WHERE C.idProfessor = $isProfessor;");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }

    public function indexAluno()
    {
        $email = Auth::user()->email;

        $idPessoa = DB::select("SELECT id FROM pessoas WHERE email = '$email';");

        $idAluno = $idPessoa[0]->id;

        $material = DB::select("SELECT C.id,
                                        C.descricao,
                                        C.tipoMaterial,
                                        B.nome as nomeTurma,
                                        D.nome as nomeDisciplina,
                                        C.material
                                        FROM matricula A 
                                        INNER JOIN turma B
                                        ON(A.idTurma = B.id)
                                        INNER JOIN material C
                                        ON(A.idTurma = C.idTurma)
                                        INNER JOIN disciplina D
                                        ON(C.idDisciplina = D.id)
                                        WHERE A.idAluno = $idAluno;");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }

    public function createPdf()
    {
        $dbTurma = new Turma();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        return view('interno.material.createPdf ')->with($turma);
    }

    public function createPdfProfessor()
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

        return view('interno.material.createPdfProfessor ')->with($turma);
    }

    public function createVideo()
    {
        $dbTurma = new Turma();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        return view('interno.material.createVideo ')->with($turma);
    }

    public function createVideoProfessor()
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

        return view('interno.material.createVideoProfessor')->with($turma);
    }

    public function storePdf(MaterialRequest $request)
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
                                       A.descricao,
                                       A.tipoMaterial,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id);");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }

    public function storePdfProfessor(MaterialRequest $request)
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

        $isProfessor = $idPessoa[0]->id;

        $material = DB::select("SELECT A.id,
                                       A.descricao,
                                       A.tipoMaterial,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id)
                                 WHERE C.idProfessor = $isProfessor;");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);

    }

    public function storeVideo(MaterialRequest $request)
    {
        $dbMaterial = new Material();

        $dadosForm = $request->all();

        $dbMaterial->create($dadosForm);


        $material = DB::select("SELECT A.id,
                                       A.descricao,
                                       A.tipoMaterial,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id);");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }


    public function storeVideoProfessor(MaterialRequest $request)
    {
        $dbMaterial = new Material();

        $dadosForm = $request->all();

        $dbMaterial->create($dadosForm);

        $email = Auth::user()->email;

        $idPessoa = DB::select("SELECT id FROM pessoas WHERE email = '$email';");

        $isProfessor = $idPessoa[0]->id;

        $material = DB::select("SELECT A.id,
                                       A.descricao,
                                       A.tipoMaterial,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id)
                                 WHERE C.idProfessor = $isProfessor;");

        $material['material'] = $material;

        return view('interno.material.index')->with($material);
    }

    public function remove($id)
    {
        $dbMaterial = new Material();

        $materialTipo = DB::select("SELECT A.tipoMaterial, A.material FROM material A WHERE id = $id;");

        if ($materialTipo[0]->tipoMaterial == 'PDF')
        {
            unlink($materialTipo[0]->material);

            $dbMaterial->where(['id' => $id])->delete();
        }
        else
        {
            $dbMaterial->where(['id' => $id])->delete();
        }

        $material = DB::select("SELECT A.id,
                                       A.descricao,
                                       A.tipoMaterial,
                                       B.nome as nomeTurma,
                                       C.nome as nomeDisciplina,
                                       A.material
                                  FROM material A
                            INNER JOIN turma B
                                    ON (A.idTurma = B.id)
                            INNER JOIN disciplina C 
                                    ON (A.idDisciplina = C.id);");

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
