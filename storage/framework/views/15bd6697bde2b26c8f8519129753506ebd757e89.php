<?php $__env->startSection('conteudo'); ?>


    <section class="content-header">
        <h1>Pessoas Cadastradas
        </h1>
        <ol class="breadcrumb">
            <li><a href="/interno"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pessoas</li>
        </ol>
    </section>
    <br>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">

                <a href="<?php echo e(route('interno.pessoas.create')); ?>">
                    <img src="<?php echo e(asset('backend/dist/img/addPessoa.png')); ?>" TITLE="ADICIONAR PESSOA">
                </a>


            </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php if( isset($pessoas) ): ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">AÇÃO</th>
                        <th style="text-align: center;">NOME</th>
                        <th style="text-align: center;">CPF</th>
                        <th style="text-align: center;">EMAIL</th>
                        <th style="text-align: center;">SITUAÇÃO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoa): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td align="center">
                                <a href="<?php echo e(route('interno.pessoas.edit', ['id' => $pessoa['id'] ])); ?>">
                                    <img src="<?php echo e(asset('backend/dist/img/editPessoa.png')); ?>" TITLE="EDITAR">
                                </a>
                                <?php if($pessoa['ativo'] == 1): ?>
                                    <a href="<?php echo e(route('interno.pessoas.inativar', ['id' => $pessoa['id'] ])); ?>">
                                        <img src="<?php echo e(asset('backend/dist/img/pessoaInativa.png')); ?>" TITLE="INATIVAR">
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('interno.pessoas.ativar', ['id' => $pessoa['id'] ])); ?>">
                                        <img src="<?php echo e(asset('backend/dist/img/pessoaAtiva.png')); ?>" TITLE="ATIVAR">
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($pessoa['nome']); ?></td>
                            <td align="center"><?php echo e($pessoa['cpf']); ?></td>
                            <td align="center"><?php echo e($pessoa['email']); ?></td>
                            <td align="center">
                                <?php if($pessoa['ativo'] == 1): ?>
                                    <img src="<?php echo e(asset('backend/dist/img/pessoaAtiva.png')); ?>" TITLE="ATIVA">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('backend/dist/img/pessoaInativa.png')); ?>" TITLE="INATIVA">
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </table>
                    <?php else: ?>
                        <h4 style="color:red"> Não existem Pessoas Cadastradas.</h4>
                    <?php endif; ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

















<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>