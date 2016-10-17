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
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="{{ route('interno.material.createPdf') }}">
                    <img src="{{asset('backend/dist/img/pdf.png')}}" TITLE="ADICIONAR PDF">
                </a>
                <a href="{{ route('interno.material.createVideo') }}">
                    <img src="{{asset('backend/dist/img/video.png')}}" TITLE="ADICIONAR VÍDEO">
                </a>
            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            @if( isset($material) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">DESCRIÇÃO</th>
                        <th style="text-align: center;">TIPO</th>
                        <th style="text-align: center;">TURMA - DISCIPLINA</th>
                        <th style="text-align: center;">MATERIAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($material as $materiais)
                        <tr>
                            <td align="center">
                                <a href="{{ route('interno.material.remove', ['id' => $materiais->id ]) }}">
                                    <img src="{{asset('backend/dist/img/inativo.png')}}" TITLE="EXCLUIR MATERIAL">
                                </a>
                            </td>
                            <td>{{$materiais->descricao}}</td>
                            <td align="center">{{$materiais->tipoMaterial}}</td>
                            <td>{{$materiais->nomeTurma}} - {{$materiais->nomeDisciplina}}</td>
                            <td align="center">
                                @if($materiais->tipoMaterial == 'PDF')
                                    <a href="../{{$materiais->material}}" target="_blank">
                                        <img src="{{asset('backend/dist/img/pdf.png')}}" TITLE="BAIXAR" />
                                    </a>
                                @else

                                @endif


                            </td>
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Materiais disponíveis.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@stop