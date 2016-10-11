<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TurmaRequest;

class TurmaController extends Controller
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
        $dbTurma = new Turma();

        $turma['turma'] = $dbTurma::all();

        return view('interno.turma.index')->with($turma);
    }

    public function create()
    {
        return view('interno.turma.create');
    }

    public function store(TurmaRequest $request)
    {
        $dbTurma = new Turma();

        $dadosForm = $request->all();

        $dbTurma->create($dadosForm);

        $turma['turma'] = $dbTurma::all();

        return view('interno.turma.index')->with($turma);
    }

    public function edit($id)
    {
        $dbTurma = new Turma();

        $turma = $dbTurma->find($id);

        return view("interno.turma.edit", compact("turma"));

    }

    public function update(TurmaRequest $request, $id)
    {
        $dbTurma = new Turma();

        $upd = $request->all();

        unset($upd['_token']);
        unset($upd['_method']);

        $dbTurma->where(['id' => $id])->update($upd);

        $turma['turma'] = $dbTurma::all();

        return view('interno.turma.index')->with($turma);
    }

}
