

<?php $__env->startSection('contentheader_title'); ?>Realizando un examen@endsection

<?php $__env->startSection('contentheader_h1'); ?>Realizando un examen@endsection

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb3'); ?><a href="<?php echo e(session('BC3')); ?>"><?php echo e(session('BC3texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb4'); ?><a href="<?php echo e(session('BC4')); ?>"><?php echo e(session('BC4texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>"Realizando un examen"<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>"Realizando examen"<?php $__env->stopSection(); ?>

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
    			<form action="/examenz2/<?php echo e($subarea); ?>" method="POST" class="form-horizontal">
    				<?php echo e(csrf_field()); ?>

    				<input type="hidden" name="_method" value="PUT">
				    <div class="form-group">
    					<div class="col-sm-12">
    						<?php echo $preguntas[0]['enunciado']['enunciado']; ?>

    					</div>
    				</div>
            		<div class="form-group">
    					<div class=" col-md-12 col-sm-12">
    						<?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1=>$preg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<div class="row">
    								<div class=" col-md-1 col-sm-1">
    									<select class="form-control" name="mirespuesta[<?php echo e($key1 + 1); ?>]" >
                                            <option></option>
                                            <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=>$linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option><?php echo e($key2 + 1); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    									</select>
    								</div>
    								<div class="col-md-11 col-sm-11">
    									<label class="form-control"><?php echo e($preg['pregunta']); ?></label>
    								</div>
								</div>
    						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    					</div>
    				</div>
    				<input id="subarea_id" type="hidden" name="subarea_id" value="<?php echo e($subarea); ?>">
    				<input id="pregunta_id" type="hidden" name="pregunta_id" value="<?php echo e($preguntas[0]['id']); ?>">
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


<?php echo $__env->make('frontend.layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examenz.blade.php ENDPATH**/ ?>