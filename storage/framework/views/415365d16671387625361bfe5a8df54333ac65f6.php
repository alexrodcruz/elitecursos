<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-4">
                <?php echo Form::label('idAluno', 'Aluno(s):'); ?>

                <select id="idAluno[]" name="idAluno[]" class="form-control select2" multiple="multiple">
                    <option value="">SELECIONE</option>
                    <?php if($idAluno): ?>
                        <option value="<?php echo e($idAluno[0]['id']); ?>" selected><?php echo e($idAluno[0]['nome']); ?></option>
                        <?php $__currentLoopData = $aluno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alunos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($alunos['id']); ?>"><?php echo e($alunos['nome']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php else: ?>
                        <?php $__currentLoopData = $aluno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alunos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($alunos['id']); ?>"><?php echo e($alunos['nome']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
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
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Matricular</button>
        </div>
    </div>
</div><!-- /.box-body -->
<!--/#associados_create-->