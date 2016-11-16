<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Materiais Didáticos</h1>
            <br />
            Turma: &nbsp; <?php echo $dados[0]->nomeTurma; ?>

            <br />
            Disciplina: &nbsp; <?php echo $dados[0]->nomeDisciplina; ?>

            <br />
            <?php echo $dados[0]->sumario; ?>

        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Materiais</li>
        </ol>
    </section>
    <br>

    <div class="box box-solid">

        <div class="box-body">
            <div class="box-group" id="accordion">
                <?php if( isset($assunto) ): ?>
                    <?php $__currentLoopData = $assunto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assuntos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <div class="panel box box-primary">
                            <div class="box-header with-border">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo e($assuntos->id); ?>">
                                        <?php echo e($assuntos->descricao); ?>

                                    </a>
                                </h4>
                            </div>
                            <div id="<?php echo e($assuntos->id); ?>" class="panel-collapse collapse">
                                <div class="box-body">
                                    <font size="3"><?php echo $assuntos->sumario; ?> </font>
                                    <?php if(isset($materialDidatico[0]->link)): ?>
                                        <iframe src="<?php echo e($materialDidatico[0]->link); ?>" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    <?php else: ?>
                                        <font size="3">Nenhum vídeo incluído. </font>
                                    <?php endif; ?>

                                    <br /><br />
                                    <font size="3">Arquivos Complementares: </font>
                                    &nbsp;
                                    <?php $__currentLoopData = $materialDidatico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materialDidaticos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <?php if($assuntos->id == $materialDidaticos->idAssunto): ?>
                                            <a href="../<?php echo e($materialDidaticos->material); ?>" target="_blank">
                                                <img src="<?php echo e(asset('backend/dist/img/pdf.png')); ?>" TITLE="BAIXAR" />
                                            </a>
                                            &nbsp;
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
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