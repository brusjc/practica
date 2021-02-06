

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('vocabulario.vocabulario_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('vocabulario.vocabulario_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><?php echo e(session('BC1texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('vocabulario.vocabulario_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('vocabulario.vocabulario_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
				<?php echo $__env->make('paginas.vocabulario.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
				<p><?php echo e(trans('vocabulario.vocabulario_texto1')); ?></p>
				<p><?php echo e(trans('vocabulario.vocabulario_texto2')); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
            <h2><?php echo e(trans('vocabulario.vocabulario_titulo2')); ?></h2>
			<p><?php echo e(trans('vocabulario.vocabulario_texto3')); ?></p>
			<p><?php echo e(trans('vocabulario.vocabulario_texto4')); ?></p>
			<p><?php echo e(trans('vocabulario.vocabulario_texto5')); ?></p>
			<p><?php echo e(trans('vocabulario.vocabulario_texto6')); ?></p>
        </div>
        <div class="row content h-100 center">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
           <img class="img-fluid " src="/img/practicav/vocabulariovalenciano.svg" width="300px" title="<?php echo e(trans('vocabulario.vocabulario_imgtitle1')); ?>" alt="<?php echo e(trans('vocabulario.vocabulario_imgalt1')); ?>">
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


<section class="container justify my-5">
    <div class="container-fluid">
        <div class="row">
			<h2><?php echo e(trans('vocabulario.vocabulario_titulo3')); ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/el-nom-de-les-lletres">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/Nomslletres.svg"/>
                        </div>
                        <p><?php echo e(trans('message.nombresletras')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/parts-del-dia">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/partsdia.svg"/>
                        </div>
                        <p><?php echo e(trans('message.partesdia')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/dies-de-la-setmana">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/diessetmana.svg"/>
                        </div>
                        <p><?php echo e(trans('message.diassemana')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/les-hores">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/hores.svg"/>
                        </div>
                        <p><?php echo e(trans('message.horas')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/numeros">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/numeros.svg"/>
                        </div>
                        <p><?php echo e(trans('message.numeros')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/cos-huma">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/coshuma.svg"/>
                        </div>
                        <p><?php echo e(trans('message.partescuerpo')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/avui-qui-cuina">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/cuina.svg"/>
                        </div>
                        <p><?php echo e(trans('message.hoyquecocinamos')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/parem-taula">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/taula.svg"/>
                        </div>
                        <p><?php echo e(trans('message.ponermesa')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/ciutat">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/ciutat.svg"/>
                        </div>
                        <p><?php echo e(trans('message.ciudad')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/entre-teles">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/ropa.svg"/>
                        </div>
                        <p><?php echo e(trans('message.entretelas')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/hogar">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/hogar.svg"/>
                        </div>
                        <p><?php echo e(trans('message.casa')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/mesos-any">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/mesos-any.svg"/>
                        </div>
                        <p><?php echo e(trans('message.mesesano')); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/<?php echo e(session('lang')); ?>/relacions-de-parentiu">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/parentiu.svg"/>
                        </div>
                        <p><?php echo e(trans('message.relacionesconvencionales')); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make("paginas.publi.examenes_bajo_introduccion_728x90", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/index.blade.php ENDPATH**/ ?>