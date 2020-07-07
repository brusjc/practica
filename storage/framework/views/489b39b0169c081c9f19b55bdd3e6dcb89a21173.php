

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictat200906mm_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictat200906mm_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/dictatcs"><?php echo e(trans('dictats.dictat200906mm_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictat200906mm_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictat200906mm_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto1') )); ?></p>
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto2') )); ?></p>
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto3') )); ?></p>
</div>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto4') )); ?></p>
	<ul>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto5') )); ?></li>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto6') )); ?></li>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto7') )); ?></li>
	</ul>
</div>

<div class="comment-text">
	<h2><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_titulo2') )); ?></h2>
</div>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto8') )); ?></p>
	<ol>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto9') )); ?></li>
		<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto10') )); ?></li>
		<audio src="/sonido/dictados/dictados200906mmp.mp3" preload="none" controls></audio>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto11') )); ?></li>
		<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
	</ol>
</div>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto12') )); ?></p>
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto13') )); ?></p>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/dictats/dictat200906mm.blade.php ENDPATH**/ ?>