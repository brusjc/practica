

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/vocabulario"><?php echo e(trans('vocabulario.vocabulario_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?>
	<a href="/avui-qui-cuina"><?php echo e(trans('vocabulario.cuina_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
	<div class="col-7">
		<p><?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_texto2') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_texto3') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_texto4') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.cuinavideos_texto5') )); ?></p>
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

<div class="timeline-item">
	<div class="timeline-body">
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://youtu.be/ab54WoX11po" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>



<iframe class="youtube-player" type="text/html" width="640" height="385" src="https://youtu.be/ab54WoX11po" frameborder="0"> </iframe>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/avui-qui-cuina-videos.blade.php ENDPATH**/ ?>