@extends('interno.base')

@section('conteudo')

    <section id="pessoas_create">
        <div class="container">
            <div class="box">
                <div class="center">
                    <p class="lead">Cadastro de Pessoas</p>
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

                {!! Form::open(['route' => 'interno.pessoas.store', 'method' => 'post', 'id' => 'pessoas']) !!}

                @include('interno.pessoas.form')

                {!! Form::close() !!}

            </div>
        </div>

    </section>
    <!--/#login_create-->
@stop