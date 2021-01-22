

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('practicas.practicas_breadcrumb')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('practicas.practicas_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="/vocabulario"><?php echo e(trans('vocabulario.vocabulario_breadcrumb')); ?></a> <?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?><?php echo e(trans('practicas.practicas_breadcrumb')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('practicas.practicas_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('practicas.practicas_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify my-5">
    <div class="container-fluid">
		<div class="callout callout-info my-5">
			<h2>Resultat de la pràctica</h2>
			
			<div class="mt-5">
				<?php if($datos['nota'] >= 5): ?>
					<div class="btn btn-success info-box">
						<span class="info-box-ico color-green">El resultat de l'exercici és <?php echo e($datos['nota']); ?></span>
					</div>
				<?php else: ?>
					<div class="btn btn-danger info-box">
						<span class="info-box-icon colorg-green">El resultat de l'exercici és <?php echo e($datos['nota']); ?></span>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<div class="box-body pad table-responsive my-5">
			<div class="col-md-2">
				<a href="<?php echo e(session('BC2')); ?>"><button type="button" class="btn  btn-primary btn-lg">Tornar</button></a>
			</div>
		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/practicas/practicaVuelta.blade.php ENDPATH**/ ?>