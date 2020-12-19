

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.B1_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.B1_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.B1_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.B1_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-lg-6 justify-content-center align-items-stretch" data-aos="fade-right">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-7412986561454436"
				     data-ad-slot="6463281785"
				     data-ad-format="auto"
				     data-full-width-responsive="true">
				</ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({})</script>
            </div>
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
				<p><?php echo trans('examenes.B1_texto1'); ?></p>
				<p><?php echo e(trans('examenes.B1_texto2')); ?></p>
				<p><?php echo trans('examenes.B1_texto3'); ?></p>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="row content h-100">
		<div class="col-md-4 pt-5 order-2 centraimg">
			<img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_b1.svg" width="300px" title="<?php echo e(trans('examenes.B1_imgtitle100')); ?>" alt="<?php echo e(trans('examenes.B1_imgalt100')); ?>">
		</div>
		<div class="col-md-8 pt-5 order-1">
			<h2><?php echo e(trans('examenes.B1_titulo100')); ?></h2>
			<p><?php echo trans('examenes.B1_texto101'); ?></p>
			<p><?php echo e(trans('examenes.B1_texto102')); ?></p>
			<p><?php echo e(trans('examenes.B1_texto103')); ?> <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" rel="nofollow" target="_blank"><?php echo e(trans('examenes.B1_texto104')); ?></a></p>
		</div>
	</div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examen_b1.blade.php ENDPATH**/ ?>