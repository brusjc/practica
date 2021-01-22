

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('vocabulario.diassemana_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('vocabulario.diassemana_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('vocabulario.parentesco_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('vocabulario.parentesco_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
				<?php echo $__env->make('paginas.vocabulario.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
				<table class="table table-bordered" summary="tabla de <?php echo e(trans('vocabulario.diassemana_titulo1')); ?>">
					<thead>
						<tr>
						<th><?php echo e(trans('vocabulario.diassemana_titulo2')); ?></th>
						<th><?php echo e(trans('vocabulario.diassemana_titulo3')); ?></th>
						<th><?php echo e(trans('vocabulario.diassemana_titulo4')); ?></th>
					</tr>
					</thead>
					<tr>
						<td><?php echo e(trans('vocabulario.diassemana_texto1')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto2')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto3')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('vocabulario.diassemana_texto4')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto5')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto6')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('vocabulario.diassemana_texto7')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto8')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto9')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('vocabulario.diassemana_texto10')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto11')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto12')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('vocabulario.diassemana_texto13')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto14')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto15')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('vocabulario.diassemana_texto16')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto17')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto18')); ?></td>
					</tr>
					<tr>
						<td><?php echo e(trans('vocabulario.diassemana_texto19')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto20')); ?></td>
						<td><?php echo e(trans('vocabulario.diassemana_texto21')); ?></td>
					</tr>
				</table>
            </div>
        </div>
	</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/dies-de-la-setmana.blade.php ENDPATH**/ ?>