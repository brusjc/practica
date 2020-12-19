

<?php $__env->startSection('contentheader_title'); ?>Todos los exámenes@endsection

<?php $__env->startSection('descripcion'); ?>"Todos los examenes"<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>"Examenes"<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
                    <h3 class="box-title">Todos los exámenes ordenados por nivel</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Examen</th>
                            <th>Fecha</th>
                            <th>Código</th>
                            <th>Convocatoria</th>
                            <th>Verificado</th>
                        </tr>
                    	<?php if(!is_null($pruebas['original']['data'])): ?>
							<?php $__currentLoopData = $pruebas['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1=>$prueba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><a href="/temasmaster/<?php echo e($prueba['id']); ?>"><?php echo e($pruebas['original']['data'][$key1]['nombre']); ?></a></td>
									<td><a href="/temasmaster/<?php echo e($prueba['id']); ?>"><?php echo e($pruebas['original']['data'][$key1]['fecha']); ?></a></td>
									<td><a href="/temasmaster/<?php echo e($prueba['id']); ?>"><?php echo e($pruebas['original']['data'][$key1]['codigo']); ?></a></td>
                                    <td class="text-center">
                                        <?php if($prueba['convocatoria_id']==1): ?>
                                            Mañana 9h
                                        <?php elseif($prueba['convocatoria_id']==2): ?>
                                            Mañana 12h
                                        <?php else: ?>
                                            Tarde
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if($prueba['verificado']==null): ?>
                                            <i class="fa fa-exclamation-circle"></i>
                                        <?php elseif($prueba['verificado']==1): ?>
                                            <i class="fa fa-check text-lime"></i>
                                        <?php else: ?>
                                            <i class="fa fa-times text-red"></i>
                                        <?php endif; ?>
                                    </td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/master/MasterPruebas.blade.php ENDPATH**/ ?>