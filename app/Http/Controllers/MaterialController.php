<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class MaterialController extends Controller
{
    public function index()
    {
        return view('interno.material.index');
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
        $dadosForm = $request->all();





    }

    public function storeVideo(Request $request)
    {
        dd('video');
    }
}
