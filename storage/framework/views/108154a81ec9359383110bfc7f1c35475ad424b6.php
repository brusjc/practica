

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('dictats.dictat200906mv_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('dictats.dictat200906mv_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="/<?php echo e(session('lang')); ?>/dictats"><?php echo e(trans('dictats.dictats_breadcrumb')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(trans('dictats.dictat200906mv_breadcrumb')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('dictats.dictat200906mv_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('dictats.dictat200906mv_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg" data-aos="fade-left">
			<?php echo $__env->make('paginas.dictats.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
			<p><?php echo e(trans('dictats.dictat200906mv_texto11')); ?></p>
			<ul>
				<li><?php echo e(trans('dictats.dictat200906mv_texto12')); ?></li>
				<li><?php echo e(trans('dictats.dictat200906mv_texto13')); ?></li>
				<li><?php echo e(trans('dictats.dictat200906mv_texto14')); ?></li>
			</ul>
        </div>
    </div>
</section>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg" data-aos="fade-left">
           <img class="img-fluid " src="/img/practicav/examenes/bocadillomitja.svg" width="250px" title="<?php echo e(trans('dictats.dictats_imgtitle2')); ?>" alt="<?php echo e(trans('dictats.dictats_imgalt2')); ?>">
        </div>
        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-right">
			<h2><?php echo e(trans('dictats.dictat200906mv_titulo1')); ?></h2>
			<p><?php echo e(trans('dictats.dictat200906mv_texto21')); ?></p>
			<ol>
				<li><?php echo e(trans('dictats.dictat200906mv_texto22')); ?></li>
				<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
				<li><?php echo e(trans('dictats.dictat200906mv_texto23')); ?></li>
				<audio src="/sonido/dictados/dictados200906mmp.mp3" preload="none" controls></audio>
				<li><?php echo e(trans('dictats.dictat200906mv_texto24')); ?></li>
				<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
			</ol>
        </div>
    </div>
</section>

<section>
    <div class="row content">
        <div class="col-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
			<p><?php echo e(trans('dictats.dictat200906mv_texto31')); ?></p>
			<p><?php echo e(trans('dictats.dictat200906mv_texto32')); ?></p>
        </div>
    </div>
</section>

<section id="about" class="about">
    <div class="container-fluid">
	    <div class="row content counts">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="box box-info">
					<h2><?php echo e(trans('dictats.dictat200906mv_titulo3')); ?></h2>
					<form action='<?php echo e(action("DictatController@comprovaDictat")); ?>' method="POST" class="form-horizontal mb-10">
						<?php echo e(csrf_field()); ?>


						<input type="hidden" name="_method" value="PUT">

						<div class="box-body">
							<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-body">
										<div class="form-group">
						                  <textarea class="form-control" id="textoalumno" name="textoalumno" rows="5" placeholder="<?php echo e(trans('dictats.dictat200906mv_texto41')); ?>"></textarea>
						                </div>
									</div>
								</div>
							</div>						
						</div>

						<input id="dictado_id" type="hidden" name="dictado_id" value="1">
						<div class="box-footer row invoice-info">
							<div class="col-sm-6 invoice-col">
								<button type="submit" class="btn btn-info pull-right"><?php echo e(ucfirst(trans('general.aceptar'))); ?></button>
							</div>
							<div class="col-sm-6 invoice-col">
								<a href="/dictats"><?php echo e(ucfirst(trans('general.volver'))); ?></button></a>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/dictats/dictat200906mv.blade.php ENDPATH**/ ?>