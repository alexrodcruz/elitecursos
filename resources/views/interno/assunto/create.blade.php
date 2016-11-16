@extends('interno.base')

@section('conteudo')

    <section id="turma_create">
        <div class="container">
            <div class="box">
                <div class="center">
                    <p class="lead">Cadastro de Assunto da Disciplina</p>
                </div>

                @if(count($errors)>0)
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::open(['route' => 'interno.assunto.store', 'method' => 'post', 'id' => 'assunto']) !!}

                @include('interno.assunto.form')

                {!! Form::close() !!}

            </div>
        </div>

    </section>
    <!--/#login_create-->
@stop