

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('ortografia.diptongos_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('ortografia.diptongos_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('ortografia.diptongos_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('ortografia.diptongos_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1">
				<?php echo $__env->make('paginas.ortografia.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p><?php echo e(trans('ortografia.diptongos_texto1')); ?></p>
	            <h2><?php echo e(trans('ortografia.diptongos_titulo1')); ?></h2>
				<p><?php echo e(trans('ortografia.diptongos_texto2')); ?></p>
				<div class="col-6">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.diptongos_titulo1')); ?>">
						<thead>
							<tr>
							<th colspan="2"><?php echo e(trans('ortografia.diptongos_titulo2')); ?></th>
						</tr>
						</thead>
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto3')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto4')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto5')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto6')); ?></td>
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
	        </div>
	        <div class="col-xl-8 col-lg-7 order-1">
	            <h2><?php echo e(trans('ortografia.diptongos_titulo20')); ?></h2>
				<p><?php echo e(trans('ortografia.diptongos_texto20')); ?></p>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-4 col-lg-5 centraimg" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/ortografia/diptongo-creciente.gif" width="300px" title="<?php echo e(trans('ortografia.diptongos_imgtitle40')); ?>" alt="<?php echo e(trans('ortografia.diptongos_imgalt40')); ?>">
	        </div>
	        <div class="col-xl-8 col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">

	            <h3><?php echo e(trans('ortografia.diptongos_titulo40')); ?></h3>
				<p><?php echo e(trans('ortografia.diptongos_texto40')); ?></p>
				<p><?php echo e(trans('ortografia.diptongos_texto41')); ?></p>
				<p><?php echo e(trans('ortografia.diptongos_texto42')); ?></p>
	            <h4><?php echo e(trans('ortografia.diptongos_titulo41')); ?></h4>
				<p><?php echo e(trans('ortografia.diptongos_texto43')); ?></p>
				<div class="col-5">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.diptongos_titulo20')); ?>">
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto44')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto45')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto46')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto47')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto48')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto49')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto50')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto51')); ?></td>
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
            <div class="col-xl-4 col-lg-5 centraimg" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/ortografia/diptongo-decreciente.gif" width="300px" title="<?php echo e(trans('ortografia.diptongos_imgtitle60')); ?>" alt="<?php echo e(trans('ortografia.diptongos_imgalt60')); ?>">
	        </div>
	        <div class="col-xl-8 col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">

	            <h3><?php echo e(trans('ortografia.diptongos_titulo60')); ?></h3>
				<p><?php echo e(trans('ortografia.diptongos_texto60')); ?></p>
				<p><?php echo e(trans('ortografia.diptongos_texto61')); ?></p>
	            <h4><?php echo e(trans('ortografia.diptongos_titulo61')); ?></h4>
				<p><?php echo e(trans('ortografia.diptongos_texto62')); ?></p>
				<div class="col-5">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.diptongos_titulo20')); ?>">
						<thead>
							<tr>
								<th><?php echo e(trans('ortografia.diptongos_titulo62')); ?></th>
								<th><?php echo e(trans('ortografia.diptongos_titulo63')); ?></th>
							</tr>
						</thead>
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto63')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto64')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto65')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto66')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.diptongos_texto67')); ?></td>
							<td><?php echo e(trans('ortografia.diptongos_texto68')); ?></td>
						</tr>
						<tr>
							<td></td>
							<td><?php echo e(trans('ortografia.diptongos_texto69')); ?></td>
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
            <div class="col-12">
				<p><?php echo e(trans('ortografia.diptongos_texto80')); ?></p>
			</div>
        </div>
	</div>
</section>

<?php echo $__env->make('paginas.ortografia.comunes.enlaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/diptong.blade.php ENDPATH**/ ?>