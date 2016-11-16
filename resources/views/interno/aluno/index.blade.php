@extends('interno.base')

@section('conteudo')


    <section class="content-header">
        <h1>Materiais Didáticos</h1>
            <br />
            Turma: &nbsp; {!! $dados[0]->nomeTurma !!}
            <br />
            Disciplina: &nbsp; {!! $dados[0]->nomeDisciplina !!}
            <br />
            {!! $dados[0]->sumario !!}
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Materiais</li>
        </ol>
    </section>
    <br>

    <div class="box box-solid">

        <div class="box-body">
            <div class="box-group" id="accordion">
                @if( isset($assunto) )
                    @foreach($assunto as $assuntos)
                        <div class="panel box box-primary">
                            <div class="box-header with-border">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#{{$assuntos->id}}">
                                        {{$assuntos->descricao}}
                                    </a>
                                </h4>
                            </div>
                            <div id="{{$assuntos->id}}" class="panel-collapse collapse">
                                <div class="box-body">
                                    <font size="3">{!! $assuntos->sumario !!} </font>
                                    @if(isset($materialDidatico[0]->link))
                                        <iframe src="{{ $materialDidatico[0]->link }}" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    @else
                                        <font size="3">Nenhum vídeo incluído. </font>
                                    @endif

                                    <br /><br />
                                    <font size="3">Arquivos Complementares: </font>
                                    &nbsp;
                                    @foreach($materialDidatico as $materialDidaticos)
                                        @if($assuntos->id == $materialDidaticos->idAssunto)
                                            <a href="../{{$materialDidaticos->material}}" target="_blank">
                                                <img src="{{asset('backend/dist/img/pdf.png')}}" TITLE="BAIXAR" />
                                            </a>
                                            &nbsp;
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@stop