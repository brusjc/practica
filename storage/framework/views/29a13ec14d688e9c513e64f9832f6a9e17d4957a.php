<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Prácticas del usuario de cos-huma</h2>
                <div class="text-left">
                    <?php if(Auth::guest()): ?>
                        <?php echo e(trans('message.solo usuarios registrados')); ?>

                    <?php endif; ?>
                </div>
                <div class="text-right">
                    <?php if(!Auth::guest()): ?>
                        <a href="/examennuevo/1">
                          <button type="button" class="btn btn-primary"><?php echo e(trans('message.examen_nuevo')); ?></button>
                       </a>
                    <?php else: ?>
                        <a class="mb-2 btn btn-info" href="/login"><?php echo e(trans('message.login')); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Fecha</th>
                        <th><?php echo e(trans('examenes.Progreso')); ?></th>
                        <th>Nota</th>
                    </tr>
                    <?php if(!Auth::guest()): ?>
                        <?php if($datos['original']['status']['error']==0): ?>
                            <?php $__currentLoopData = $datos['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $practica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(date('d-m-Y', strtotime($practica['created_at']))); ?></td>
                                    <td><?php echo e($practica['contestadas']); ?>/10</td>
                                    <?php if($practica['nota']>=5): ?>
                                        <td class="text-success"><?php echo e($practica['nota']); ?></td>
                                    <?php else: ?>
                                        <td class="text-danger"><?php echo e($practica['nota']); ?></td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/pruebas/practicas.blade.php ENDPATH**/ ?>