<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-8">
                <?php echo Form::label('descricao', 'Descrição:'); ?>

                <?php echo Form::text('descricao', isset($assunto->nome) ? $assunto->nome : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
        </div>
        <div class="row">
            <?php echo Form::hidden('idProfessor', 40000, ['class' => 'form-control', 'id' => 'idProfessor']); ?>

            <div class="form-group col-md-4">
                <label>Turma</label>
                <select id="idTurma" name="idTurma" class="form-control select2">
                    <option>SELECIONE A TURMA</option>
                    <?php $__currentLoopData = $turma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turmas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($turmas['id']); ?>"><?php echo e($turmas['nome']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Disciplina</label>
                <select id="idDisciplina" name="idDisciplina" class="form-control select2"></select>
            </div>
        </div>
        <div class="row">
            <div class="box-body pad" style="width: 1000px">
                <?php echo Form::label('sumario', 'Sumário:'); ?>

                <textarea id="conteudo" name="sumario" rows="10" cols="80">
                    <?php echo e(isset($assunto->sumario) ? $assunto->sumario : NULL); ?>

                </textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->