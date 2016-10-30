<?php

namespace App\Http\Controllers;

use App\Carousel;
use App\Institucional;
use App\Pessoas;
use App\Turma;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SiteRequest;
use Illuminate\Support\Facades\DB;

class siteController extends Controller
{
    public function index()
    {
        $carousel = DB::select("SELECT *
                                  FROM carousel
                                  WHERE ativo = 1
                                  ORDER BY id DESC;");

        $carousel['carousel'] = $carousel;

        return view('index')->with($carousel);
    }

    public function contato()
    {
        $carousel['carousel'] = null;
        return view('site/contato')->with($carousel);
    }

    public function depoimentos()
    {
        $carousel['carousel'] = null;
        return view('site/depoimentos')->with($carousel);
    }

    public function professores()
    {
        $carousel['carousel'] = null;
        return view('site/professores')->with($carousel);
    }

    public function institucional()
    {
        $carousel['carousel'] = null;

        $dbInstitucional = new Institucional();

        $carousel['institucional'] = $dbInstitucional->all();

        return view('site/institucional')->with($carousel);
    }

    public function inscricao()
    {
        $dbTurma = new Turma();

        $dataAtual = Carbon::now()->format('Y-m-d');

        $turma['turma'] = $dbTurma->where('dataFim','>=', $dataAtual)->where('dataFim','>=', $dataAtual)->get()->toArray();

        return view('site/inscricao')->with($turma);
    }

    public function storePessoa(SiteRequest $request)
    {
        $dadosForm = $request->all();

        $dadosForm['password'] = $dadosForm['senha'];

        $pessoa = new Pessoas();

        $pessoa->create($dadosForm);

        if(array_key_exists('isAdm',$dadosForm))
        {
            $isAdm = $dadosForm['isAdm'];
        }
        else
        {
            $isAdm = 0;
        }

        if(array_key_exists('isProfessor',$dadosForm))
        {
            $isProfessor = $dadosForm['isProfessor'];
        }
        else
        {
            $isProfessor = 0;
        }

        if(array_key_exists('isAluno',$dadosForm))
        {
            $isAluno = $dadosForm['isAluno'];
        }
        else
        {
            $isAluno = 0;
        }

        User::create([
            'name' => $dadosForm['nome'],
            'email' => $dadosForm['email'],
            'password' => bcrypt($dadosForm['password']),
            'isAdm' => $isAdm,
            'isProfessor' => $isProfessor,
            'isAluno' => $isAluno,
        ]);


        $carousel['carousel'] = null;
        return view('index')->with($carousel);
    }

}
