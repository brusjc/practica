

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictat200906mm_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictat200906mm_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<?php echo e(session('BC1texto')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?>
	<a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?>
	<a href="<?php echo e(session('BC3')); ?>"><?php echo e(session('BC3texto')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb4'); ?>
	<a href="<?php echo e(session('BC4')); ?>"><?php echo e(session('BC4texto')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictat200906mm_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictat200906mm_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
	<div class="col-md-12">
  		<div class="box box-primary direct-chat direct-chat-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Texto del dictado</h3>
			</div>
			<div class="box-body">

						<?php $__currentLoopData = $dictat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $palabra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($palabra); ?> 
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</div>

<div class="row mt-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="box-title">Texto del dictado del alumno</h3>
			</div>
			<div class="box-body">

						<?php $__currentLoopData = $alumno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $palabra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($palabra); ?> 
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</div>
<div class="row mt-0">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Examenes - Bajo Introduccion - 728x90 -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:728px;height:90px"
	     data-ad-client="ca-pub-7412986561454436"
	     data-ad-slot="1171860113">
	</ins>
	<script>
	     (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/dictats/comprovadictat.blade.php ENDPATH**/ ?>