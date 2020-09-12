

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.byv_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('ortografia.byv_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/ortografia"><?php echo e(trans('ortografia.ortografia_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.byv_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('ortografia.byv_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
	<div class="col-6">
		<p><?php echo e(html_entity_decode(trans('ortografia.byv_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('ortografia.byv_texto2') )); ?></p>
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
				<h2 class="box-title"><?php echo e(trans('ortografia.byv_titulo2')); ?></h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.byv_titulo2')); ?>">
					<thead>
						<tr>
							<th>Escrivin B</th>
							<th>Example</th>
						</tr>
					</thead>
					<tr><td>Darrere de m</td>	<td>bomber</td></tr>
					<tr><td>Davant de l y r</td>	<td>semblar / arbre</td></tr>
					<tr><td>En paraules de la mateixa família en què la b alterna en la p</td>	<td>llop - lloba</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title"><?php echo e(trans('ortografia.byv_titulo3')); ?></h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.byv_titulo3')); ?>">
					<thead>
						<tr>	<th>Escrivin V</th>
								<th>Example</th>
						</tr>
					</thead>
					<tr><td>Darrere de n</td>	<td>convidar</td></tr>
					<tr><td>En les desinències de l’imperfet d’indicatiu dels verbs de la 1a conjugació.</td>	<td>ballava</td></tr>
					<tr><td>En les paraules de la mateixa família en què la u alterna amb la v.</td>	<td>blau - blava</td></tr>
				</table>
			</div>	
		</div>
	</div>
</div>

	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/14"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/byv.blade.php ENDPATH**/ ?>