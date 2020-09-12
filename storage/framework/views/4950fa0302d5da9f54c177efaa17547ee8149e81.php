

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.eio_title') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.eio_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/ortografia"><?php echo e(trans('ortografia.ortografia_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.eio_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.eio_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('ortografia.eio_texto1') )); ?></p>
</div>

<div class="row">
	<div class="col-7">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title"><?php echo e(html_entity_decode(trans('ortografia.eio_titulo1') )); ?></h2>
			</div>
			<div class="box-body">
				<div class="comment-text">
					<p>1) <?php echo e(html_entity_decode(trans('ortografia.eio_texto2') )); ?></p>
					<p>2) <?php echo e(html_entity_decode(trans('ortografia.eio_texto3') )); ?></p>
					<p>3) <?php echo e(html_entity_decode(trans('ortografia.eio_texto4') )); ?></p>
					<p>4) <?php echo e(html_entity_decode(trans('ortografia.eio_texto5') )); ?></p>
					<p>5) <?php echo e(html_entity_decode(trans('ortografia.eio_texto6') )); ?></p>
				</div>
			</div>
		</div>
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

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title"><?php echo e(html_entity_decode(trans('ortografia.eio_titulo2') )); ?></h2>
			</div>
			<div class="box-body">
				<div class="comment-text">
					<p>1) <?php echo e(html_entity_decode(trans('ortografia.eio_texto6') )); ?></p>
					<p>2) <?php echo e(html_entity_decode(trans('ortografia.eio_texto7') )); ?></p>
					<p>3) <?php echo e(html_entity_decode(trans('ortografia.eio_texto8') )); ?></p>
					<p>4) <?php echo e(html_entity_decode(trans('ortografia.eio_texto9') )); ?></p>
					<p>5) <?php echo e(html_entity_decode(trans('ortografia.eio_texto10') )); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/eio.blade.php ENDPATH**/ ?>