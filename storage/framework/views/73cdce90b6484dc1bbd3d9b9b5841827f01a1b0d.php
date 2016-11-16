<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Assuntos Cadastrados
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Assunto</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="<?php echo e(route('interno.assunto.create')); ?>">
                    <img src="<?php echo e(asset('backend/dist/img/add.png')); ?>" TITLE="ADICIONAR ASSUNTO">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if( isset($assunto) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">DESCRIÇÃO</th>
                        <th style="text-align: center;">DISCIPLINA</th>
                        <th style="text-align: center;">TURMA-FIM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $assunto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assuntos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo e(route('interno.assunto.edit', ['id' => $assuntos->id ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/edit.png')); ?>" TITLE="EDITAR">
                                </a>
                            </td>
                            <td align="center"><?php echo e($assuntos->descricao); ?></td>
                            <td align="center"><?php echo e($assuntos->nomeDisciplina); ?></td>
                            <td align="center"><?php echo e($assuntos->nomeTurma); ?> - <?php echo e($assuntos->dataFim); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </table>
                    <?php else: ?>
                        <h4 style="color:red"> Não existem Assuntos Cadastrados.</h4>
                    <?php endif; ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

















<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>