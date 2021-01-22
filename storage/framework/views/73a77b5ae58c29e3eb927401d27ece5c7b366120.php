

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.jqcv_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.jqcv_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><?php echo e(session('BC1texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.jqcv_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.jqcv_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-5">
                 <?php echo $__env->make('paginas.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-7">
                <p><?php echo trans('examenes.jqcv_texto1'); ?></p>
                <p><?php echo trans('examenes.jqcv_texto2'); ?></p>
                <p><?php echo e(trans('examenes.jqcv_texto3')); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row">
            <h2><?php echo e(trans('home.home_titulo1')); ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/<?php echo e(session('lang')); ?>/examenes-a1"><h3><?php echo e(trans('examenes.jqcv_titulo11')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto11')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/<?php echo e(session('lang')); ?>/examenes-a2"><h3><?php echo e(trans('examenes.jqcv_titulo12')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto12')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/<?php echo e(session('lang')); ?>/examenes-b1"><h3><?php echo e(trans('examenes.jqcv_titulo13')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto13')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/examenes-b2"><h3><?php echo e(trans('examenes.jqcv_titulo14')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto14')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/<?php echo e(session('lang')); ?>/examenes-c1"><h3><?php echo e(trans('examenes.jqcv_titulo15')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto15')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/<?php echo e(session('lang')); ?>/examenes-c2"><h3><?php echo e(trans('examenes.jqcv_titulo16')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto16')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/<?php echo e(session('lang')); ?>/examenes-elemental"><h3><?php echo e(trans('examenes.jqcv_titulo17')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto17')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/examenes-oral"><h3><?php echo e(trans('examenes.jqcv_titulo18')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto18')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/<?php echo e(session('lang')); ?>/examenes-mitja"><h3><?php echo e(trans('examenes.jqcv_titulo19')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto19')); ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/examenes-superior"><h3><?php echo e(trans('examenes.jqcv_titulo20')); ?></h3><br/><?php echo e(trans('examenes.jqcv_texto20')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/index.blade.php ENDPATH**/ ?>