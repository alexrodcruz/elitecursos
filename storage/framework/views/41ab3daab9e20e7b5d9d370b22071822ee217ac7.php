<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h2 align="center">
            Elite Cursos -
            <small>Para nós, o que importa é a sua aprovação!</small>
        </h2>
        <?php if($institucional): ?>
            <?php $__currentLoopData = $institucional; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucionals): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class=" why-choose">
                    <div class=" hi-icon-effect-2 hi-icon-effect-2a">
                        <a href="#set-6" class="hi-icon  glyphicon glyphicon-book"></a>
                    </div>
                    <div class="ser-top ">
                        <h5><?php echo e($institucionals->descricao); ?></h5>
                        <?php echo e($institucionals->conteudo); ?>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>