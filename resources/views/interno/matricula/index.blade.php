@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Efetuar Matrícula
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Turmas</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="{{ route('interno.matricula.create') }}">
                    <img src="{{asset('backend/dist/img/add.png')}}" TITLE="REALIZAR MATRÍCULA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            @if( isset($matriculas) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">ALUNO</th>
                        <th style="text-align: center;">CPF</th>
                        <th style="text-align: center;">TURMA</th>
                        <th style="text-align: center;">SITUAÇÃO TURMA</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($matriculas as $matricula)
                        <tr>
                            <td align="center">
                                <a href="{{ route('interno.matricula.remove', ['id' => $matricula->id ]) }}">
                                    <img src="{{asset('backend/dist/img/inativo.png')}}" TITLE="CANCELAR MATRÍCULA">
                                </a>
                            </td>
                            <td>{{$matricula->nomeAluno}}</td>
                            <td align="center">{{$matricula->cpf}}</td>
                            <td align="center">{{$matricula->nomeTurma}}</td>
                            @if( Carbon\Carbon::now()->format('Y-m-d') >= $matricula->dataFim )
                                <td align="center"><img src="{{asset('backend/dist/img/inativo.png')}}" TITLE="INATIVA"></td>
                            @else
                                <td align="center"><img src="{{asset('backend/dist/img/ativo.png')}}" TITLE="ATIVA"></td>
                            @endif
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Matrículas registradas.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@stop