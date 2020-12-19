

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('esexamenes.exaSuperior_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('esexamenes.exaSuperior_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/es/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?><a href="<?php echo e(session('BC3')); ?>"><?php echo e(session('BC3texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('esexamenes.exaSuperior_descripcion1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('esexamenes.exaSuperior_descripcion2')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('esexamenes.exaSuperior_descripcion3')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('esexamenes.exaSuperior_descripcion4')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('esexamenes.exaSuperior_keywords1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('esexamenes.exaSuperior_keywords2')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             <?php echo $__env->make('paginas.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-8 pt-5 order-2">
            <p><?php echo trans('esexamenes.exaSuperior_texto1'); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo trans('esexamenes.exaSuperior_texto2'); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo trans('esexamenes.exaSuperior_texto3'); ?></p>
            <p><?php echo trans('esexamenes.exaSuperior_texto4'); ?></p>
            <p><?php echo trans('esexamenes.exaSuperior_texto5'); ?></p>
        </div>
    </div>
</section>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-2 centraimg">
            <img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_superior.svg" width="300px" title="<?php echo e(trans('esexamenes.exaSuperior_imgtitle100')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?>" alt="<?php echo e(trans('esexamenes.exaSuperior_imgalt100')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?>">
        </div>
        <div class="col-md-8 pt-5 order-1">
            <h2><?php echo e(trans('esexamenes.exaSuperior_titulo100')); ?> <?php echo e($datos['mes']); ?> <?php echo e(trans('esexamenes.exaSuperior_titulo101')); ?> <?php echo e($datos['ano']); ?></h2>
            <p><?php echo trans('esexamenes.exaSuperior_texto101'); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo trans('esexamenes.exaSuperior_texto102'); ?></p>
            <p><?php echo e(trans('esexamenes.exaSuperior_texto103')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('esexamenes.exaSuperior_texto104')); ?></p>
        </div>
    </div>
</section>

<section>
    <div class="row content mt-5 mb-5">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2><?php echo e(trans('esexamenes.exaSuperior_titulo200')); ?> <?php echo e($datos['mes']); ?> <?php echo e(trans('esexamenes.exaSuperior_titulo101')); ?> <?php echo e($datos['ano']); ?></h2>
                    <div class="text-left">
                        <?php if(Auth::guest()): ?>
                            <?php echo e(trans('esmessage.solo usuarios registrados')); ?>

                        <?php endif; ?>
                    </div>
                    <div class="text-right">
                        <?php if(Auth::guest()): ?>
                            <a class="mb-2 btn btn-info" href="/login"><?php echo e(trans('esmessage.login')); ?></a>
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
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.esfrontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/es/examenes/examen-superior.blade.php ENDPATH**/ ?>