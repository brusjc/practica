

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('vahome.home_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('vahome.home_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('vahome.home_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('vahome.home_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section id="about" class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-7 justify-content-center align-items-stretch" data-aos="fade-right">
                <img class="img-fluid " src="/img/practicav/graduacion300.svg" title="<?php echo e(trans('vahome.home_imgtitle1')); ?>" alt="<?php echo e(trans('vahome.home_imgalt1')); ?>">
            </div>
            <div class="col-xl-6 col-lg-5 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                <p><?php echo e(trans('vahome.home_texto1')); ?></p>
                <p><?php echo e(trans('vahome.home_texto2')); ?></p>
                <p><?php echo e(trans('vahome.home_texto3')); ?></p>
            </div>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="/img/practicav/propuestacurso.svg" class="img-fluid" title="<?php echo e(trans('vahome.home_imgtitle2')); ?>" alt="<?php echo e(trans('vahome.home_imgalt2')); ?>">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h2><?php echo e(trans('vahome.home_titulo2')); ?></h2>
            <p><?php echo e(trans('vahome.home_texto4')); ?></p>
            <p><?php echo e(trans('vahome.home_texto5')); ?></p>
            <p><?php echo e(trans('vahome.home_texto6')); ?></p>
        </div>
    </div>
</section>

<section id="pricing" class="pricing mt-5">
    <div class="container">
        <h2><?php echo e(trans('vahome.home_titulo1')); ?></h2>
        <div class="row" data-aos="fade-left">
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <span class="advanced">JQCV</span>
                    <h3><a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenes-jqcv"><?php echo e(html_entity_decode(trans('vahome.home_titulo7') )); ?></a></h3>
                    <p><a class="mb-2 btn btn-block btn-info" href="/examenes-jqcv"><?php echo e(html_entity_decode(trans('vahome.home_texto7') )); ?></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <h3><a class="mb-2 btn btn-block btn-info font-weight-bold" href="/vocabulario"><?php echo e(html_entity_decode(trans('vahome.home_titulo8') )); ?></a></h3>
                    <p><a class="mb-2 btn btn-block btn-info" href="/vocabulario"><?php echo e(html_entity_decode(trans('vahome.home_texto8') )); ?></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <h3><a class="mb-2 btn btn-block btn-info font-weight-bold" href="/ortografia"><?php echo e(html_entity_decode(trans('vahome.home_titulo9') )); ?></a></h3>
                    <p><a class="mb-2 btn btn-block btn-info" href="/ortografia"><?php echo e(html_entity_decode(trans('vahome.home_texto9') )); ?></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <h3><a class="mb-2 btn btn-block btn-info font-weight-bold" href="/dictats"><?php echo e(html_entity_decode(trans('vahome.home_titulo10') )); ?></a></h3>
                    <p><a class="mb-2 btn btn-block btn-info" href="/dictats"><?php echo e(html_entity_decode(trans('vahome.home_texto10') )); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="counts" class="counts">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">10</span>
                    <p><?php echo e(trans('vahome.home_titulo20')); ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="icofont-document-folder"></i>
                    <span data-toggle="counter-up">5</span>
                    <p><?php echo e(trans('vahome.home_titulo21')); ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="icofont-live-support"></i>
                    <span data-toggle="counter-up">40</span>
                    <p><?php echo e(trans('vahome.home_titulo22')); ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="icofont-users-alt-5"></i>
                    <span data-toggle="counter-up">218</span>
                    <p><?php echo e(trans('vahome.home_titulo23')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.vafrontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/va/home.blade.php ENDPATH**/ ?>