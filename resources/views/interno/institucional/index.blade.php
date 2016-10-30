@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Institucional
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Institucional</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header"></div>
        <h3 class="box-title">
            &nbsp;
            <a href="{{ route('interno.institucional.create') }}">
                <img src="{{asset('backend/dist/img/add.png')}}" TITLE="ADICIONAR CONTEÚDO">
            </a>

        </h3>
        <div class="box-body">
            @if( isset($institucional) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">DESCRIÇÃO</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($institucional as $institucionals)
                        <tr>
                            <td align="center">
                                <a href="{{ route('interno.institucional.edit', ['id' => $institucionals['id'] ]) }}">
                                    <img src="{{asset('backend/dist/img/edit.png')}}" TITLE="EDITAR CONTEÚDO">
                                </a>
                                <a href="{{ route('interno.institucional.destroy', ['id' => $institucionals['id'] ]) }}">
                                    <img src="{{asset('backend/dist/img/inativo.png')}}" TITLE="EXCLUIR CONTEÚDO">
                                </a>
                            </td>
                            <td align="center">{{$institucionals['descricao']}}</td>
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Conteúdos Cadastrados.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@stop