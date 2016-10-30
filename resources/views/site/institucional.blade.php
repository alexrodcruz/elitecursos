@extends('app')

@section('conteudo')
    <div class="container">
        <h2 align="center">
            Elite Cursos -
            <small>Para nós, o que importa é a sua aprovação!</small>
        </h2>
        @if($institucional)
            @foreach($institucional as $institucionals)
                <div class=" why-choose">
                    <div class=" hi-icon-effect-2 hi-icon-effect-2a">
                        <a href="#set-6" class="hi-icon  glyphicon glyphicon-book"></a>
                    </div>
                    <div class="ser-top ">
                        <h5>{{ $institucionals->descricao }}</h5>
                        {{ $institucionals->conteudo }}
                    </div>
                    <div class="clearfix"> </div>
                </div>
            @endforeach
        @endif
    </div>
@stop
