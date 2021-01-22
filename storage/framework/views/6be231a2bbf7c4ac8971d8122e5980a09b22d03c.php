

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.exaB1_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.exaB1_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?><a href="<?php echo e(session('BC3')); ?>"><?php echo e(session('BC3texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.exaB1_descripcion1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaB1_descripcion2')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaB1_descripcion3')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaB1_descripcion4')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.exaB1_keywords1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaB1_keywords2')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-1 centraimg">
                 <?php echo $__env->make('paginas.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-8 pt-5 order-2">
                <p><?php echo trans('examenes.exaB1_texto1'); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo trans('examenes.exaB1_texto2'); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo trans('examenes.exaB1_texto3'); ?></p>
                <p><?php echo trans('examenes.exaB1_texto4'); ?></p>
                <p><?php echo trans('examenes.exaB1_texto5'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-2 centraimg">
                <img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_B1.svg" width="300px" title="<?php echo e(trans('examenes.exaB1_imgtitle100')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?>" alt="<?php echo e(trans('examenes.exaB1_imgalt100')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?>">
            </div>
            <div class="col-md-8 pt-5 order-1">
                <h2><?php echo e(trans('examenes.exaB1_titulo100')); ?> <?php echo e($datos['mes']); ?> <?php echo e(trans('examenes.exaB1_titulo101')); ?> <?php echo e($datos['ano']); ?></h2>
                <p><?php echo trans('examenes.exaB1_texto101'); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo trans('examenes.exaB1_texto102'); ?></p>
                <p><?php echo e(trans('examenes.exaB1_texto103')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaB1_texto104')); ?></p>
                <p><?php echo e(trans('examenes.exaB1_texto105')); ?> <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" rel="nofollow" target="_blank"><?php echo e(trans('examenes.exaB1_texto106')); ?></a></p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <?php echo $__env->make('paginas.examenes.comunes.examen_examenes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examen-b1.blade.php ENDPATH**/ ?>