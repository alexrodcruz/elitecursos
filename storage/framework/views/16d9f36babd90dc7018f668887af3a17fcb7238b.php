<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('descricao', 'Descrição:'); ?>

                <?php echo Form::text('descricao', null, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Imagem</label>
                <input type="file" id="img" name="img" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('link', 'Link:'); ?>

                <?php echo Form::text('link', 0,['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('idNoticia', 'Cód. Notícia:'); ?>

                <?php echo Form::text('idNoticia', 0,['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->