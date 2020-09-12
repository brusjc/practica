

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.vocalisme_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.vocalisme_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/ortografia"><?php echo e(trans('ortografia.ortografia_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.vocalisme_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.vocalisme_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
	<div class="col-6">
		<p><?php echo e(html_entity_decode(trans('ortografia.vocalisme_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('ortografia.vocalisme_texto2') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('ortografia.vocalisme_texto3') )); ?></p>
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

<div class="row mt-3">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title"><?php echo e(trans('ortografia.vocalisme_titulo2')); ?></h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.byv_titulo2')); ?>">
					<thead>
						<tr>
							<th id="columna1" scope="col"> Vocals</th>
							<th scope="col"> Ejemplo 1</th>
							<th scope="col"> Ejemplo 2</th>
						</tr>
					</thead>
					<tr><td>a/e</td>	<td>*assamblea (assemblea)</td>	<td>*evaluació (avaluació)</td></tr>
					<tr><td>e/i</td>	<td>*línea (línia)</td>			<td>*coneiximents (coneixements)</td></tr>
					<tr><td>o/u</td>	<td>*montanya (muntanya)</td>	<td>*suspirar (sospirar)</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/vocalisme.blade.php ENDPATH**/ ?>