

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('vocabulario.horas_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('vocabulario.horas_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><?php echo e(session('BC2texto')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('vocabulario.parentesco_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('vocabulario.parentesco_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
				<?php echo $__env->make('paginas.vocabulario.publi.superior50', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	        </div>
	        <div class="col-md-6 pt-5 order-1">
				<p><?php echo e(trans('vocabulario.horas_texto1')); ?></p>
				<p><?php echo e(trans('vocabulario.horas_texto2')); ?></p>
				<p><?php echo e(trans('vocabulario.horas_texto3')); ?></p>
				<p><?php echo e(trans('vocabulario.horas_texto4')); ?></p>
				<p><?php echo e(trans('vocabulario.horas_texto5')); ?></p>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/hora-exacta.svg" width="300px" title="<?php echo e(trans('vocabulario.horas_imgtitle20')); ?>" alt="<?php echo e(trans('vocabulario.horas_imgalt20')); ?>">
	        </div>
	        <div class="col-md-8 pt-5 order-2">
	            <h2><?php echo e(trans('vocabulario.horas_titulo20')); ?></h2>
				<p><?php echo e(trans('vocabulario.horas_texto20')); ?></p>
	        	<div class="col-8">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('vocabulario.horas_titulo20')); ?>">
						<thead>
							<th colspan="3"><?php echo e(trans('vocabulario.horas_titulo20')); ?></th>
						</thead>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto21')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto22')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto23')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto24')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto25')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto26')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto27')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto28')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto29')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto30')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto31')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto32')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto33')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto34')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto35')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto36')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto37')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto38')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto39')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto40')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto41')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto42')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto43')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto44')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto45')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto46')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto47')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto48')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto49')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto50')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto51')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto52')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto53')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto54')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto55')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto56')); ?></td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-2 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/hora-i-quart.svg" width="300px" title="<?php echo e(trans('vocabulario.horas_imgtitle60')); ?>" alt="<?php echo e(trans('vocabulario.horas_imgalt60')); ?>">
	        </div>
	        <div class="col-md-8 pt-5 order-1">
	            <h2><?php echo e(trans('vocabulario.horas_titulo60')); ?></h2>
				<p><?php echo e(trans('vocabulario.horas_texto60')); ?></p>
	        	<div class="col-8">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('vocabulario.horas_titulo60')); ?>">
						<thead>
							<th colspan="3"><?php echo e(trans('vocabulario.horas_titulo60')); ?></th>
						</thead>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto61')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto62')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto63')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto64')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto65')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto66')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto67')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto68')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto69')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto70')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto71')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto72')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto73')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto74')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto75')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto76')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto77')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto78')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto79')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto80')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto81')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto82')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto83')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto84')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto85')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto86')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto87')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto88')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto89')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto90')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto91')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto92')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto93')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto94')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto95')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto96')); ?></td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/hora-i-mitja.svg" width="300px" title="<?php echo e(trans('vocabulario.horas_imgtitle100')); ?>" alt="<?php echo e(trans('vocabulario.horas_imgalt100')); ?>">
	        </div>
	        <div class="col-md-8 pt-5 order-2">
	            <h2><?php echo e(trans('vocabulario.horas_titulo100')); ?></h2>
				<p><?php echo e(trans('vocabulario.horas_texto100')); ?></p>
	        	<div class="col-8">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('vocabulario.horas_titulo100')); ?>">
						<thead>
							<th colspan="3"><?php echo e(trans('vocabulario.horas_titulo100')); ?></th>
						</thead>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto101')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto102')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto103')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto104')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto105')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto106')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto107')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto108')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto109')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto110')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto111')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto112')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto113')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto114')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto115')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto116')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto117')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto118')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto119')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto120')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto121')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto122')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto123')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto124')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto125')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto126')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto127')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto128')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto129')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto130')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto131')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto132')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto133')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto134')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto135')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto136')); ?></td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/hora-menys-quart.svg" width="300px" title="<?php echo e(trans('vocabulario.horas_imgtitle140')); ?>" alt="<?php echo e(trans('vocabulario.horas_imgalt140')); ?>">
	        </div>
	        <div class="col-md-8 pt-5 order-2">
	            <h2><?php echo e(trans('vocabulario.horas_titulo140')); ?></h2>
				<p><?php echo e(trans('vocabulario.horas_texto140')); ?></p>
	        	<div class="col-8">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('vocabulario.horas_titulo140')); ?>">
						<thead>
							<th colspan="3"><?php echo e(trans('vocabulario.horas_titulo140')); ?></th>
						</thead>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto141')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto142')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto143')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto144')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto145')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto146')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto147')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto148')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto149')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto150')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto151')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto152')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto153')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto154')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto155')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto156')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto157')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto158')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto159')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto160')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto161')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto162')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto163')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto164')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto165')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto166')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto167')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto168')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto169')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto170')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto171')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto172')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto173')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto174')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto175')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto176')); ?></td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-2 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/hora-alguns-minuts.svg" width="300px" title="<?php echo e(trans('vocabulario.horas_imgtitle180')); ?>" alt="<?php echo e(trans('vocabulario.horas_imgalt180')); ?>">
	        </div>
	        <div class="col-md-8 pt-5 order-1">
	            <h2><?php echo e(trans('vocabulario.horas_titulo180')); ?></h2>
				<p><?php echo e(trans('vocabulario.horas_texto180')); ?></p>
	        	<div class="col-8">
					<table class="table table-bordered" summary="tabla de <?php echo e(trans('vocabulario.horas_titulo180')); ?>">
						<thead>
							<th colspan="3"><?php echo e(trans('vocabulario.horas_titulo180')); ?></th>
						</thead>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto181')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto182')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto183')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto184')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto185')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto186')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto187')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto188')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto189')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto190')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto191')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto192')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto193')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto194')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto195')); ?></td>
						</tr>
						<tr>
							<td><?php echo e(trans('vocabulario.horas_texto196')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto197')); ?></td>
							<td><?php echo e(trans('vocabulario.horas_texto198')); ?></td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/vocabulario/les-hores.blade.php ENDPATH**/ ?>