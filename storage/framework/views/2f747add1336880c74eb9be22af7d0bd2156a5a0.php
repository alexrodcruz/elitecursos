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
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="<?php echo e(route('interno.material.createPdf')); ?>">
                    <img src="<?php echo e(asset('backend/dist/img/pdf.png')); ?>" TITLE="ADICIONAR PDF">
                </a>
                <a href="<?php echo e(route('interno.material.createVideo')); ?>">
                    <img src="<?php echo e(asset('backend/dist/img/video.png')); ?>" TITLE="ADICIONAR VÍDEO">
                </a>
            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if( isset($material) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">DESCRIÇÃO</th>
                        <th style="text-align: center;">TIPO</th>
                        <th style="text-align: center;">TURMA - DISCIPLINA</th>
                        <th style="text-align: center;">MATERIAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $material; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materiais): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo e(route('interno.material.remove', ['id' => $materiais->id ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/inativo.png')); ?>" TITLE="EXCLUIR MATERIAL">
                                </a>
                            </td>
                            <td><?php echo e($materiais->descricao); ?></td>
                            <td align="center"><?php echo e($materiais->tipoMaterial); ?></td>
                            <td><?php echo e($materiais->nomeTurma); ?> - <?php echo e($materiais->nomeDisciplina); ?></td>
                            <td align="center">
                                <?php if($materiais->tipoMaterial == 'PDF'): ?>
                                    <a href="../<?php echo e($materiais->material); ?>" target="_blank">
                                        <img src="<?php echo e(asset('backend/dist/img/pdf.png')); ?>" TITLE="BAIXAR" />
                                    </a>
                                <?php else: ?>
                                    <img src="<?php echo e(asset('backend/dist/img/video.png')); ?>" TITLE="VÍDEO" />
                                <?php endif; ?>


                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </table>
                    <?php else: ?>
                        <h4 style="color:red"> Não existem Materiais disponíveis.</h4>
                    <?php endif; ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>