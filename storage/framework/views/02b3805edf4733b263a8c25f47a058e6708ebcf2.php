<!-- Inicio Dados Cadastrais -->

<div class="box box-primary" xmlns="http://www.w3.org/1999/html">
    <!-- form start -->
    <div class="box-body">
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
            <div class="form-group col-md-4">
                <label>Assunto</label>
                <select id="idAssunto" name="idAssunto" class="form-control select2"></select>
            </div>
            <div class="form-group col-md-4">
                <label>Arquivo(s)</label>
                <input type="file" id="material[]" name="material[]" class="form-control" multiple/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Link</label>
                <input type="text" id="link" name="link" class="form-control" multiple/>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>