@extends('interno.base')

@section('conteudo')
    <section class="content-header">
        <h1>
            Editar Informações
        </h1>
        <br>
    </section>
    <section id="interno_turma_edit">
        <div class="containers">
            <div class="box">
                @if(count($errors)>0)
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    {!! Form::model($institucional, ['route' => ['interno.institucional.update', $institucional->id], 'method' => 'put', 'id' => 'institucional']) !!}


                @include('interno.institucional.form')

                {!! Form::close() !!}

            </div>
        </div>
    </section>
@stop