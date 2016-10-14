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
            @if( isset($turma) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">NOME</th>
                        <th style="text-align: center;">DATA INICIO</th>
                        <th style="text-align: center;">DATA FIM</th>
                        <th style="text-align: center;">SITUAÇÃO</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($turma as $turmas)
                        <tr>
                            <td align="center">
                                <a href="{{ route('interno.turma.edit', ['id' => $turmas['id'] ]) }}">
                                    <img src="{{asset('backend/dist/img/edit.png')}}" TITLE="EDITAR TURMA">
                                </a>
                            </td>
                            <td align="center">{{$turmas['nome']}}</td>
                            <td align="center">{{ Carbon\Carbon::createFromFormat('Y-m-d', $turmas['dataInicio'])->format('d/m/Y') }}</td>
                            <td align="center">{{ Carbon\Carbon::createFromFormat('Y-m-d', $turmas['dataFim'])->format('d/m/Y') }}</td>
                            @if( Carbon\Carbon::now()->format('Y-m-d') >= $turmas['dataFim'] )
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