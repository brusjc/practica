

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('ortografia.ortografia_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('ortografia.ortografia_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><?php echo e(session('BC1texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('ortografia.ortografia_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('ortografia.ortografia_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
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

<section class="container justify my-5">
    <div class="container-fluid">
        <div class="row">
			<h2><?php echo e(trans('ortografia.ortografia_titulo2')); ?></h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/byv">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/byv-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.byv_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/acentuacion">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/acentuacion-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.acentuacion_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/eio">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/eyo-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.eio_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/dieresis">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/dieresis-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.dieresis_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/diptong">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/diptong-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.diptongos_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/diacritic">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/diacritic-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.diacritic_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/apostrof">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/apostrof-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.apostrof_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/contraccio">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/contraccio-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.contraccio_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/vocalisme">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/vocalisme-R.svg"/>
                        </div>
                        <br/>
                        <p class="center"><?php echo e(trans('ortografia.vocalisme_breadcrumb')); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('paginas.ortografia.comunes.enlaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/index.blade.php ENDPATH**/ ?>