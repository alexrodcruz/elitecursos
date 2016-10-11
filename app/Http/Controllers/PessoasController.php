<?php

namespace App\Http\Controllers;

use App\Pessoas;
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
    public function update(PessoasRequest $request, $id)
    {
        $dbPessoas = new Pessoas();

        $upd = $request->all();

        unset($upd['_token']);
        unset($upd['_method']);
        unset($upd['senha']);
        unset($upd['senha2']);

        $dbPessoas->where(['id' => $id])->update($upd);

        $pessoas['pessoas'] = $dbPessoas::all();

        return view('interno.pessoas.index')->with($pessoas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
