

<?php $__env->startSection('contentheader_title'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictats_title') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
	<?php echo e(html_entity_decode(trans('dictats.dictats_h1') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/dictats"><?php echo e(trans('dictats.dictats_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictats_descripcion') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    <?php echo e(html_entity_decode(trans('dictats.dictats_keywords') )); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
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
	<div class="col-6">
		<p><?php echo e(html_entity_decode(trans('dictats.dictats_texto1') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('dictats.dictats_texto2') )); ?></p>
		<p><?php echo e(html_entity_decode(trans('dictats.dictats_texto3') )); ?></p>
	<p><?php echo e(html_entity_decode(trans('dictats.dictats_texto4') )); ?></p>
	</div>
</div>

<div class="row">			
	<div class="col-lg-12 col-md-12">
		<div class="callout callout-info">
			<ul>
				<li><?php echo e(html_entity_decode(trans('dictats.dictats_texto5') )); ?></li>
				<li><?php echo e(html_entity_decode(trans('dictats.dictats_texto6') )); ?></li>
				<li><?php echo e(html_entity_decode(trans('dictats.dictats_texto7') )); ?></li>
			</ul>
		</div>
	</div>
</div>

<div class="comment-text">
	<h2><?php echo e(html_entity_decode(trans('dictats.dictats_titulo2') )); ?></h2>
</div>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictats_texto8') )); ?></p>
</div>

<div class="row">			
	<div class="col-lg-12 col-md-12">
		<div class="callout callout-info">
					<ol>
						<li><?php echo e(html_entity_decode(trans('dictats.dictats_texto9') )); ?></li>
						<li><?php echo e(html_entity_decode(trans('dictats.dictats_texto10') )); ?></li>
						<li><?php echo e(html_entity_decode(trans('dictats.dictats_texto11') )); ?></li>
					</ol>
		</div>
	</div>
</div>

<div class="comment-text">
	<p><?php echo e(html_entity_decode(trans('dictats.dictats_texto12') )); ?></p>
	<p><?php echo e(html_entity_decode(trans('dictats.dictats_texto13') )); ?></p>
</div>

<div class="row">			
	<div class="col-lg-12 col-md-12 mt-5">
		<h2><?php echo e(html_entity_decode(trans('dictats.dictats_titulo3') )); ?></h2>
	</div>
</div>


<div class="row mb-2">			
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="/dictat200906mm">Dictat examen juny 2009 mitjà matí</a>
	</div>				
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="/dictat200906mv">Dictat examen juny 2009 mitjà vesprada</a>
	</div>		
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="https://www.practicavalenciano.es/dictados/dictados200906sm.php">Dictat examen juny 2009 superior</a>
	</div>		
</div>	

<div class="row mb-2">			
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="https://www.practicavalenciano.es/dictados/dictados201006mm.php">Dictat examen juny 2010 mitjà matí</a>
	</div>				
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="https://www.practicavalenciano.es/dictados/dictados201006mv.php">Dictat examen juny 2010 mitjà vesprada</a>
	</div>		
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="https://www.practicavalenciano.es/dictados/dictados201006sm.php">Dictat examen juny 2010 superior</a>
	</div>		
</div>	

<div class="row mb-2">			
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="https://www.practicavalenciano.es/dictados/dictados201011mm.php">Dictat examen novembre 2010 mitjà matí</a>
	</div>				
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="https://www.practicavalenciano.es/dictados/dictados201111mm.php">Dictat examen novembre 2011 mitjà matí</a>
	</div>		
	<div class="col-lg-4 col-md-4">
		<a class="mb-2 btn btn-block btn-info" href="https://www.practicavalenciano.es/dictados/dictados201111mv.php">Dictat examen novembre 2011 mitjà vesprada</a>
	</div>		
</div>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/dictats/index.blade.php ENDPATH**/ ?>