<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Pessoas;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PessoasRequest;

class PessoasController extends Controller
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
        $dbPessoas = new Pessoas();

        $pessoas['pessoas'] = $dbPessoas::all();

        return view('interno.pessoas.index')->with($pessoas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interno.pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoasRequest $request)
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

        $dbPessoas = new Pessoas();

        $pessoas['pessoas'] = $dbPessoas::all();

        return view('interno.pessoas.index')->with($pessoas);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dbPessoas = new Pessoas();

        $pessoas = $dbPessoas->find($id);

        return view("interno.pessoas.edit", compact("pessoas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dbPessoas = new Pessoas();

        $upd = $request->all();

        unset($upd['_token']);
        unset($upd['_method']);
        unset($upd['password']);
        unset($upd['password-confirm']);

        $dbPessoas->where(['id' => $id])->update(['isAdm' => 0, 'isProfessor' => 0, 'isAluno' => 0]);

        $dbPessoas->where(['id' => $id])->update($upd);

        $pessoas['pessoas'] = $dbPessoas::all();

        return view('interno.pessoas.index')->with($pessoas);
    }

    public function ativar($id)
    {
        $dbPessoas = new Pessoas();

        $dbPessoas->where(['id' => $id])->update(['ativo' => 1]);

        $pessoas['pessoas'] = $dbPessoas::all();

        return view('interno.pessoas.index')->with($pessoas);
    }

    public function inativar($id)
    {
        $dbPessoas = new Pessoas();

        $dbPessoas->where(['id' => $id])->update(['ativo' => 0]);

        $pessoas['pessoas'] = $dbPessoas::all();

        return view('interno.pessoas.index')->with($pessoas);
    }
}
