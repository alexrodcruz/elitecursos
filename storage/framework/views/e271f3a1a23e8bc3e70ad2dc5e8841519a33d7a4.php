<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Disciplinas Cadastradas
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Disciplinas</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="<?php echo e(route('interno.disciplina.create')); ?>">
                    <img src="<?php echo e(asset('backend/dist/img/add.png')); ?>" TITLE="ADICIONAR DISCIPLINA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if( isset($disciplina) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">NOME</th>
                        <th style="text-align: center;">CARGA HORÁRIA</th>
                        <th style="text-align: center;">TURMA-FIM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $disciplina; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplinas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo e(route('interno.disciplina.edit', ['id' => $disciplinas->id ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/edit.png')); ?>" TITLE="EDITAR">
                                </a>
                            </td>
                            <td><?php echo e($disciplinas->nomeDisciplina); ?></td>
                            <td align="center"><?php echo e($disciplinas->cargaHoraria); ?>h</td>
                            <td align="center"><?php echo e($disciplinas->nomeTurma); ?> - <?php echo e($disciplinas->dataFim); ?></td>
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