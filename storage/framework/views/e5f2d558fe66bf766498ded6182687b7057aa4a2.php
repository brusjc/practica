

<?php $__env->startSection('contentheader_title'); ?>
    <?php echo e(trans('examenes.jqcv_title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
    <?php echo e(trans('examenes.jqcv_titulo1')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(trans('examenes.jqcv_descripcion')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(trans('examenes.jqcv_keywords')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

	<div class="row">
		<div class="col-lg-6 col-md-6">
			<div class="callout callout-info">
                <p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto1') )); ?></p>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="callout callout-info">
				<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto2') )); ?></p>
			</div>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-12 col-md-12">
			<img style="width: 100%;" class="img-fluid img-thumbnail" src="/img/practicav/prepara-els-nivells-de-valencia.jpg" alt="Attachment">
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="callout callout-info">
				<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto3') )); ?></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="callout callout-info">
				<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto4') )); ?></p>
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="callout callout-info">
				<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto5') )); ?></p>
			</div>
		</div>
	</div>	

	<div class="row">			
		<div class="col-lg-12 col-md-12 mt-5">
			<h2>Practica valencià</h2>
		</div>
	</div>

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/examenes-jqcv">
				<i class="fa fa-edit"></i> Practica exàmens JQCV 
			</a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/vocabulario/vocabulario.php">
				<i class="fa fa-edit"></i> Practica vocabulari </a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/ortografia/ortografia.php"><i class="fa fa-edit"></i> Practica ortografia </a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/dictados/dictados.php"><i class="fa fa-edit"></i> Practica dictats</a>
		</div>
	</div>	


	<div class="row">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/cuina/cuina.php"><i class="fa fa-edit"></i> Practica cuina</a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/gent/gent.php"><i class="fa fa-edit"></i> Practica gent</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/pobles/pobles.php"><i class="fa fa-edit"></i> Practica pobles</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/noms/noms.php"><i class="fa fa-edit"></i> Practica els noms de persones</a>
		</div>
	</div>		
	
	

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/home.blade.php ENDPATH**/ ?>