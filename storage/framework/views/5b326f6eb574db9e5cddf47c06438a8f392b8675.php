

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.B2_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.B2_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.B2_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.B2_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             <?php echo $__env->make('paginas.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-8 pt-5 order-2">
			<p><?php echo trans('examenes.B2_texto1'); ?></p>
			<p><?php echo e(trans('examenes.B2_texto2')); ?></p>
			<p><?php echo trans('examenes.B2_texto3'); ?></p>
        </div>
    </div>
</section>

<section>
	<div class="row content h-100">
		<div class="col-md-4 pt-5 order-2 centraimg">
			<img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_b2.svg" width="300px" title="<?php echo e(trans('examenes.B2_imgtitle100')); ?>" alt="<?php echo e(trans('examenes.B2_imgalt100')); ?>">
		</div>
		<div class="col-md-8 pt-5 order-1">
			<h2><?php echo e(trans('examenes.B2_titulo100')); ?></h2>
			<p><?php echo trans('examenes.B2_texto101'); ?></p>
			<p><?php echo e(trans('examenes.B2_texto102')); ?></p>
		</div>
	</div>
</section>

<section>
    <?php echo $__env->make('paginas.examenes.comunes.examenes_pruebas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section>
    <?php echo $__env->make('paginas.examenes.comunes.examenes_examenes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examenes-b2.blade.php ENDPATH**/ ?>