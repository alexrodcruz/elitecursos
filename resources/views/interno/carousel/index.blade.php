@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Carousel(Banner Rotativo)
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Carousel</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="{{ route('interno.carousel.create') }}">
                    <img src="{{asset('backend/dist/img/add.png')}}" TITLE="ADICIONAR TURMA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            @if( isset($carousel) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">DESCRIÇÃO</th>
                        <th style="text-align: center;">SITUAÇÃO</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carousel as $carousels)
                        <tr>
                            <td align="center">
                                <a href="{{ route('interno.turma.edit', ['id' => $carousels['id'] ]) }}">
                                    <img src="{{asset('backend/dist/img/edit.png')}}" TITLE="EDITAR TURMA">
                                </a>
                            </td>
                            <td align="center">{{$carousels['descricao']}}</td>
                            <td align="center">{{$carousels['ativo']}}</td>
                        </tr>
                    @endforeach
                </table>
                    @else
                        <h4 style="color:red"> Não existem Imagens Cadastradas.</h4>
                    @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@stop