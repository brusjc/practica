

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('practicas.practicas_breadcrumb')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('practicas.practicas_h1')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('practicas.practicas_descripcion')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('practicas.practicas_keywords')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb0'); ?><a href="/<?php echo e(session('lang')); ?>/">Inicio</a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?><?php echo e(trans('practicas.practicas_breadcrumb')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<?php if($datos['verdiv']==true): ?>
	
	<div class="modal fade" id="modalInformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-danger" id="exampleModalLabel"><i class="fa fa-info-circle"></i> Aviso</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	        	<div class="col-lg-12">
	        		<p class="m-5">Es necesario registrarse para poder guardar la información de tus sucesivos ejercicios. No debemos esperar más para registrarnos en la web</p>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <a href="/login" class="btn btn-primary">Login</a>
	      </div>
	    </div>
	  </div>
	</div>
<?php endif; ?>

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

			<?php if(!$datos['practica']['r2']): ?>
				<form action="<?php echo e(action('PracticaController@practica1')); ?>" method="POST" class="form-horizontal">
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
					<br/>
					<div class="form-group">
						<div class="col-sm-8">
		                  <textarea class="form-control" id="mirespuesta" name="mirespuesta" placeholder="Escribe aqui tu respuesta"></textarea>
						</div>
					</div>
					<input type="hidden" name="tipo" value="1">
					<input type="hidden" name="ejercicio_id" value="<?php echo e($datos['ejercicio']['id']); ?>">
					<input type="hidden" name="practica_id" value="<?php echo e($datos['practica_id']); ?>">
					<input type="hidden" name="id" value=<?php echo e($datos['id']); ?>>
					<input type="hidden" name="verdiv" value=<?php echo e($datos['verdiv']); ?>>
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
			<?php else: ?>
				<form action="<?php echo e(action('PracticaController@practica2')); ?>" method="POST" class="form-horizontal">
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
								<p><input type="radio" name="mirespuesta" value="<?php echo e(1); ?>"><span class="ml-3"><?php echo e($datos['practica']['r1']); ?></span></p>
								<br/>
								<?php endif; ?>
								<?php if($datos['practica']['r2']!=""): ?>
								<p><input type="radio" name="mirespuesta" value="<?php echo e(2); ?>"><span class="ml-3"><?php echo e($datos['practica']['r2']); ?></span></p>
								<br/>
								<?php endif; ?>
								<?php if($datos['practica']['r3']!=""): ?>
								<p><input type="radio" name="mirespuesta" value="<?php echo e(3); ?>"><span class="ml-3"><?php echo e($datos['practica']['r3']); ?></span></p>
								<br/>
								<?php endif; ?>
							</ul>	
						</div>
					</div>
					<input type="hidden" name="ejercicio_id" value="<?php echo e($datos['ejercicio']['id']); ?>">
					<input type="hidden" name="practica_id" value="<?php echo e($datos['practica_id']); ?>">
					<input type="hidden" name="id" value=<?php echo e($datos['id']); ?>>
					<input type="hidden" name="verdiv" value=<?php echo e($datos['verdiv']); ?>>
					<input type="hidden" name="orden" value=<?php echo e($datos['orden']); ?>>
					<div class="box-footer row invoice-info mb-5">
						<div class="col-sm-6 invoice-col">
							<button type="submit" class="btn btn-info pull-right">Enviar</button>
						</div>
						<div class="col-sm-6 invoice-col">
							<a href="<?php echo e(session('BC2')); ?>" class="btn btn-info pull-right">Tornar</a>
						</div>
					</div>
				</form>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php if($datos['verdiv']==true): ?>
	
	<?php $__env->startSection('script-modal'); ?>
		<script type="text/javascript">
				
			$(document).ready(function(){
				$('#modalInformacion').modal('toggle')
			});	

		</script>
	<?php $__env->stopSection(); ?>	

<?php endif; ?>
<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/practicas/practica.blade.php ENDPATH**/ ?>