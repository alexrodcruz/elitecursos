<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-8">
                <?php echo Form::label('nome', 'Nome:'); ?>

                <?php echo Form::text('nome', isset($disciplina->nome) ? $disciplina->nome : NULL, ['class' => 'form-control', 'onChange' => 'this.value = this.value.toUpperCase()']); ?>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Turma</label>
                <select id="idTurma" name="idTurma" class="form-control select2">
                    <option value="">SELECIONE</option>
                    <?php if(isset($idTurma)): ?>
                        <option value="<?php echo e($idTurma[0]['id']); ?>" selected><?php echo e($idTurma[0]['nome']); ?></option>
                        <?php $__currentLoopData = $turma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turmas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($turmas['id']); ?>"><?php echo e($turmas['nome']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php else: ?>
                        <?php $__currentLoopData = $turma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turmas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($turmas['id']); ?>"><?php echo e($turmas['nome']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Professor</label>
                <select id="idProfessor" name="idProfessor" class="form-control select2">
                    <option value="">SELECIONE</option>
                    <?php if($idProfessor): ?>
                        <option value="<?php echo e($idProfessor[0]['id']); ?>" selected><?php echo e($idProfessor[0]['nome']); ?></option>
                        <?php $__currentLoopData = $professor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professores): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($professores['id']); ?>"><?php echo e($professores['nome']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php else: ?>
                        <?php $__currentLoopData = $professor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professores): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($professores['id']); ?>"><?php echo e($professores['nome']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                <?php echo Form::label('cargaHoraria', 'Carga Horária:'); ?>

                <?php echo Form::text('cargaHoraria', isset($disciplina->cargaHoraria) ? $disciplina->cargaHoraria : NULL, ['class' => 'form-control']); ?>

            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->