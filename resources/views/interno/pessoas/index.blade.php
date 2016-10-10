@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Pessoas Cadastradas
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pessoas</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="{{ route('interno.pessoas.create') }}">
                    <img src="{{asset('backend/dist/img/addPessoa.png')}}" TITLE="ADICIONAR PESSOA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            @if( isset($pessoas) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;"></th>
                        <th style="text-align: center;">NOME</th>
                        <th style="text-align: center;">CPF</th>
                        <th style="text-align: center;">EMAIL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pessoas as $pessoa)
                        <tr>
                            <td>
                                <a href="{{ route('interno.pessoas.edit', ['id' => $pessoa['id'] ]) }}">
                                    <img src="{{asset('backend/dist/img/edit.png')}}" TITLE="EDITAR">
                                </a>
                                <a href="#">
                                    <img src="{{asset('backend/dist/img/desativar.png')}}" TITLE="DESATIVAR">
                                </a>
                            </td>
                            <td>{{$pessoa['nome']}}</td>
                            <td>{{$pessoa['cpf']}}</td>
                            <td>{{$pessoa['email']}}</td>
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Pessoas Cadastradas.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->

















@stop