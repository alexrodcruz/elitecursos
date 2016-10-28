<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Carousel(Banner Rotativo)
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Carousel</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="<?php echo e(route('interno.carousel.create')); ?>">
                    <img src="<?php echo e(asset('backend/dist/img/add.png')); ?>" TITLE="ADICIONAR TURMA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if( isset($carousel) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">DESCRIÇÃO</th>
                        <th style="text-align: center;">SITUAÇÃO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carousels): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo e(route('interno.turma.edit', ['id' => $carousels['id'] ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/edit.png')); ?>" TITLE="EDITAR TURMA">
                                </a>
                            </td>
                            <td align="center"><?php echo e($carousels['descricao']); ?></td>
                            <td align="center"><?php echo e($carousels['ativo']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </table>
                    <?php else: ?>
                        <h4 style="color:red"> Não existem Imagens Cadastradas.</h4>
                    <?php endif; ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>