

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictat200906mm_titulo1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictat200906mm_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/dictats"><?php echo e(trans('dictats.dictats_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictat200906mm_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictat200906mm_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
	<div class="col-7">
		<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto2') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto3') )); ?></p>
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
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto4') )); ?></p>
	<ul>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto5') )); ?></li>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto6') )); ?></li>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto7') )); ?></li>
	</ul>
</div>

<div class="comment-text">
	<h2><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_titulo1') )); ?></h2>
</div>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto8') )); ?></p>
	<ol>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto9') )); ?></li>
		<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto10') )); ?></li>
		<audio src="/sonido/dictados/dictados200906mmp.mp3" preload="none" controls></audio>
		<li><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto11') )); ?></li>
		<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
	</ol>
</div>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto12') )); ?></p>
	<p><?php echo e(html_entity_decode(trans('dictats.dictat200906mm_texto13') )); ?></p>
</div>

<h2>Comprueba tu dictado</h2>

<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<form action='<?php echo e(action("DictatController@comprovaDictat")); ?>' method="POST" class="form-horizontal">
				<?php echo e(csrf_field()); ?>


				<input type="hidden" name="_method" value="PUT">

				<div class="box-body">
					<div class="col-md-12">
						<div class="box box-solid">
							<div class="box-body">
								<div class="form-group">
				                  <textarea class="form-control" id="textoalumno" name="textoalumno" rows="3" placeholder="Escribe aqui el texto del dictado"></textarea>
				                </div>
							</div>
						</div>
					</div>						
				</div>

				<input id="dictado_id" type="hidden" name="dictado_id" value="1">
				<div class="box-footer row invoice-info">
					<div class="col-sm-6 invoice-col">
						<button type="submit" class="btn btn-info pull-right">Enviar</button>
					</div>
					<div class="col-sm-6 invoice-col">
						<a href="<?php echo e(session('BC4')); ?>">Go Back</button></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/dictats/dictat200906mm.blade.php ENDPATH**/ ?>