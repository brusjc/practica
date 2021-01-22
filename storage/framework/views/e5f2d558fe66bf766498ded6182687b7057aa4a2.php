

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('home.home_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('home.home_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('home.home_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('home.home_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5" data-aos="fade-right">
                    <img class="img-fluid " src="/img/practicav/graduacion300.svg" title="<?php echo e(trans('home.home_imgtitle1')); ?>" alt="<?php echo e(trans('home.home_imgalt1')); ?>">
                </div>
                <div class="col-md-7" data-aos="fade-left">
                    <p><?php echo e(trans('home.home_texto1')); ?></p>
                    <p><?php echo e(trans('home.home_texto2')); ?></p>
                    <p><?php echo e(trans('home.home_texto3')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-md-7" data-aos="fade-up">
                <h2><?php echo e(trans('home.home_titulo2')); ?></h2>
                <p><?php echo e(trans('home.home_texto4')); ?></p>
                <p><?php echo e(trans('home.home_texto5')); ?></p>
                <p><?php echo e(trans('home.home_texto6')); ?></p>
            </div>
            <div class="col-md-5" data-aos="fade-left">
                <img src="/img/practicav/propuestacurso.svg" class="img-fluid" title="<?php echo e(trans('home.home_imgtitle2')); ?>" alt="<?php echo e(trans('home.home_imgalt2')); ?>">
            </div>
        </div>
    </div>
</section>

<section class="container justify my-5">
    <div class="container-fluid">
        <div class="row">
            <h2><?php echo e(trans('home.home_titulo1')); ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/examenes-jqcv">
                        <div class="service-icon center"><i class="fa fa-graduation-cap"></i></div>
                        <h3 class="center"><?php echo e(trans('home.home_titulo7')); ?></h3>
                        <p class="center"><?php echo e(trans('home.home_texto7')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/vocabulario">
                        <div class="service-icon center"><i class="fa fa-font"></i></div>
                        <h3 class="center"><?php echo e(trans('home.home_titulo8')); ?></h3>
                        <p class="center"><?php echo e(trans('home.home_texto8')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/ortografia">
                        <div class="service-icon center"><i class="fa fa-book"></i></div>
                        <h3 class="center"><?php echo e(trans('home.home_titulo9')); ?></h3>
                        <p class="center"><?php echo e(trans('home.home_texto9')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/dictats">
                        <div class="service-icon center"><i class="fa fa-play"></i></div>
                        <h3 class="center"><?php echo e(trans('home.home_titulo10')); ?></h3>
                        <p class="center"><?php echo e(trans('home.home_texto10')); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/home.blade.php ENDPATH**/ ?>