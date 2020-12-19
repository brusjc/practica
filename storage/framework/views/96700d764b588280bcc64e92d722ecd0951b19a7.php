

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.oral_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.oral_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="/examenes-jqcv"><?php echo e(trans('examenes.jqcv_breadcrumb')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.oral_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.oral_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="comment-text">
	<p><?php echo e(trans('examenes.oral_texto1')); ?></p>
	<p><?php echo e(trans('examenes.oral_texto2')); ?></p>
	<p><?php echo trans('examenes.oral_texto3'); ?></p>
	<p><?php echo e(trans('examenes.oral_texto4')); ?></p>
</div>

<div class="row mt-5">
	<?php if($pruebas): ?>
		<?php if($pruebas['original']['status']['error']==0): ?>
			<?php $__currentLoopData = $pruebas['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-4">
					<a class="mb-2 btn btn-block btn-info" href="examen_oral/<?php echo e($nivel['codigo']); ?>"><?php echo e($nivel['nombre']); ?></a>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	<?php endif; ?>
</div>

<div class="row mt-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3>Nivel Oral - Probes usuario</h3>
				<?php if(Auth::guest()): ?>
					<?php echo e(trans('message.solo usuarios registrados')); ?>

				<?php endif; ?>
				<div class="pull-right">
					<?php if(Auth::guest()): ?>
						<a class="mb-2 btn btn-block btn-info" href="/login"><?php echo e(trans('message.login')); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th><?php echo e(trans('examenes.Examen')); ?></th>
						<th><?php echo e(trans('examenes.Fecha')); ?></th>
						<th><?php echo e(trans('examenes.Progress')); ?></th>
						<th style="width: 5%">%</th>
					</tr>
					<?php if(!Auth::guest()): ?>
						<?php if($pruebas): ?>
							<?php if($pruebas['original']['status']['error']==0): ?>
								<?php $__currentLoopData = $pruebas['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prueba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($prueba['nombre']); ?></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<?php $__currentLoopData = $prueba['examen']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td></td>
											<td>
												<a href="exameninicio/<?php echo e($examen['id']); ?>"><?php echo e(date('d-m-Y', strtotime($examen['created_at']))); ?></a>
											</td>
											<td>
												<div class="progress progress-xs">												<div class="progress-bar progress-bar-danger">
														<?php echo e($examen['porcentaje']); ?>%
													</div>
												</div>
											</td>
											<td>
												<span class="badge bg-red"><?php echo e($examen['porcentaje']); ?>%</span>
											</td>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examenoral.blade.php ENDPATH**/ ?>