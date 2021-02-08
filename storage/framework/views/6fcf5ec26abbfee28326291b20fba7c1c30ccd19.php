

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('message.informacion_examen_master')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('message.informacion_examen_master')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="/es/master"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>"Todos los examenes"<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>"Examenes"<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
	<h3><?php echo e($miprueba['original']['data'][0]['prueba']['nombre']); ?> - <?php echo e($miprueba['original']['data'][0]['prueba']['codigo']); ?></h3>
	<div class="row">
		<div class="col-8">
			<div class="card">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
	                    <tr>
	                        <th style="width: 8%">Área</th>
	                        <th style="width: 62%">Subarea</th>
	                        <th style="width: 5%">Verificado</th>
	                        <th><a href="/es/master">Go Back</button></a></th>
	                    </tr>
						<?php if(!is_null($miprueba['original']['data'])): ?>
							<?php $__currentLoopData = $miprueba['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1=>$area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						        <tr>
						            <td colspan="2"><h4><?php echo e($area['temanombre']['nombre']); ?></h4></td>
						            <td>
						            	<?php if($area['verificado']==null): ?>
						            		<i class="fa fa-exclamation-circle"></i>
						            	<?php elseif($area['verificado']==1): ?>
											<i class="fa fa-check text-lime"></i>
										<?php else: ?>
						            		<i class="fa fa-times text-red"></i>
						            	<?php endif; ?>
						            </td>
						            <td></td>
						        </tr>
								<?php $__currentLoopData = $area['subtema']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=>$subarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							        <tr>
							            <td></td>
							            <td><a href="/masterVerificador/<?php echo e($subarea['id']); ?>"><?php echo e($area['subtemanombre'][$key2]['nombre']); ?></a></td>
						            <td>
						            	<?php if($subarea['verificado']==null): ?>
						            		<i class="fa fa-exclamation-circle"></i>
						            	<?php elseif($subarea['verificado']==1): ?>
											<i class="fa fa-check text-lime"></i>
										<?php else: ?>
						            		<i class="fa fa-times text-red"></i>
						            	<?php endif; ?>
						            </td>
							            <td></td>
							        </tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
						<?php endif; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.frontAdmin.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/master/MasterTemas.blade.php ENDPATH**/ ?>