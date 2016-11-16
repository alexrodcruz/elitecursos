<?php $__env->startSection('conteudo'); ?>
    <section class="content-header">
        <h1>
            Editar Disciplina
        </h1>
        <br>
    </section>
    <section id="interno_disciplina_edit">
        <div class="containers">
            <div class="box">
                <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                    <?php echo Form::model($disciplina, ['route' => ['interno.disciplina.update', $disciplina->id], 'method' => 'put', 'id' => 'disciplina']); ?>



                <?php echo $__env->make('interno.disciplina.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::close(); ?>


            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>