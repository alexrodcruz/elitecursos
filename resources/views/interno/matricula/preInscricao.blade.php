@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Pré-Inscrições
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pré-Inscrições</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

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
                        <th style="text-align: center;">EMAIL</th>
                        <th style="text-align: center;">TURMA PRETENDIDA</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($matriculas as $matricula)
                        <tr>
                            <td align="center">
                                <a href="{{ route('interno.matricula.efetivarPre', ['id' => $matricula->id, $matricula->idTurma ]) }}">
                                    <img src="{{asset('backend/dist/img/ativo.png')}}" TITLE="EFETIVAR MATRÍCULA">
                                </a>
                            </td>
                            <td>{{$matricula->nomeAluno}}</td>
                            <td align="center">{{$matricula->cpf}}</td>
                            <td align="center">{{$matricula->email}}</td>
                            <td align="center">{{$matricula->nomeTurma}}</td>
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Matrículas registradas.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@stop