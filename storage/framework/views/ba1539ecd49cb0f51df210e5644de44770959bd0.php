

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.exaC1_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.exaC1_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?><?php echo e(session('BC3texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.exaC1_descripcion1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaC1_descripcion2')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaC1_descripcion3')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaC1_descripcion4')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.exaC1_keywords1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaC1_keywords2')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-1 centraimg">
                 <?php echo $__env->make('paginas.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-8 pt-5 order-2">
                <p><?php echo trans('examenes.exaC1_texto1', ['mes'=>$datos['mes'], 'ano'=>$datos['ano'] ]); ?> </p>
                <p><?php echo trans('examenes.exaC1_texto2'); ?></p>
                <p><?php echo trans('examenes.exaC1_texto3'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-2 centraimg">
                <img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_C1.svg" width="300px" title="<?php echo e(trans('examenes.exaC1_imgtitle100')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?>" alt="<?php echo e(trans('examenes.exaC1_imgalt100')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?>">
            </div>
            <div class="col-md-8 pt-5 order-1">
                <h2><?php echo e(trans('examenes.exaC1_titulo100')); ?> <?php echo e($datos['mes']); ?> <?php echo e(trans('examenes.exaC1_titulo101')); ?> <?php echo e($datos['ano']); ?></h2>
                <p><?php echo trans('examenes.exaC1_texto101', ['mes'=>$datos['mes'], 'ano'=>$datos['ano'] ]); ?> </p>
                <p><?php echo trans('examenes.exaC1_texto102', ['mes'=>$datos['mes'], 'ano'=>$datos['ano'] ]); ?> </p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2><?php echo e(trans('examenes.exaC1_titulo200')); ?> <?php echo e($datos['mes']); ?> <?php echo e(trans('examenes.exaB1_titulo101')); ?> <?php echo e($datos['ano']); ?></h2>
                        <div class="text-left">
                            <?php if(Auth::guest()): ?>
                                <?php echo e(ucfirst(trans('message.solo usuarios registrados'))); ?>

                            <?php endif; ?>
                        </div>
                        <div class="text-right">
                            <?php if(!Auth::guest()): ?>
                                <a href="/examennuevo/<?php echo e($codigo); ?>">
                                  <button type="button" class="btn btn-primary"><?php echo e(trans('message.examen_nuevo')); ?></button>
                               </a>
                            <?php else: ?>
                                <a class="mb-2 btn btn-info" href="/examennuevo/<?php echo e($codigo); ?>"><?php echo e(trans('message.sinlogin')); ?></a>
                                <a class="mb-2 btn btn-info" href="/login"><?php echo e(trans('message.login')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th><?php echo e(ucfirst(trans('examenes.examen'))); ?></th>
                                <th><?php echo e(ucfirst(trans('examenes.fecha'))); ?></th>
                                <th><?php echo e(ucfirst(trans('examenes.progreso'))); ?></th>
                                <th style="width: 5%">%</th>
                            </tr>
                            <?php if(!Auth::guest()): ?>
                                <?php if($examenes['original']['status']['error']==0): ?>
                                    <?php $__currentLoopData = $examenes['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e($examen['prueba']['nombre']); ?></a></td>
                                            <td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e(date('d-m-Y', strtotime($examen['created_at']))); ?></a></td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-primary" style="width: <?php echo e($examen['porcentaje']); ?>%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary"><?php echo e($examen['porcentaje']); ?>%</span></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examen-c1.blade.php ENDPATH**/ ?>