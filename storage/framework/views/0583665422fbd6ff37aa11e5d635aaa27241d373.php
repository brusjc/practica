

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.ortografia_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.ortografia_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.ortografia_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.ortografia_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
	<div class="row">
		<div class="col-7">
			<p><?php echo e(html_entity_decode(trans('ortografia.ortografia_texto1') )); ?></p>
			<p><?php echo e(html_entity_decode(trans('ortografia.ortografia_texto2') )); ?></p>
		</div>
		<div class="col-5">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-7412986561454436"
			     data-ad-slot="6463281785"
			     data-ad-format="auto"
			     data-full-width-responsive="true"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>


	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/vocalisme"><?php echo e(trans('ortografia.vocalisme_breadcrumb')); ?></a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/byv"><?php echo e(trans('ortografia.byv_breadcrumb')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/acentuacion"><?php echo e(trans('ortografia.acentuacion_breadcrumb')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/eio"><?php echo e(trans('ortografia.eio_breadcrumb')); ?></a>
		</div>
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/dieresis"><?php echo e(trans('ortografia.dieresis_breadcrumb')); ?></a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/diftong"><?php echo e(trans('ortografia.diptongos_breadcrumb')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/diacritic"><?php echo e(trans('ortografia.diacritic_breadcrumb')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/apostrof"><?php echo e(trans('ortografia.apostrof_breadcrumb')); ?></a>
		</div>
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="contraccio"><?php echo e(trans('ortografia.contraccio_breadcrumb')); ?></a>
		</div>
	</div>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/index.blade.php ENDPATH**/ ?>