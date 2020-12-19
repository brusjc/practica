<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2><?php echo e(trans('examenes.exaB1_titulo200')); ?> <?php echo e($datos['mes']); ?> <?php echo e(trans('examenes.exaB1_titulo101')); ?> <?php echo e($datos['ano']); ?></h2>
                <div class="text-left">
                    <?php if(Auth::guest()): ?>
                        <?php echo e(trans('message.solo usuarios registrados')); ?>

                    <?php endif; ?>
                </div>
                <div class="text-right">
                    <?php if(!Auth::guest()): ?>
                        <a href="/examennuevo/<?php echo e($codigo); ?>">
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
                        <th><?php echo e(trans('examenes.Examen')); ?></th>
                        <th><?php echo e(trans('examenes.Fecha')); ?></th>
                        <th><?php echo e(trans('examenes.Progreso')); ?></th>
                        <th style="width: 5%">%</th>
                    </tr>
                    <?php if(!Auth::guest()): ?>
                        <?php if($examenes['original']['status']['error']==0): ?>
                            <?php $__currentLoopData = $examenes['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e($examen['prueba']['nombre']); ?></a></td>
                                    <td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e(date('d-m-Y', strtotime($examen['created_at']))); ?></a></td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary" style="width: <?php echo e($examen['porcentaje']); ?>%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary"><?php echo e($examen['porcentaje']); ?>%</span></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/comunes/examen_examenes.blade.php ENDPATH**/ ?>