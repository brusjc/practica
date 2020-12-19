

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('vocabulario.meses_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('vocabulario.meses_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('vocabulario.parentesco_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('vocabulario.parentesco_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
				<?php echo $__env->make('paginas.vocabulario.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	        <div class="col-md-6 pt-5 order-1">
				<p><?php echo e(trans('vocabulario.meses_texto1')); ?></p>
				<p><?php echo e(trans('vocabulario.meses_texto2')); ?></p>
				<p><?php echo e(trans('vocabulario.meses_texto3')); ?></p>
				<p><?php echo e(trans('vocabulario.meses_texto4')); ?></p>
				<p><?php echo e(trans('vocabulario.meses_texto5')); ?></p>
	        </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/mesos-any.svg" width="300px" title="<?php echo e(trans('vocabulario.meses_imgtitle20')); ?>" alt="<?php echo e(trans('vocabulario.meses_imgalt20')); ?>">
	        </div>
	        <div class="col-md-8 pt-5 order-2">
	            <h2><?php echo e(trans('vocabulario.meses_titulo20')); ?></h2>
	        	<div class="col-9">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('vocabulario.meses_titulo20')); ?>">
						<thead>
							<th><?php echo e(trans('vocabulario.meses_titulo21')); ?></th>
							<th><?php echo e(trans('vocabulario.meses_titulo22')); ?></th>
						</thead>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto20')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto21')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto22')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto23')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto24')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto25')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto26')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto27')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto28')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto29')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto30')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto31')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto32')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto33')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto34')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto35')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto36')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto37')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto38')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto39')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto40')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto41')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.meses_texto42')); ?></td>
							<td><?php echo e(trans('vocabulario.meses_texto43')); ?></td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<div class="row mt-5 mb-5">
	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/5"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/mesos-any.blade.php ENDPATH**/ ?>