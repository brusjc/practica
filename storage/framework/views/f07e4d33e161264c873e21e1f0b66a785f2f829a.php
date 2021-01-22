

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('ortografia.vocalisme_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('ortografia.vocalisme_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('ortografia.vocalisme_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('ortografia.vocalisme_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1">
				<?php echo $__env->make('paginas.ortografia.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p><?php echo e(trans('ortografia.vocalisme_texto1')); ?></p>
				<p><?php echo e(trans('ortografia.vocalisme_texto2')); ?></p>
				<p><?php echo e(trans('ortografia.vocalisme_texto3')); ?></p>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-12">
	            <h2><?php echo e(trans('ortografia.vocalisme_titulo20')); ?></h2>
		        <div class="col-6">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.vocalisme_titulo20')); ?>">
						<thead>
							<tr>
							<th><?php echo e(trans('ortografia.vocalisme_titulo21')); ?></th>
							<th><?php echo e(trans('ortografia.vocalisme_titulo22')); ?></th>
							<th><?php echo e(trans('ortografia.vocalisme_titulo23')); ?></th>
						</tr>
						</thead>
						<tr>
							<td rowspan="2"><?php echo e(trans('ortografia.vocalisme_texto20')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto21')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto22')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.vocalisme_texto23')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto24')); ?></td>
						</tr>
						<tr>
							<td rowspan="2"><?php echo e(trans('ortografia.vocalisme_texto25')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto26')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto27')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.vocalisme_texto28')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto29')); ?></td>
						</tr>
						<tr>
							<td rowspan="2"><?php echo e(trans('ortografia.vocalisme_texto30')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto31')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto32')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('ortografia.vocalisme_texto33')); ?></td>
							<td><?php echo e(trans('ortografia.vocalisme_texto34')); ?></td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<?php echo $__env->make('paginas.ortografia.comunes.enlaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/vocalisme.blade.php ENDPATH**/ ?>