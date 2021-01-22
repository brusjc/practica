

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('dictats.dictat200906mm_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('dictats.dictat200906mm_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?>Comprobador@endsection


<?php $__env->startSection('descripcion'); ?><?php echo e(trans('dictats.dictat200906mm_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('dictats.dictat200906mm_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
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
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
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
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
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
	</div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/dictats/comprovadictat.blade.php ENDPATH**/ ?>