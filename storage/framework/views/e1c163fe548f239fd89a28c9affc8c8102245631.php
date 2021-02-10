

<?php $__env->startSection('contentheader_title'); ?>Estructura del <?php echo e($examen['prueba']['nombre']); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>Estructura del <?php echo e($examen['prueba']['nombre']); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?><a href="<?php echo e(session('BC3')); ?>"><?php echo e(session('BC3texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>"Realizando un examen"<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>"Realizando examen"<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <?php echo $__env->make("paginas.publi.examenes_bajo_introduccion_728x90", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>

<?php if(isset($message)): ?>
    <section class="container justify">
        <div class="container-fluid">
            <div class="alert alert-danger mt-5" role="alert">
                <div class="row mt-5">
                    <div class="col-md-2">
                        <i class="fa fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="col-md-8">
                        <?php echo e(trans('message.nouser')); ?>

                    </div>
                    <div class="col-md-2">
                        <a class="mb-2 btn btn-info" href="/login"><?php echo e(trans('message.login')); ?></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-9">
                <div class="card">
                    <div class="card-header  with-border">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 8%">Área</th>
                                <th style="width: 62%">Subarea</th>
                                <th style="width: 20%">% finalizado</th>
                                <th style="width: 10%">Contestadas</th>
                                <th style="width: 10%">Puntos</th>
                            </tr>	            		
        					<?php if(!is_null($examen)): ?>
                                <?php $__currentLoopData = $examen['area']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1=>$area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td colspan="2"><?php echo e($area['temanombre']['nombre']); ?></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-primary" style="width: <?php echo e($area['porcentaje']); ?>%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><?php echo e($area['contestadas']); ?>/<?php echo e($area['total']); ?></td>
                                        <td class="text-center"><?php echo e($area['nota']); ?></td>
                                    </tr>
                                    <?php $__currentLoopData = $area['subarea']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=>$subarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($id); ?></td>
                                            <?php if($subarea['contestadas']>=$subarea['total']): ?>
                                                <td><?php echo e($subarea['subtemanombre']['nombre']); ?></td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-primary" style="width: <?php echo e($subarea['porcentaje']); ?>%"> </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo e($subarea['contestadas']); ?>/<?php echo e($subarea['total']); ?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo e($subarea['nota']); ?>

                                                </td>
                                            <?php elseif($examen['prueba']['grado_id']==8 && $key1==0 && $key2==1): ?>
                                                <td>
                                                    <a href="/examenz/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['subtemanombre']['nombre']); ?></a>
                                                </td>
                                                <td>
                                                    <a href="/examenz/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-primary" style="width: <?php echo e($subarea['porcentaje']); ?>%"></div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examenz/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['contestadas']); ?>/<?php echo e($subarea['total']); ?></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examenz/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['nota']); ?></a>
                                                </td>
                                            <?php elseif($examen['prueba']['grado_id']==7 && $key1==0 && $key2==2): ?>
                                                <td>
                                                    <a href="/examenz/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['subtemanombre']['nombre']); ?></a>
                                                </td>
                                                <td>
                                                    <a href="/examenz/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-primary" style="width: <?php echo e($subarea['porcentaje']); ?>%"></div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examenz/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['contestadas']); ?>/<?php echo e($subarea['total']); ?></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examenz/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['nota']); ?></a>
                                                </td>
                                            <?php else: ?>
                                                <td>
                                                    <a href="/examen/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['subtemanombre']['nombre']); ?></a>
                                                </td>
                                                <td>
                                                    <a href="/examen/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-primary" style="width: <?php echo e($subarea['porcentaje']); ?>%"></div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examen/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['contestadas']); ?>/<?php echo e($subarea['total']); ?></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examen/<?php echo e($id); ?>/<?php echo e($subarea['id']); ?>"><?php echo e($subarea['nota']); ?></a>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-3">
            	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        		<!-- Adaptable Vertical -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-7412986561454436"
                    data-ad-slot="4155848498"
                    data-ad-format="auto"
                    data-full-width-responsive="true">
                </ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <?php echo $__env->make("paginas.publi.examenes_bajo_introduccion_728x90", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/exameninicio.blade.php ENDPATH**/ ?>