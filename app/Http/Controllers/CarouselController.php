<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarouselRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Carousel;

use App\Http\Requests;
use App\Http\Requests\TurmaRequest;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dbCarousel = new Carousel();

        $carousel['carousel'] = $dbCarousel::all();

        return view('interno.carousel.index')->with($carousel);
    }

    public function create()
    {
        return view('interno.carousel.create');
    }

    public function store(CarouselRequest $request)
    {
        $dbCarousel = new Carousel();

        $dadosForm = $request->all();

        $uploaddir = 'backend/dist/img/banner/';

        $novoNome = $this->remover_acentos($_FILES['img']['name']);

        $novoNome = $this->remover_espacos($novoNome);

        $data = Carbon::now();

        $data = $this->remover_acentos($data);

        $data = $this->remover_espacos($data);

        $novoNome = $data.$novoNome;

        $uploadfile = $uploaddir . basename($novoNome);

        $dadosForm['img'] = $uploadfile;

        move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);

        $dbCarousel->create($dadosForm);

        $carousel['carousel'] = $dbCarousel::all();

        return view('interno.carousel.index')->with($carousel);
    }

    public function edit($id)
    {
        $dbCarousel = new Carousel();

        $carousel = $dbCarousel->find($id);

        return view("interno.carousel.edit", compact("carousel"));

    }

    public function update(CarouselRequest $request, $id)
    {
        $dbCarousel = new Carousel();

        $upd = $request->all();

        unset($upd['_token']);
        unset($upd['_method']);

        $dbCarousel->where(['id' => $id])->update($upd);

        $carousel['carousel'] = $dbCarousel::all();

        return view('interno.carousel.index')->with($carousel);
    }

    function remover_espacos($texto)
    {
        return preg_replace('/\s/', '', $texto);
    }

    function remover_acentos($string)
    {
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/","/(-|:)/"),explode(" ","a A e E i I o O u U n N c C _"),$string);
    }

    public function destroy($id)
    {
        $carousel = DB::select("DELETE FROM carousel WHERE id = $id");

        $dbCarousel = new Carousel();

        $carousel['carousel'] = $dbCarousel::all();

        return view('interno.carousel.index')->with($carousel);
    }
}