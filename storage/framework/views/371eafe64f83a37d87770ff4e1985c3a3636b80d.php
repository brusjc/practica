

<?php $__env->startSection('contentheader_title'); ?><?php echo e(trans('examenes.exaC2_title')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV@endsection

<?php $__env->startSection('contentheader_h1'); ?><?php echo e(trans('examenes.exaC2_h1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV@endsection

<?php $__env->startSection('breadcrumb1'); ?><a href="<?php echo e(session('BC1')); ?>"><?php echo e(session('BC1texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?><a href="<?php echo e(session('BC2')); ?>"><?php echo e(session('BC2texto')); ?></a><?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?><?php echo e(trans('examenes.exaC2_descripcion1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaC2_descripcion2')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaC2_descripcion3')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaC2_descripcion4')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e(trans('examenes.exaC2_keywords1')); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(trans('examenes.exaC2_keywords2')); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row"><div class="col-7">	<div class="comment-text">		<p><?php echo e(html_entity_decode(trans('examenes.exaC2_texto1'))); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(html_entity_decode(trans('examenes.exaC2_texto2'))); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?>  <?php echo e(html_entity_decode(trans('examenes.exaC2_texto3'))); ?></p>		<p><?php echo e(html_entity_decode(trans('examenes.exaC2_texto4'))); ?></p>		<p><?php echo e(html_entity_decode(trans('examenes.exaC2_texto5'))); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(html_entity_decode(trans('examenes.exaC2_texto6'))); ?></p>	</div></div><div class="col-5">	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>	<ins class="adsbygoogle"	     style="display:block"	     data-ad-client="ca-pub-7412986561454436"	     data-ad-slot="6463281785"	     data-ad-format="auto"	     data-full-width-responsive="true"></ins>	<script>	     (adsbygoogle = window.adsbygoogle || []).push({});	</script></div>
</div>

<div class="comment-text"><p><?php echo e(html_entity_decode(trans('examenes.exaC2_texto7'))); ?> <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> <?php echo e(html_entity_decode(trans('examenes.exaC2_texto8'))); ?></p>
</div>

<div class="row  mt-5"><div class="col-md-12">	<div class="card">		<div class="card-header">			<h3>Nivel C2 <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> - Probes usuario</h3>			<?php if(Auth::guest()): ?>				<?php echo e(trans('message.solo usuarios registrados')); ?>			<?php endif; ?>			<div class="pull-right">				<?php if(!Auth::guest()): ?>					<a href="/examennuevo/<?php echo e($codigo); ?>">						<button type="button" class="btn btn-primary"><?php echo e(trans('message.examen_nuevo')); ?></button>					</a>				<?php else: ?>					<a class="mb-2 btn btn-block btn-info" href="/login"><?php echo e(trans('message.login')); ?></a>				<?php endif; ?>			</div>		</div>		<div class="card-body">			<table class="table table-bordered">				<tr>					<th><?php echo e(trans('examenes.Examen')); ?></th>					<th><?php echo e(trans('examenes.Fecha')); ?></th>					<th><?php echo e(trans('examenes.Progreso')); ?></th>					<th style="width: 5%">%</th>				</tr>			<?php if(!Auth::guest()): ?>					<?php if($examenes['original']['status']['error']==0): ?>						<?php $__currentLoopData = $examenes['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>							<tr>								<td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e($examen['prueba']['nombre']); ?></a></td>								<td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e(date('d-m-Y', strtotime($examen['created_at']))); ?></a></td>								<td>									<div class="progress progress-xs">										<div class="progress-bar progress-bar-danger" style="width: <?php echo e($examen['porcentaje']); ?>%"></div>									</div>								</td>								<td><span class="badge bg-red"><?php echo e($examen['porcentaje']); ?>%</span></td>							</tr>						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>					<?php endif; ?>				<?php endif; ?>			</table>		</div>	</div></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examen_c2.blade.php ENDPATH**/ ?>