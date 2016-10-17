@extends('interno.base')

@section('conteudo')

    <section id="matricula_create">
        <div class="container">
            <div class="box">
                <div class="center">
                    <p class="lead">Enviar Material - PDF</p>
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

                {!! Form::open(['route' => 'interno.material.storePdf', 'method' => 'post', 'files'=>true, 'id' => 'material']) !!}

                @include('interno.material.formPdf')

                {!! Form::close() !!}

            </div>
        </div>

    </section>
    <!--/#login_create-->
@stop