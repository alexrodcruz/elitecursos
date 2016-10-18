<?php $__env->startSection('conteudo'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Elite Cursos
            <small>Para nós, o que importa é a sua aprovação!</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Elite Cursos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">




        <!-- Main row -->
        <div class="row">
            <section class="col-lg-7 connectedSortable"></section><!-- FIM DA COLUNA 1 -->

            <!-- COLUNA 2 -->
            <section class="col-lg-5 connectedSortable"></section><!-- FIM DA COLUNA 2 -->
        </div><!-- /.row (main row) -->
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('interno.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>