@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Disciplinas Cadastradas
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Disciplinas</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="{{ route('interno.disciplina.create') }}">
                    <img src="{{asset('backend/dist/img/add.png')}}" TITLE="ADICIONAR DISCIPLINA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            @if( isset($disciplina) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">NOME</th>
                        <th style="text-align: center;">CARGA HORÁRIA</th>
                        <th style="text-align: center;">TURMA-FIM</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($disciplina as $disciplinas)
                        <tr>
                            <td align="center">
                                <a href="{{ route('interno.disciplina.edit', ['id' => $disciplinas->id ]) }}">
                                    <img src="{{asset('backend/dist/img/edit.png')}}" TITLE="EDITAR">
                                </a>
                            </td>
                            <td>{{$disciplinas->nomeDisciplina}}</td>
                            <td align="center">{{$disciplinas->cargaHoraria}}h</td>
                            <td align="center">{{$disciplinas->nomeTurma}} - {{$disciplinas->dataFim}}</td>
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Turmas Cadastradas.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->

















@stop