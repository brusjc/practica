<?php if($pruebas): ?>
    <h2><?php echo e(trans('examenes.A2_titulo200')); ?></h2>
    <div class="row content mt-5">
        <?php if($pruebas['original']['status']['error']==0): ?>
            <?php $__currentLoopData = $pruebas['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4">
                    <a class="mb-2 btn btn-block btn-info pt-3 pb-3 mb-4" href="<?php echo e($miurl); ?>/<?php echo e($nivel['codigo']); ?>"><?php echo e($nivel['nombre']); ?></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/comunes/examenes_pruebas.blade.php ENDPATH**/ ?>