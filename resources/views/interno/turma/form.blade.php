<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', isset($turma->nome) ? $turma->nome : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('dataInicio', 'Data Inicio:') !!}
                {!! Form::date('dataInicio', isset($turma->dataInicio) ? $turma->dataInicio : NULL, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::label('dataFim', 'Data Fim:') !!}
                {!! Form::date('dataFim', isset($turma->dataFim) ? $turma->dataFim : NULL, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->