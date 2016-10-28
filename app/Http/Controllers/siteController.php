<?php

namespace App\Http\Controllers;

use App\Carousel;
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
        /*
        $carousel = DB::select("SELECT *
                                  FROM carousel
                                  WHERE ativo = 1
                                  limit 3;");

        $carousel['carousel'] = $carousel;

        return view('index')->with($carousel);
        */
        return view('index');
    }

    public function contato()
    {
        return view('site/contato');
    }

    public function depoimentos()
    {
        return view('site/depoimentos');
    }

    public function professores()
    {
        return view('site/professores');
    }

    public function institucional()
    {
        return view('site/institucional');
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

        return view('index');
    }

}
