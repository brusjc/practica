

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.examen_title')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.examen_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?><a href="<?php echo e(session('BC3')); ?>"><?php echo e(session('BC3texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb4'); ?><a href="<?php echo e(session('BC4')); ?>"><?php echo e(session('BC4texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.examen_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.examen_keywords')); ?>"<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

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
		<div class="row">
			<div class="col-md-9">
				<div class="box box-info mb-0">
					<div class="box-header with-border">
						<?php if(count($errors) > 0): ?>
							<div class="callout callout-info">
								<div class="errors">
									<ul>
										<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li><?php echo e($error); ?></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<form action="/examen2/<?php echo e($pregunta['id']); ?>" method="POST" class="form-horizontal">
						<?php echo e(csrf_field()); ?>

						<input type="hidden" name="_method" value="PUT">
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<div class="box box-solid">
										<div class="box-body">
											<?php echo $pregunta['enunciado'][0]['enunciado']; ?>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<div class="box box-solid">
										<div class="box-body text-center mt-4 mb-4">
											<?php if($pregunta['pregunta']['imagen']!=""): ?>
												<audio id="sonido" src="/<?php echo e($pregunta['pregunta']['imagen']); ?>" controls></audio>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="col-sm-12">
								<p><?php echo e($pregunta['pregunta']['pregunta']); ?></p>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<ul>
									<?php $__currentLoopData = $pregunta['respuesta']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$resp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<p><input type="radio" name="mirespuesta" value="<?php echo e($resp['id']); ?>">							<?php echo e($resp['respuesta']); ?></p>
										<br/>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						</div>
						<input id="subarea_id" type="hidden" name="subarea_id" value="<?php echo e($pregunta['subarea_id']); ?>">
						<input id="pregunta_id" type="hidden" name="pregunta_id" value="<?php echo e($pregunta['pregunta_id']); ?>">
						<div class="box-footer row invoice-info">
							<div class="col-sm-6 invoice-col">
								<button type="submit" class="btn btn-info pull-right">Enviar</button>
							</div>
							<div class="col-sm-6 invoice-col">
								<a href="<?php echo e(session('BC4')); ?>">Go Back</button></a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Adaptable Vertical -->
				<ins class="adsbygoogle"
					 style="display:block"
		 			 data-ad-client="ca-pub-7412986561454436"
		 			 data-ad-slot="4155848498"
		 			 data-ad-format="auto"
		 			 data-full-width-responsive="true">
	 			 </ins>
				<script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
			</div>
		</div>
	</div>
</section>
<section class="container justify">
    <div class="container-fluid">
		<div class="row mt-0">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Examenes - Bajo Introduccion - 728x90 -->
			<ins class="adsbygoogle"	     style="display:inline-block;width:728px;height:90px"	     data-ad-client="ca-pub-7412986561454436"	     data-ad-slot="1171860113">	</ins>
			<script>	     (adsbygoogle = window.adsbygoogle || []).push({});	</script>
		</div>
	</div>
</section>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontandia.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examen.blade.php ENDPATH**/ ?>