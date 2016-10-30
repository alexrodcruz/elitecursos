@extends('interno.base')

@section('conteudo')
    <section class="content-header">
        <h1>
            Editar Pessoa
        </h1>
        <br>
    </section>
    <section id="interno_pessoas_edit">
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
                    {!! Form::model($pessoas, ['route' => ['interno.pessoas.update', $pessoas->id], 'method' => 'put', 'id' => 'pessoas']) !!}


                @include('interno.pessoas.form')

                {!! Form::close() !!}

            </div>
        </div>
    </section>
@stop