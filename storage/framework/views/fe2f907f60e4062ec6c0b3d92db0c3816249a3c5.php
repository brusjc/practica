

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.partsDia_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('vocabulario.partsDia_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/vocabulario"><?php echo e(trans('vocabulario.vocabulario_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.parentesco_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('vocabulario.parentesco_keywords') )); ?>

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
				<h3 class="box-title">Parts del dia</h3>
			</div>

			<div class="box-body no-padding">
				<table class="table table-condensed" summary="tabla con las letras del abecedario, su nombre en valenciano y un ejemplo de cada una de ellas.">
					<tr><td>Dia (día)</td>					<td>Les hores de llum del sol</td></tr>
					<tr><td>Matinada (madrugada)</td>		<td>Abans de fer-se de dia</td></tr>
					<tr><td>Matí (mañana)</td>				<td>Des que es fa de dia fins les dotze (12:00h)</td></tr>
					<tr><td>Migdia (mediodía)</td>			<td>Les dotze (12:00h)</td></tr>
					<tr><td>Vesprada (tarde)</td>			<td>Deprés de migdia fins que s’amaga el sol</td></tr>
					<tr><td>Poqueta nit (anochecer)</td>	<td>Quan està amagant-se el sol</td></tr>
					<tr><td>Nit (noche)</td>				<td>Hores sense llum del sol</td></tr>
				</table>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/parts-del-dia.blade.php ENDPATH**/ ?>