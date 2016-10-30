<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('descricao', 'Descrição:') !!}
                {!! Form::text('descricao', isset($institucional->descricao) ? $institucional->descricao : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']) !!}
            </div>
        </div>
        <div class="row">
            <div class="box-body pad" style="width: 1000px">
                {!! Form::label('conteudo', 'Conteúdo:') !!}
                <textarea id="conteudo" name="conteudo" rows="10" cols="80">
                    {{isset($institucional->conteudo) ? $institucional->conteudo : NULL}}
                </textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->