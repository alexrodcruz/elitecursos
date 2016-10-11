@extends('interno.base')

@section('conteudo')
    <section class="content-header">
        <h1>
            Editar Disciplina
        </h1>
        <br>
    </section>
    <section id="interno_disciplina_edit">
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
                    {!! Form::model($disciplina, ['route' => ['interno.disciplina.update', $disciplina->id], 'method' => 'put', 'id' => 'disciplina']) !!}


                @include('interno.disciplina.form')

                {!! Form::close() !!}

            </div>
        </div>
    </section>
@stop