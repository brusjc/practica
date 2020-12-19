

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('vocabulario.cos_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('vocabulario.cos_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="/vocabulario"><?php echo e(trans('vocabulario.vocabulario_breadcrumb')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('vocabulario.cos_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('vocabulario.cos_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>


<?php echo Request::url(); ?>


<br/>
<br/>

<section class="about">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-md-5 pt-5 order-1">
               <img class="img-fluid" src="/img/practicav/vocabulario/cos-huma.svg" width="300px" title="<?php echo e(trans('vocabulario.cos_imgtitle20')); ?>" alt="<?php echo e(trans('vocabulario.cos_imgalt20')); ?>">
            </div>
            <div class="col-md-7 pt-5 order-2">
                <h2><?php echo e(trans('vocabulario.cos_titulo20')); ?></h2>
                <div class="col-8">
                    <table class="table table-bordered" summary="tabla de <?php echo e(trans('vocabulario.cos_titulo20')); ?>">
                        <thead>
                            <th><?php echo e(trans('vocabulario.cos_titulo21')); ?></th>
                            <th><?php echo e(trans('vocabulario.cos_titulo22')); ?></th>
                        </thead>
                        <tr>
                            <td><?php echo e(trans('vocabulario.cos_texto21')); ?></td>
                            <td><?php echo e(trans('vocabulario.cos_texto22')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(trans('vocabulario.cos_texto129')); ?></td>
                            <td><?php echo e(trans('vocabulario.cos_texto130')); ?></td>
                        </tr>
                    </table>
                </div>  
            </div>
        </div>
    </div>
</section>

<section>
    <?php echo $__env->make('paginas.pruebas.practicas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/pruebas/tabla-ejercicios.blade.php ENDPATH**/ ?>