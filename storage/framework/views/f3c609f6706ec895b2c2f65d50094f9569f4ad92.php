

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.contraccio_title') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.contraccio_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/ortografia"><?php echo e(trans('ortografia.ortografia_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.contraccio_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.contraccio_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('ortografia.contraccio_texto1') )); ?></p>
</div>

<div class="row">
	<div class="col-7">
		<div class="card">
			<div class="box-body">
				<table class="table table-bordered" summary="<?php echo e(trans('ortografia.contraccio_title')); ?>">
					<thead>
						<tr>
							<th><?php echo e(html_entity_decode(trans('ortografia.contraccio_titulo2') )); ?></th>
							<th><?php echo e(html_entity_decode(trans('ortografia.contraccio_titulo3') )); ?></th>
							<th><?php echo e(html_entity_decode(trans('ortografia.contraccio_titulo4') )); ?></th>
							<th><?php echo e(html_entity_decode(trans('ortografia.contraccio_titulo5') )); ?></th>
						</tr>
					</thead>
					<tr><td>a</td>		<td>al</td>		<td>als</td>	<td>als germans</td></tr>
					<tr><td>de</td>		<td>del</td>	<td>dels</td>	<td>del germà</td></tr>
					<tr><td>per</td>	<td>pel</td>	<td>pels</td>	<td>pels camins</td></tr>
				</table>
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

<div class="comment-text">
	<h2><?php echo e(html_entity_decode(trans('ortografia.contraccio_titulo1') )); ?></h2>
</div>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('ortografia.contraccio_texto2') )); ?></p>
	<p><?php echo e(html_entity_decode(trans('ortografia.contraccio_texto3') )); ?></p>
</div>

<div class="row">
	<div class="col-12">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		     style="display:block; text-align:center;"
		     data-ad-layout="in-article"
		     data-ad-format="fluid"
		     data-ad-client="ca-pub-7412986561454436"
		     data-ad-slot="3142885157"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/contraccio.blade.php ENDPATH**/ ?>