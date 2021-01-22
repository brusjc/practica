

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('ortografia.dieresis_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('ortografia.dieresis_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('ortografia.dieresis_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('ortografia.dieresis_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1">
				<?php echo $__env->make('paginas.ortografia.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p><?php echo e(trans('ortografia.dieresis_texto1')); ?></p>
	            <h2><?php echo e(trans('ortografia.dieresis_titulo1')); ?></h2>
	            <div class="col-md-6">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.dieresis_titulo20')); ?>">
						<thead>
							<tr>
							<th><?php echo e(trans('ortografia.dieresis_titulo2')); ?></th>
							<th><?php echo e(trans('ortografia.dieresis_titulo3')); ?></th>
						</tr>
						</thead>
						<tr>
							<td><?php echo e(trans('ortografia.dieresis_texto2')); ?></td>
							<td><?php echo e(trans('ortografia.dieresis_texto3')); ?></td>
						</tr>
					</table>
				</div>
	        </div>
        </div>
    </div>
</section>


<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-4 col-lg-5 order-2 centraimg">
	           <img class="img-fluid" src="/img/practicav/ortografia/dieresis-i-u.svg" width="250px" title="<?php echo e(trans('ortografia.dieresis_imgtitle20')); ?>" alt="<?php echo e(trans('ortografia.dieresis_imgalt20')); ?>">
	        </div>
	        <div class="col-xl-8 col-lg-7 order-1">
	            <h2><?php echo e(trans('ortografia.dieresis_titulo20')); ?></h2>
	            <ol>
					<li><?php echo e(trans('ortografia.dieresis_texto20')); ?>

						<ul>
							<li><i><?php echo e(trans('ortografia.dieresis_texto21')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto22')); ?></i></li>
						</ul>
					</li>
					<li><?php echo e(trans('ortografia.dieresis_texto23')); ?>

						<ul>
							<li><i><?php echo e(trans('ortografia.dieresis_texto24')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto25')); ?></i></li>
						</ul>
					</li>
					<li><?php echo e(trans('ortografia.dieresis_texto26')); ?>

						<ul>
							<li><i><?php echo e(trans('ortografia.dieresis_texto27')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto28')); ?></i></li>
						</ul>
					</li>
				</ol>
            </div>
        </div>
	</div>
</section>


<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-4 col-lg-5 centraimg" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/ortografia/dieresis-tecla-i-u.svg" width="300px" title="<?php echo e(trans('ortografia.dieresis_imgtitle40')); ?>" alt="<?php echo e(trans('ortografia.dieresis_imgalt40')); ?>">
	        </div>
	        <div class="col-xl-8 col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
	            <h2><?php echo e(trans('ortografia.dieresis_titulo40')); ?></h2>
	            <ol>
					<li><?php echo e(trans('ortografia.dieresis_texto40')); ?>

						<ul>
							<li><i><?php echo e(trans('ortografia.dieresis_texto41')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto42')); ?></i></li>
						</ul>
					</li>
					<li><?php echo e(trans('ortografia.dieresis_texto43')); ?>

						<ul>
							<li><i><?php echo e(trans('ortografia.dieresis_texto44')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto45')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto46')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto47')); ?></i></li>
						</ul>
					</li>
					<li><?php echo e(trans('ortografia.dieresis_texto48')); ?>

						<ul>
							<li><i><?php echo e(trans('ortografia.dieresis_texto49')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto50')); ?></i></li>
						</ul>
					</li>
					<li><?php echo e(trans('ortografia.dieresis_texto51')); ?>

						<ul>
							<li><i><?php echo e(trans('ortografia.dieresis_texto52')); ?></i></li>
							<li><i><?php echo e(trans('ortografia.dieresis_texto53')); ?></i></li>
						</ul>
					</li>
				</ol>
            </div>
        </div>
	</div>
</section>

<section class="container justify my-5">
    <div class="container-fluid center">
		<a href="/practicainicio/8"><button type="button" class="btn btn-primary btn-lg">Practica</button></a>
	</div>
</section>

<?php echo $__env->make('paginas.ortografia.comunes.enlaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/dieresis.blade.php ENDPATH**/ ?>