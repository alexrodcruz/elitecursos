<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Material;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MaterialController extends Controller
{
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

    public function createPdf()
    {
        $dbTurma = new Turma();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        return view('interno.material.createPdf ')->with($turma);
    }

    public function createVideo()
    {
        $dbTurma = new Turma();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        return view('interno.material.createVideo ')->with($turma);
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

    public function remove($id)
    {
        dd('remove');
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
