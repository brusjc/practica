

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('ortografia.byv_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('ortografia.byv_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('ortografia.byv_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('ortografia.byv_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 pt-5 order-2 centraimg">
	           <img class="img-fluid" src="/img/practicav/ortografia/b.svg" width="250px" title="<?php echo e(trans('ortografia.byv_imgtitle20')); ?>" alt="<?php echo e(trans('ortografia.byv_imgalt20')); ?>">
	        </div>
	        <div class="col-md-8 pt-5 order-2">
	            <h2><?php echo e(trans('ortografia.byv_titulo20')); ?></h2>
				<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.byv_titulo20')); ?>">
					<thead>
						<tr>
						<th><?php echo e(trans('ortografia.byv_titulo1')); ?></th>
						<th><?php echo e(trans('ortografia.byv_titulo3')); ?></th>
					</tr>
					</thead>
					<tr>
						<td><?php echo e(trans('ortografia.byv_texto20')); ?></td>
						<td><?php echo e(trans('ortografia.byv_texto21')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('ortografia.byv_texto22')); ?></td>
						<td><?php echo e(trans('ortografia.byv_texto23')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('ortografia.byv_texto24')); ?></td>
						<td><?php echo e(trans('ortografia.byv_texto25')); ?></td>
					</tr>
				</table>
				<p><?php echo e(trans('ortografia.byv_titulo4')); ?>: <?php echo e(trans('ortografia.byv_texto26')); ?></p> 
            </div>
        </div>
	</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 pt-5 order-2 centraimg">
	           <img class="img-fluid" src="/img/practicav/ortografia/v.svg" width="250px" title="<?php echo e(trans('ortografia.byv_imgtitle40')); ?>" alt="<?php echo e(trans('ortografia.byv_imgalt40')); ?>">
	        </div>
	        <div class="col-md-8 pt-5 order-1">
	            <h2><?php echo e(trans('ortografia.byv_titulo40')); ?></h2>
				<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.byv_titulo40')); ?>">
					<thead>
						<tr>
						<th><?php echo e(trans('ortografia.byv_titulo1')); ?></th>
						<th><?php echo e(trans('ortografia.byv_titulo3')); ?></th>
					</tr>
					</thead>
					<tr>
						<td><?php echo e(trans('ortografia.byv_texto40')); ?></td>
						<td><?php echo e(trans('ortografia.byv_texto41')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('ortografia.byv_texto42')); ?></td>
						<td><?php echo e(trans('ortografia.byv_texto43')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('ortografia.byv_texto44')); ?></td>
						<td><?php echo e(trans('ortografia.byv_texto45')); ?></td>
					</tr>
				</table>
				<p><?php echo e(trans('ortografia.byv_titulo4')); ?>: <?php echo e(trans('ortografia.byv_texto46')); ?></p> 
	        </div>
	    </div>
    </div>
</section>

<section>
    <div class="container-fluid mt-5">
        <div class="row content ml-2 mr-2">
         	<p><?php echo e(trans('ortografia.byv_texto60')); ?></p> 
        </div>
	</div>
</section>


<div class="row mt-5 mb-5">
	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/13"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</div>

<?php echo $__env->make('paginas.ortografia.comunes.enlaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/byv.blade.php ENDPATH**/ ?>