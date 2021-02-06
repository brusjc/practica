

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('ortografia.eio_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('ortografia.eio_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('ortografia.eio_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('ortografia.eio_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1">
				<?php echo $__env->make('paginas.ortografia.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p><?php echo e(trans('ortografia.eio_texto1')); ?></p>
	            <h2><?php echo e(trans('ortografia.eio_titulo20')); ?></h2>
	            <ul>
		            <li><?php echo e(trans('ortografia.eio_texto20')); ?></li>
		            <li><?php echo e(trans('ortografia.eio_texto21')); ?></li>
		            <li><?php echo e(trans('ortografia.eio_texto22')); ?></li>
		            <li><?php echo e(trans('ortografia.eio_texto23')); ?></li>
		            <li><?php echo e(trans('ortografia.eio_texto24')); ?></li>
				</ul>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100 mb-5">
            <div class="col-md-5 pt-5 order-2 centraimg">
	           <img class="img-fluid" src="/img/practicav/ortografia/e-o-obertas.svg" width="250px" title="<?php echo e(trans('ortografia.eio_imgtitle40')); ?>" alt="<?php echo e(trans('ortografia.eio_imgalt40')); ?>">
	        </div>
	        <div class="col-md-7 pt-5 order-1">
	            <h2><?php echo e(trans('ortografia.eio_titulo40')); ?></h2>
	            <ul>
					<li><?php echo e(trans('ortografia.eio_texto40')); ?></li>
					<li><?php echo e(trans('ortografia.eio_texto41')); ?></li>
					<li><?php echo e(trans('ortografia.eio_texto42')); ?></li>
				</ul>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

<?php echo $__env->make('paginas.ortografia.comunes.enlaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/eio.blade.php ENDPATH**/ ?>