

<?php $__env->startSection('contentheader_title'); ?>
    Realizando un examen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
    Realizando un examen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/vocabulario"><?php echo e(trans('vocabulario.vocabulario_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    "Realizando un examen práctico"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    "Realizando examen, realizando una práctica"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
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
				<form action="/practica2/<?php echo e($datos['id']); ?>" method="POST" class="form-horizontal">
					<?php echo e(csrf_field()); ?>


					<input type="hidden" name="_method" value="PUT">

					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-body">
										<?php echo e($datos['practica']['pregunta']); ?>

									</div>
								</div>
							</div>						
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<ul>
								<p></p>
								<?php if($datos['practica']['r1']!=""): ?>
								<p><input type="radio" name="mirespuesta" value="<?php echo e(1); ?>"><?php echo e($datos['practica']['r1']); ?></p>
								<br/>
								<?php endif; ?>
								<?php if($datos['practica']['r2']!=""): ?>
								<p><input type="radio" name="mirespuesta" value="<?php echo e(2); ?>"><?php echo e($datos['practica']['r2']); ?></p>
								<br/>
								<?php endif; ?>
								<?php if($datos['practica']['r3']!=""): ?>
								<p><input type="radio" name="mirespuesta" value="<?php echo e(3); ?>"><?php echo e($datos['practica']['r3']); ?></p>
								<br/>
								<?php endif; ?>
							</ul>	
						</div>
					</div>
					<input type="hidden" name="ejercicio_id" value="<?php echo e($datos['ejercicio']['id']); ?>">
					<input type="hidden" name="practica_id" value="<?php echo e($datos['practica_id']); ?>">
					<input type="hidden" name="id" value=<?php echo e($datos['id']); ?>>
					<input type="hidden" name="orden" value=<?php echo e($datos['orden']); ?>>
					<div class="box-footer row invoice-info">
						<div class="col-sm-6 invoice-col">
							<button type="submit" class="btn btn-info pull-right">Enviar</button>
						</div>
						<div class="col-sm-6 invoice-col">
							<a href="<?php echo e(session('urlback')); ?>">Go Back</button></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/practicas/practica.blade.php ENDPATH**/ ?>