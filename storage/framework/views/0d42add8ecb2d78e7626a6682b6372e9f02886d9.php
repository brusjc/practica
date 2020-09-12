

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.diasSemana_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.diasSemana_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/vocabulario"><?php echo e(trans('vocabulario.vocabulario_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.diasSemana_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.diasSemana_keywords') )); ?>

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
		<div class="box">
			<div class="box-header">
				<h3 class="box-title"><?php echo e(trans('vocabulario.diasSemana_titulo2')); ?></h3>
			</div>

			<div class="box-body no-padding">
				<table class="table table-condensed" 
				<thead>
					<tr>	<th> Singular</th>
							<th> Plural</th>
							<th>Abreviatures</th>
					</tr>
				</thead>
					<tr><td>Dilluns (lunes)</td>		<td>Dilluns (lunes)</td>			<td>dl</td></tr>
					<tr><td>Dimarts (martes)</td>		<td>Dimarts (martes)</td>			<td>dt</td></tr>
					<tr><td>Dimecres (miércoles)</td>	<td>Dimecres (miércoles)</td>		<td>dc</td></tr>
					<tr><td>Dijous (jueves)</td>		<td>Dijous (jueves)</td>			<td>dj</td></tr>
					<tr><td>Divendres (viernes)</td>	<td>Divendres (viernes)</td>		<td>dv</td></tr>
					<tr><td>Dissabte (sábado)</td>		<td>Dissabtes (sábados)</td>		<td>ds</td></tr>
					<tr><td>Diumenge (domingo)</td>		<td>Diumenges (domingos)</td>		<td>dg</td></tr>			</table>
			</div>
		</div>

		<div class="box-body pad table-responsive">
			<p>Various types of buttons. Using the base class</p>
			<div class="col-md-3">
				<a href="/practicainicio/14"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/dies-de-la-setmana.blade.php ENDPATH**/ ?>