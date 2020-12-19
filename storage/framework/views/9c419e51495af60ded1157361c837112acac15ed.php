

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.A1_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.A1_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.A1_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.A1_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             <?php echo $__env->make('paginas.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-8 pt-5 order-2">
			<p><?php echo trans('examenes.A1_texto1'); ?></p>
			<ul>
				<li><?php echo e(trans('examenes.A1_texto2')); ?></li>
				<li><?php echo e(trans('examenes.A1_texto3')); ?></li>
				<li><?php echo e(trans('examenes.A1_texto4')); ?></li>
			</ul>
			<p><?php echo trans('examenes.A1_texto5'); ?></p>
        </div>
    </div>
</section>

<section class="about">
	<div class="row content">
		<div class="col-12">
			<p><?php echo e(trans('examenes.A1_texto7')); ?></p>
			<ul>
				<li><?php echo e(trans('examenes.A1_texto8')); ?></li>
				<li><?php echo e(trans('examenes.A1_texto9')); ?></li>
				<li><?php echo e(trans('examenes.A1_texto10')); ?></li>
				<li><?php echo e(trans('examenes.A1_texto11')); ?></li>
				<li><?php echo e(trans('examenes.A1_texto12')); ?></li>
			</ul>
		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examenes-a1.blade.php ENDPATH**/ ?>