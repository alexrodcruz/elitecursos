@extends('interno.base')

@section('conteudo')
    <section class="content-header">
        <h1>
            Editar Assunto
        </h1>
        <br>
    </section>
    <section id="interno_assunto_edit">
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
                    {!! Form::model($assunto, ['route' => ['interno.assunto.update', $assunto->id], 'method' => 'put', 'id' => 'assunto']) !!}


                @include('interno.assunto.form')

                {!! Form::close() !!}

            </div>
        </div>
    </section>
@stop