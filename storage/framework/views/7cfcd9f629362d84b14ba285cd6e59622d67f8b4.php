

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('message.informacion_examen_master')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('message.informacion_examen_master')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="/es/master"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>"Todos los examenes"<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>"Examenes"<?php $__env->stopSection(); ?>

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
			<form action="/masterVerificador2/<?php echo e($subtema['original']['data'][0]['id']); ?>" method="POST" class="form-horizontal">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="PUT">
				<div class="box box-success">
					<div class="box-header">
						<h4><?php echo e($subtema['original']['data'][0]['prueba']['nombre']); ?> - <?php echo e($subtema['original']['data'][0]['subtemanombre']['nombre']); ?></h4>
					</div>
					<div class="box-body">
						<div class="form-group col-sm-4">
							<label>
								
							</label>
						</div>
						<div class="form-group col-sm-4 external-event bg-gray pull-right">
							<label>
								No revisado:
								<input type="radio" name="verificado" value="0" class="minimal" checked>
							</label>
							<label>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bien:
								<input type="radio" name="verificado" value="1" class="minimal">
							</label>
							<label>
								 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mal: 
								<input type="radio" name="verificado" value="9" class="minimal">
							</label>
						</div>
						<div class="form-group col-sm-4">
							<label>
								
							</label>
						</div>
					</div>
				</div>
				<div class="box-footer row invoice-info">
					<div class="col-sm-6 invoice-col">
						<button type="submit" class="btn btn-info pull-right">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>




<div class="row">
	<div class="col-md-12">
		<?php $__currentLoopData = $subtema['original']['data'][0]['preguntas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="box box-default collapsed-box">
				<!-- Título -->
				<div class="box-header with-border">
					<p> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
					<p> </p>
					<p class="box-title font-weight-bold"><?php echo e($pregunta['orden']); ?>.-<?php echo e($pregunta['pregunta']); ?></p>
					<p> </p>
				</div>
				<!-- Cuerpo -->
				<div class="box-body">
					<p  class="small"><i><?php echo e($pregunta['enunciado']['enunciado']); ?></i></p>
					<?php $__currentLoopData = $pregunta['respuesta']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$respuesta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<p> - <?php echo e($respuesta['respuesta']); ?></p>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<!-- /.box -->
	</div>
</div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.frontAdmin.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/master/MasterVerificador.blade.php ENDPATH**/ ?>