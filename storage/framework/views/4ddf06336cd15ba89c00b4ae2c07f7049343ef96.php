<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Materiais Didáticos
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Materiais</li>
        </ol>
    </section>
    <br>

    <div class="box box-solid">

        <div class="box-body">
            <div class="box-group" id="accordion">
                <?php if( isset($material) ): ?>
                    <?php $__currentLoopData = $material; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materiais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <div class="panel box box-primary">
                            <div class="box-header with-border">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo e($materiais->id); ?>">
                                        <?php echo e($materiais->descricao); ?>

                                    </a>
                                </h4>
                            </div>
                            <div id="<?php echo e($materiais->id); ?>" class="panel-collapse collapse">
                                <div class="box-body">
                                    <font size="1">Disciplina: </font><?php echo e($materiais->nomeDisciplina); ?>

                                    <br>
                                    <font size="1">Turma: </font><?php echo e($materiais->nomeTurma); ?>

                                    <br>
                                    <?php if($materiais->tipoMaterial == 'PDF'): ?>
                                        <font size="1">Material: </font>
                                        <a href="../<?php echo e($materiais->material); ?>" target="_blank">
                                            <img src="<?php echo e(asset('backend/dist/img/pdf.png')); ?>" TITLE="BAIXAR" />
                                        </a>
                                    <?php else: ?>
                                        <iframe src="<?php echo e($materiais->material); ?>" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <?php endif; ?>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>