

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.meses_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.meses_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/vocabulario"><?php echo e(trans('vocabulario.vocabulario_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.meses_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.meses_keywords') )); ?>

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
		<p><?php echo e(html_entity_decode(trans('vocabulario.meses_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.meses_texto2') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.meses_texto3') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.meses_texto4') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('vocabulario.meses_texto5') )); ?></p>
	</div>
</div>

	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?php echo e(trans('vocabulario.meses_titulo2')); ?></h3>
		</div>

		<div class="box-body no-padding">
			<table class="table table-condensed" summary="tabla de los meses del año.">
				<thead>
					<tr>
						<th id="columna1" scope="col">MESOS</th>
						<th scope="col">DURACIÓ</th>
					</tr>
				</thead>
				<tr><td>Gener</td>		<td>Té 31 dies.</td></tr>
				<tr><td>Febrer</td>		<td>Té 28 dies, encara que també té 29 quan és bisext.</td></tr>
				<tr><td>Març</td>		<td>Té 31 dies.</td></tr>
				<tr><td>Abril</td>		<td>Té 30 dies</td></tr>
				<tr><td>Maig </td>		<td>Té 31 dies.</td></tr>
				<tr><td>Juny</td>		<td>Té 30 dies</td></tr>
				<tr><td>Juliol</td>		<td>Té 31 dies.</td></tr>
				<tr><td>Agost</td>		<td>Té 31 dies.</td></tr>
				<tr><td>Setembre</td>	<td>Té 30 dies</td></tr>
				<tr><td>Octubre</td>	<td>Té 31 dies.</td></tr>
				<tr><td>Novembre</td>	<td>Té 30 dies</td></tr>
				<tr><td>Desembre</td>	<td>Té 31 dies.</td></tr>
			</table>
		</div>
	</div>

	<div class="box-body pad table-responsive">
		<p>Various types of buttons. Using the base class</p>
		<div class="col-md-3">
			<a href="/practicainicio/14"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/mesos-any.blade.php ENDPATH**/ ?>