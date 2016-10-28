<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Pré-Inscrições
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pré-Inscrições</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if( isset($matriculas) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">ALUNO</th>
                        <th style="text-align: center;">CPF</th>
                        <th style="text-align: center;">EMAIL</th>
                        <th style="text-align: center;">TURMA PRETENDIDA</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $matriculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matricula): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo e(route('interno.matricula.efetivarPre', ['id' => $matricula->id, $matricula->idTurma ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/ativo.png')); ?>" TITLE="EFETIVAR MATRÍCULA">
                                </a>
                            </td>
                            <td><?php echo e($matricula->nomeAluno); ?></td>
                            <td align="center"><?php echo e($matricula->cpf); ?></td>
                            <td align="center"><?php echo e($matricula->email); ?></td>
                            <td align="center"><?php echo e($matricula->nomeTurma); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </table>
                    <?php else: ?>
                        <h4 style="color:red"> Não existem Matrículas registradas.</h4>
                    <?php endif; ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>