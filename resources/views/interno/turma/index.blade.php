@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Turmas Cadastradas
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

                <a href="{{ route('interno.turma.create') }}">
                    <img src="{{asset('backend/dist/img/addPessoa.png')}}" TITLE="ADICIONAR TURMA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            @if( isset($turma) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;"></th>
                        <th style="text-align: center;">NOME</th>
                        <th style="text-align: center;">DATA INICIO</th>
                        <th style="text-align: center;">DATA FIM</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($turma as $turmas)
                        <tr>
                            <td>
                                <a href="{{ route('interno.pessoas.edit', ['id' => $turmas['id'] ]) }}">
                                    <img src="{{asset('backend/dist/img/edit.png')}}" TITLE="EDITAR">
                                </a>
                                <a href="#">
                                    <img src="{{asset('backend/dist/img/desativar.png')}}" TITLE="DESATIVAR">
                                </a>
                            </td>
                            <td>{{$turmas['nome']}}</td>
                            <td>{{$turmas['dataInicio']}}</td>
                            <td>{{$turmas['dataFim']}}</td>
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Turmas Cadastradas.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->

















@stop