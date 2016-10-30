<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('nome', 'Nome:'); ?>

                <?php echo Form::text('nome', isset($turma->nome) ? $turma->nome : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('dataInicio', 'Data Inicio:'); ?>

                <?php echo Form::date('dataInicio', isset($turma->dataInicio) ? $turma->dataInicio : NULL, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group col-md-2">
                <?php echo Form::label('dataFim', 'Data Fim:'); ?>

                <?php echo Form::date('dataFim', isset($turma->dataFim) ? $turma->dataFim : NULL, ['class' => 'form-control']); ?>

            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->