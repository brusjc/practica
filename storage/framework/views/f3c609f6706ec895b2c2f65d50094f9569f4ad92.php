

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('ortografia.contraccio_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('ortografia.contraccio_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('ortografia.contraccio_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('ortografia.contraccio_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 centraimg">
				<?php echo $__env->make('paginas.ortografia.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p><?php echo e(trans('ortografia.contraccio_texto1')); ?></p>
				<table class="table table-bordered" summary="tabla de <?php echo e(trans('ortografia.contraccio_titulo20')); ?>">
					<thead>
						<tr>
						<th><?php echo e(trans('ortografia.contraccio_titulo1')); ?></th>
						<th><?php echo e(trans('ortografia.contraccio_titulo2')); ?></th>
						<th><?php echo e(trans('ortografia.contraccio_titulo3')); ?></th>
						<th><?php echo e(trans('ortografia.contraccio_titulo4')); ?></th>
					</tr>
					</thead>
					<tr>
						<td><?php echo e(trans('ortografia.contraccio_texto2')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto3')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto4')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto5')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('ortografia.contraccio_texto6')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto7')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto8')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto9')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('ortografia.contraccio_texto10')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto11')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto12')); ?></td>
						<td><?php echo e(trans('ortografia.contraccio_texto13')); ?></td>
					</tr>
				</table>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-12 mb-5">
	            <h2><?php echo e(trans('ortografia.contraccio_titulo20')); ?></h2>
	            <br/>
	            <ol>
	            	<li><?php echo e(trans('ortografia.contraccio_texto20')); ?></li>
	            	<li><?php echo e(trans('ortografia.contraccio_texto21')); ?></li>
	            </ol>
	        </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <?php echo $__env->make("paginas.publi.examenes_bajo_introduccion_728x90", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>

<?php echo $__env->make('paginas.ortografia.comunes.enlaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/contraccio.blade.php ENDPATH**/ ?>