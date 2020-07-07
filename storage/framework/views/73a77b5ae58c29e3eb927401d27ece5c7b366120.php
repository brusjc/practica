

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
	<div class="col-7">
		<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto2') )); ?></p>
	</div>
</div>

<div class="row">			
	<?php $__currentLoopData = $respuesta['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-lg-3 col-md-3 mb-2 text-capitalize">
			<a class="btn btn-block  btn-info btn-lg  color-palette" href="examen<?php echo e(str_replace('à', 'a', utf8_decode($grado['nombre']))); ?>"><?php echo e(utf8_decode($grado['nombre'])); ?></a>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>		

<div class="row">			
	<div class="col-lg-12 col-md-12 mt-5">
		<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto3') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto4') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('examenes.jqcv_texto5') )); ?></p>
	</div>
</div>

<div class="row">			
	<div class="col-lg-12 col-md-12 mt-5">
		<h2>Exàmens JQCV</h2>
	</div>
</div>
<div class="row">
	<div class="col-6">
		<ul>
			<?php $__currentLoopData = $respuesta['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><a href="examen<?php echo e(str_replace('à', 'a', $grado['nombre'])); ?>">Examen <?php echo e($grado['nombre']); ?></a></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
	<div class="col-6">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/index.blade.php ENDPATH**/ ?>