

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.B2_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.B2_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.B2_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.B2_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-1 centraimg">
                 <?php echo $__env->make('paginas.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-8 pt-5 order-2">
    			<p><?php echo trans('examenes.B2_texto1'); ?></p>
    			<p><?php echo e(trans('examenes.B2_texto2')); ?></p>
    			<p><?php echo trans('examenes.B2_texto3'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
    	<div class="row content h-100">
    		<div class="col-md-4 pt-5 order-2 centraimg">
    			<img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_b2.svg" width="300px" title="<?php echo e(trans('examenes.B2_imgtitle100')); ?>" alt="<?php echo e(trans('examenes.B2_imgalt100')); ?>">
    		</div>
    		<div class="col-md-8 pt-5 order-1">
    			<h2><?php echo e(trans('examenes.B2_titulo100')); ?></h2>
    			<p><?php echo trans('examenes.B2_texto101'); ?></p>
    			<p><?php echo e(trans('examenes.B2_texto102')); ?></p>
    		</div>
    	</div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <?php if($pruebas): ?>
            <h2><?php echo e(trans('examenes.B2_titulo200')); ?></h2>
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
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2><?php echo e(trans('examenes.B2_titulo300')); ?></h2>
                        <div class="text-left">
                            <?php if(Auth::guest()): ?>
                                <?php echo e(ucfirst(trans('message.solo usuarios registrados'))); ?>

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
                                <th><?php echo e(ucfirst(trans('examenes.examen'))); ?></th>
                                <th><?php echo e(ucfirst(trans('examenes.fecha'))); ?></th>
                                <th><?php echo e(ucfirst(trans('examenes.progreso'))); ?></th>
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
                                                    <td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e(date('d-m-Y', strtotime($examen['created_at']))); ?></a></td>
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
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examenes-b2.blade.php ENDPATH**/ ?>