

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('ortografia.ortografia_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('ortografia.ortografia_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><?php echo e(session('BC1texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('ortografia.ortografia_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('ortografia.ortografia_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-5 col-lg-6 justify-content-center align-items-stretch" data-aos="fade-right">
				<?php echo $__env->make('paginas.ortografia.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
				<p><?php echo e(trans('ortografia.ortografia_texto1')); ?></p>
				<p><?php echo e(trans('ortografia.ortografia_texto2')); ?></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
			<h2><?php echo e(trans('ortografia.ortografia_titulo2')); ?></h2>
			<div class="row" data-aos="fade-left">
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
						<h3><a href="/<?php echo e(session('lang')); ?>/byv"><?php echo e(trans('ortografia.byv_breadcrumb')); ?></a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
						<h3><a href="/<?php echo e(session('lang')); ?>/acentuacion"><?php echo e(trans('ortografia.acentuacion_breadcrumb')); ?></a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
						<h3><a href="/<?php echo e(session('lang')); ?>/eio"><?php echo e(trans('ortografia.eio_breadcrumb')); ?></a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
						<h3><a href="/<?php echo e(session('lang')); ?>/dieresis"><?php echo e(trans('ortografia.dieresis_breadcrumb')); ?></a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
						<h3><a href="/<?php echo e(session('lang')); ?>/diftong"><?php echo e(trans('ortografia.diptongos_breadcrumb')); ?></a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
						<h3><a href="/<?php echo e(session('lang')); ?>/diacritic"><?php echo e(trans('ortografia.diacritic_breadcrumb')); ?></a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
						<h3><a href="/<?php echo e(session('lang')); ?>/apostrof"><?php echo e(trans('ortografia.apostrof_breadcrumb')); ?></a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
						<h3><a href="/<?php echo e(session('lang')); ?>/contraccio"><?php echo e(trans('ortografia.contraccio_breadcrumb')); ?></a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
						<h3><a href="/<?php echo e(session('lang')); ?>/vocalisme"><?php echo e(trans('ortografia.vocalisme_breadcrumb')); ?></a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/index.blade.php ENDPATH**/ ?>