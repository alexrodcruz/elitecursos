<?php

namespace App\Http\Controllers;

use App\Pessoas;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SiteRequest;

class siteController extends Controller
{
    public function index()
    {
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
        return view('site/inscricao');
    }

    public function storePessoa(Request $request)
    {
        $dadosForm = $request->all();

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
            ''
        ]);

        return view('index');
    }

}
