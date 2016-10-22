@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Materiais Didáticos
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Materiais</li>
        </ol>
    </section>
    <br>

    <div class="box box-solid">

        <div class="box-body">
            <div class="box-group" id="accordion">
                @if( isset($material) )
                    @foreach($material as $materiais)
                        <div class="panel box box-primary">
                            <div class="box-header with-border">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#{{$materiais->id}}">
                                        {{$materiais->descricao}}
                                    </a>
                                </h4>
                            </div>
                            <div id="{{$materiais->id}}" class="panel-collapse collapse">
                                <div class="box-body">
                                    <font size="1">Disciplina: </font>{{$materiais->nomeDisciplina}}
                                    <br>
                                    <font size="1">Turma: </font>{{$materiais->nomeTurma}}
                                    <br>
                                    @if($materiais->tipoMaterial == 'PDF')
                                        <font size="1">Material: </font>
                                        <a href="../{{$materiais->material}}" target="_blank">
                                            <img src="{{asset('backend/dist/img/pdf.png')}}" TITLE="BAIXAR" />
                                        </a>
                                    @else
                                        <iframe src="{{$materiais->material}}" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@stop