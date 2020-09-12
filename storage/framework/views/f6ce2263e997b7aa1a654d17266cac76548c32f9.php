

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.vocabulario_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.vocabulario_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.vocabulario_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.vocabulario_keywords') )); ?>

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
		<p><?php echo e(html_entity_decode(trans('vocabulario.vocabulario_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.vocabulario_texto2') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.vocabulario_texto3') )); ?></p>
	</div>
</div>


	<div class="row mt-3 mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/el-nom-de-les-lletres"><?php echo e(trans('message.nombresletras')); ?></a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/parts-del-dia"><?php echo e(trans('message.partesdia')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/dies-de-la-setmana"><?php echo e(trans('message.diassemana')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/mesos-any"><?php echo e(trans('message.mesesano')); ?></a>
		</div>
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/les-hores"><?php echo e(trans('message.horas')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/numeros"><?php echo e(trans('message.numeros')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/cos-huma"><?php echo e(trans('message.partescuerpo')); ?></a>
		</div>
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/avui-qui-cuina"><?php echo e(trans('message.hoyquecocinamos')); ?></a>
		</div>				
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/parem-taula"><?php echo e(trans('message.ponermesa')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/entre-teles"><?php echo e(trans('message.entretelas')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/ciutat"><?php echo e(trans('message.ciudad')); ?></a>
		</div>
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/hogar"><?php echo e(trans('message.casa')); ?></a>
		</div>				
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/les-relacions-convencionals-i-de-parentiu"><?php echo e(trans('message.relacionesconvencionales')); ?></a>
		</div>		
		<div class="col-lg-3 col-md-3">
			
		</div>		
		<div class="col-lg-3 col-md-3">
			
		</div>
	</div>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/index.blade.php ENDPATH**/ ?>