<div class="row mt-5">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h2><?php echo e(trans('esexamenes.A2_titulo300')); ?></h2>
                <div class="text-left">
                    <?php if(Auth::guest()): ?>
                        <?php echo e(trans('message.solo usuarios registrados')); ?>

                    <?php endif; ?>
                </div>
                <div class="text-right">
                    <?php if(Auth::guest()): ?>
                        <a class="mb-2 btn btn-info" href="/login"><?php echo e(trans('message.login')); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th><?php echo e(trans('esexamenes.Examen')); ?></th>
                        <th><?php echo e(trans('esexamenes.Fecha')); ?></th>
                        <th><?php echo e(trans('esexamenes.Progreso')); ?></th>
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
                                            <td><a href="exameninicio/<?php echo e($examen['id']); ?>"><?php echo e(date('d-m-Y', strtotime($examen['created_at']))); ?></a></td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger">
                                                        <?php echo e($examen['porcentaje']); ?>%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-red"><?php echo e($examen['porcentaje']); ?>%</span></td>
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
<?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/es/examenes/comunes/pruebas_examenes.blade.php ENDPATH**/ ?>