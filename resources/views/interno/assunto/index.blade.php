@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Assuntos Cadastrados
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Assunto</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="{{ route('interno.assunto.create') }}">
                    <img src="{{asset('backend/dist/img/add.png')}}" TITLE="ADICIONAR ASSUNTO">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            @if( isset($assunto) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">DESCRIÇÃO</th>
                        <th style="text-align: center;">DISCIPLINA</th>
                        <th style="text-align: center;">TURMA-FIM</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($assunto as $assuntos)
                        <tr>
                            <td align="center">
                                <a href="{{ route('interno.assunto.edit', ['id' => $assuntos->id ]) }}">
                                    <img src="{{asset('backend/dist/img/edit.png')}}" TITLE="EDITAR">
                                </a>
                            </td>
                            <td align="center">{{$assuntos->descricao}}</td>
                            <td align="center">{{$assuntos->nomeDisciplina}}</td>
                            <td align="center">{{$assuntos->nomeTurma}} - {{$assuntos->dataFim}}</td>
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Assuntos Cadastrados.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->

















@stop