<section class="container justify mt-5">
    <div class="container-fluid">
        <h2 class="my-5 center"><?php echo e(trans('message.pueden_interesar')); ?></h2>
        <div class="row" data-aos="fade-left">
            <div class="col-lg-3 col-md-4">
                <div class="count-box">
                    <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                        <a href='/<?php echo e(session("lang")); ?>/<?php echo e($enlaces[1]["url"]); ?>'><img src='<?php echo e($enlaces[1]["imagen"]); ?>' class="ri-store-line" style="color: #ffbb2c;"></img></a>
                        <p class="mt-3"><a href='/<?php echo e(session("lang")); ?>/<?php echo e($enlaces[1]["url"]); ?>'><?php echo e($enlaces[1]["nombre"]); ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="count-box">
                    <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                        <a href='/<?php echo e(session("lang")); ?>/<?php echo e($enlaces[2]["url"]); ?>'><img src='<?php echo e($enlaces[2]["imagen"]); ?>' class="ri-store-line" style="color: #ffbb2c;"></img></a>
                        <p class="mt-3"><a href='/<?php echo e(session("lang")); ?>/<?php echo e($enlaces[2]["url"]); ?>'><?php echo e($enlaces[2]["nombre"]); ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="count-box">
                    <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                        <a href='/<?php echo e(session("lang")); ?>/<?php echo e($enlaces[3]["url"]); ?>'><img src='<?php echo e($enlaces[3]["imagen"]); ?>' class="ri-store-line" style="color: #ffbb2c;"></img></a>
                        <p class="mt-3"><a href='/<?php echo e(session("lang")); ?>/<?php echo e($enlaces[3]["url"]); ?>'><?php echo e($enlaces[3]["nombre"]); ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="count-box">
                    <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                        <a href='/<?php echo e(session("lang")); ?>/<?php echo e($enlaces[4]["url"]); ?>'><img src='<?php echo e($enlaces[4]["imagen"]); ?>' class="ri-store-line" style="color: #ffbb2c;"></img></a>
                        <p class="mt-3"><a href='/<?php echo e(session("lang")); ?>/<?php echo e($enlaces[4]["url"]); ?>'><?php echo e($enlaces[4]["nombre"]); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/ortografia/comunes/enlaces.blade.php ENDPATH**/ ?>