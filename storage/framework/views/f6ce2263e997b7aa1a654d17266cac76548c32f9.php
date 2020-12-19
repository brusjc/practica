

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('vocabulario.vocabulario_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('vocabulario.vocabulario_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><?php echo e(session('BC1texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('vocabulario.vocabulario_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('vocabulario.vocabulario_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section>
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

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
           <img class="img-fluid " src="/img/practicav/vocabulariovalenciano.svg" width="300px" title="<?php echo e(trans('vocabulario.vocabulario_imgtitle1')); ?>" alt="<?php echo e(trans('vocabulario.vocabulario_imgalt1')); ?>">
        </div>
        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
            <h2><?php echo e(trans('vocabulario.vocabulario_titulo2')); ?></h2>
			<p><?php echo e(trans('vocabulario.vocabulario_texto3')); ?></p>
			<p><?php echo e(trans('vocabulario.vocabulario_texto4')); ?></p>
			<p><?php echo e(trans('vocabulario.vocabulario_texto5')); ?></p>
			<p><?php echo e(trans('vocabulario.vocabulario_texto6')); ?></p>
        </div>
    </div>
</section>


<section>
	<div class="container">
		<h2><?php echo e(trans('vocabulario.vocabulario_titulo3')); ?></h2>
		<div class="row mt-5" data-aos="fade-left">
			<div class="col-lg-3 col-md-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
					<img src="/img/practicav/vocabulario/Nomslletres.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/el-nom-de-les-lletres"><?php echo e(trans('message.nombresletras')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<img src="/img/practicav/vocabulario/partsdia.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/parts-del-dia"><?php echo e(trans('message.partesdia')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
					<img src="/img/practicav/vocabulario/diessetmana.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/dies-de-la-setmana"><?php echo e(trans('message.diassemana')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
					<img src="/img/practicav/vocabulario/hores.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/les-hores"><?php echo e(trans('message.horas')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
					<img src="/img/practicav/vocabulario/numeros.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/numeros"><?php echo e(trans('message.numeros')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
					<img src="/img/practicav/vocabulario/coshuma.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/cos-huma"><?php echo e(trans('message.partescuerpo')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
					<img src="/img/practicav/vocabulario/cuina.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/avui-qui-cuina"><?php echo e(trans('message.hoyquecocinamos')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
					<img src="/img/practicav/vocabulario/taula.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/parem-taula"><?php echo e(trans('message.ponermesa')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
					<img src="/img/practicav/vocabulario/ciutat.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/ciutat"><?php echo e(trans('message.ciudad')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
					<img src="/img/practicav/vocabulario/ropa.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/entre-teles"><?php echo e(trans('message.entretelas')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
					<img src="/img/practicav/vocabulario/hogar.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/hogar"><?php echo e(trans('message.casa')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
					<img src="/img/practicav/vocabulario/mesos-any.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/mesos-any"><?php echo e(trans('message.mesesano')); ?></a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
					<img src="/img/practicav/vocabulario/parentiu.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/<?php echo e(session('lang')); ?>/relacions-de-parentiu"><?php echo e(trans('message.relacionesconvencionales')); ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/index.blade.php ENDPATH**/ ?>