

<?php $__env->startSection('contentheader_title'); ?>
    Resultado de la práctica
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
    Resultado de la práctica
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/vocabulario"><?php echo e(trans('vocabulario.vocabulario_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    "Resultado de la práctica"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    "Realizando examen, realizando una práctica"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
	<div class="callout callout-info">
		<h4>Resultado de la práctica</h4>
		El resultado del ejercicio es 
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><?php echo e($datos['nota']); ?></span>
			</div>
		</div>
	</div>
	<div class="box-body pad table-responsive">
		<div class="col-md-2">
			<a href="<?php echo e($datos['pagina']['url']); ?>"><button type="button" class="btn btn-block btn-primary btn-lg">Volver</button></a>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/practicas/resultadopractica.blade.php ENDPATH**/ ?>