

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('privacidad.cookies_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('privacidad.cookies_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('privacidad.cookies_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('privacidad.cookies_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
	<div class="col-12">
		<div class="comment-text">
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto01'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto02'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto03'))); ?></p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="comment-text">
			<h2><?php echo e(html_entity_decode(trans('privacidad.cookies_titulo01'))); ?></h2>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto04'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto05'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto06'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto07'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto08'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto09'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto10'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto11'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto12'))); ?></p>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto13'))); ?></p>
			<ul>
				<li><?php echo e(html_entity_decode(trans('privacidad.cookies_texto14'))); ?></li>
				<li><?php echo e(html_entity_decode(trans('privacidad.cookies_texto15'))); ?></li>
				<li><?php echo e(html_entity_decode(trans('privacidad.cookies_texto16'))); ?></li>
				<li><?php echo e(html_entity_decode(trans('privacidad.cookies_texto17'))); ?></li>
			</ul>
			<p><?php echo e(html_entity_decode(trans('privacidad.cookies_texto18'))); ?></p>
		</div>
	</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/LOPD/politica_de_cookies.blade.php ENDPATH**/ ?>