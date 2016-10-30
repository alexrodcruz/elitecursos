<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Institucional
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Institucional</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header"></div>
        <h3 class="box-title">
            &nbsp;
            <a href="<?php echo e(route('interno.institucional.create')); ?>">
                <img src="<?php echo e(asset('backend/dist/img/add.png')); ?>" TITLE="ADICIONAR CONTEÚDO">
            </a>

        </h3>
        <div class="box-body">
            <?php if( isset($institucional) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">DESCRIÇÃO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $institucional; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucionals): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo e(route('interno.institucional.edit', ['id' => $institucionals['id'] ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/edit.png')); ?>" TITLE="EDITAR CONTEÚDO">
                                </a>
                                <a href="<?php echo e(route('interno.institucional.destroy', ['id' => $institucionals['id'] ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/inativo.png')); ?>" TITLE="EXCLUIR CONTEÚDO">
                                </a>
                            </td>
                            <td align="center"><?php echo e($institucionals['descricao']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </table>
                    <?php else: ?>
                        <h4 style="color:red"> Não existem Conteúdos Cadastrados.</h4>
                    <?php endif; ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>