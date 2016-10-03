<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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

}
