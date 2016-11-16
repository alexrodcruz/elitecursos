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
                <?php if(isset($isProfessor)): ?>
                    <?php if($isProfessor == 'S'): ?>
                        <a href="<?php echo e(route('interno.material.createProfessor')); ?>">
                            <img src="<?php echo e(asset('backend/dist/img/add.png')); ?>" TITLE="INCLUIR MATERIAL">
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <a href="<?php echo e(route('interno.material.create')); ?>">
                        <img src="<?php echo e(asset('backend/dist/img/add.png')); ?>" TITLE="INCLUIR MATERIAL">
                    </a>
                <?php endif; ?>

            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if( isset($material) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">ASSUNTO</th>
                        <th style="text-align: center;">TURMA - DISCIPLINA</th>
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
                            <td><?php echo e($materiais->nomeTurma); ?> - <?php echo e($materiais->nomeDisciplina); ?></td>
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