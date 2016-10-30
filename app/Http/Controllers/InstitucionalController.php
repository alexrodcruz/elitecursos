<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstitucionalRequest;
use App\Institucional;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class InstitucionalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dbInstitucional = new Institucional();

        $institucional['institucional'] = $dbInstitucional::all();

        return view('interno.institucional.index')->with($institucional);

    }

    public function create()
    {
        return view('interno.institucional.create');
    }

    public function store(InstitucionalRequest $request)
    {
        $dadosForm = $request->all();

        $dbInstitucional = new Institucional();

        $dbInstitucional->create($dadosForm);

        $institucional['institucional'] = $dbInstitucional::all();

        return view('interno.institucional.index')->with($institucional);
    }

    public function edit($id)
    {
        $dbInstitucional = new Institucional();

        $institucional = $dbInstitucional->find($id);

        return view("interno.institucional.edit", compact("institucional"));
    }

    public function update(Request $request, $id)
    {
        $dbInstitucional = new Institucional();

        $upd = $request->all();

        unset($upd['_token']);
        unset($upd['_method']);

        $dbInstitucional->where(['id' => $id])->update($upd);

        $institucional['institucional'] = $dbInstitucional::all();

        return view('interno.institucional.index')->with($institucional);
    }

    public function destroy($id)
    {
        $institucional = DB::select("DELETE FROM institucional WHERE id = $id");

        $dbInstitucional = new Institucional();

        $institucional['institucional'] = $dbInstitucional::all();

        return view('interno.institucional.index')->with($institucional);
    }

}
