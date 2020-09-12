

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictat200906mm_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictat200906mm_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/dictats"><?php echo e(trans('dictats.dictats_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictat200906mm_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictat200906mm_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
	<div class="col-7">
		<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto2') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto3') )); ?></p>
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

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto4') )); ?></p>
	<ul>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto5') )); ?></li>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto6') )); ?></li>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto7') )); ?></li>
	</ul>
</div>

<div class="comment-text">
	<h2><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_titulo1') )); ?></h2>
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


<div class="row">
	<div class="col-lg-4 col-md-4">
	</div>
	<div class="col-lg-4 col-md-4">
		<a class="btn btn-block btn-primary btn-lg" href="/dictat200906mm_comprobador"><?php echo e(html_entity_decode(trans('dictats.dictats_comprovaElTeuDictat') )); ?></a>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/dictats/dictat200906mm.blade.php ENDPATH**/ ?>