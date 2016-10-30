<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Turmas Cadastradas
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Turmas</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="<?php echo e(route('interno.turma.create')); ?>">
                    <img src="<?php echo e(asset('backend/dist/img/add.png')); ?>" TITLE="ADICIONAR TURMA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if( isset($turma) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">NOME</th>
                        <th style="text-align: center;">DATA INICIO</th>
                        <th style="text-align: center;">DATA FIM</th>
                        <th style="text-align: center;">SITUAÇÃO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $turma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turmas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo e(route('interno.turma.edit', ['id' => $turmas['id'] ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/edit.png')); ?>" TITLE="EDITAR TURMA">
                                </a>
                            </td>
                            <td align="center"><?php echo e($turmas['nome']); ?></td>
                            <td align="center"><?php echo e(Carbon\Carbon::createFromFormat('Y-m-d', $turmas['dataInicio'])->format('d/m/Y')); ?></td>
                            <td align="center"><?php echo e(Carbon\Carbon::createFromFormat('Y-m-d', $turmas['dataFim'])->format('d/m/Y')); ?></td>
                            <?php if( Carbon\Carbon::now()->format('Y-m-d') >= $turmas['dataFim'] ): ?>
                                <td align="center"><img src="<?php echo e(asset('backend/dist/img/inativo.png')); ?>" TITLE="INATIVA"></td>
                            <?php else: ?>
                                <td align="center"><img src="<?php echo e(asset('backend/dist/img/ativo.png')); ?>" TITLE="ATIVA"></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </table>
                    <?php else: ?>
                        <h4 style="color:red"> Não existem Turmas Cadastradas.</h4>
                    <?php endif; ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>