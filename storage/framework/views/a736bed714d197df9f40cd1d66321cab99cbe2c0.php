

<?php $__env->startSection('contentheader_title'); ?>
    Examen Mitja <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_h1'); ?>
    Examen Mitja <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb1'); ?>
	<a href="/examenes-jqcv"><?php echo e(trans('examenes.jqcv_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb2'); ?>
	<a href="/examenmitja"><?php echo e(trans('examenes.mitja_breadcrumb')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descripcion'); ?>
    "Examen Mitja <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV: practica el Examen Mitja de <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV. Pots realitzar l examen del nivell Mitja de <?php echo e($datos['mes']); ?> del <?php echo e($datos['ano']); ?> de la JQCV com si estigueres en la mateixa prova."
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    "Examen Mitja <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV, Examen Mitja de valencià, exàmens de la JQCV, Exàmens de valencià, Exàmens JQCV, probas JQCV, exàmens anteriors JQCV"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
	<p>En Examen Mitja de <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV (Junta Qualificadora de Coneixements de Valencià), pots realitzar l'examen del nivell Mitja de <?php echo e($datos['mes']); ?> del <?php echo e($datos['ano']); ?> com si estigueres en la mateixa prova.</p>
  <p>Perquè no trobes diferències amb l'examen real, la nostra pàgina www.practicavalenciano.es, estructura l'examen Mitja de la mateixa manera que els exàmens de la JQCV (Junta Qualificadora de Coneixements de Valencià), és a dir, tres respostes a triar una com verdadera. A més a més, amb la novetat del nostre sistema d'autoavaluació, pel qual l'usuari de la nostra pàgina, estudiant dels exàmens de la Junta Qualificadora de Coneixements de Valencià (Exàmens JQCV), puga saber a l'instant la seua puntuació respecte al seu examen, en este cas, el nivell Mitja de la JQCV.</p>
  <p>Ja que l'Examen Mitja de <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV (Junta Qualificadora de Coneixements de Valencià) conté les mateixes preguntes que l'examen real i en el mateix orde, t'aconsellem que utilitzes esta opció únicament quan hages practicat prou amb els nostres exercicis pràctics.</p>
  <p>T'animem així, a l'estudi de les lliçons incloses en el nostre curs per a prendre confiança, eficàcia i aconseguir resoldre satisfactòriament l'examen Mitja de <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> de la JQCV.</p>

<div class="row  mt-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3>Nivel Mitjà <?php echo e($datos['mes']); ?> <?php echo e($datos['ano']); ?> - Probes usuario</h3>
				<?php if(Auth::guest()): ?>
					<?php echo e(trans('message.solo usuarios registrados')); ?>

				<?php endif; ?>
				<div class="pull-right">
					<?php if(!Auth::guest()): ?>
						<a href="/examennuevo/<?php echo e($codigo); ?>">
							<button type="button" class="btn btn-primary"><?php echo e(trans('message.examen_nuevo')); ?></button>
						</a>
					<?php else: ?>
						<a class="mb-2 btn btn-block btn-info" href="/login"><?php echo e(trans('message.login')); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th><?php echo e(trans('examenes.Examen')); ?></th>
						<th><?php echo e(trans('examenes.Fecha')); ?></th>
						<th><?php echo e(trans('examenes.Progreso')); ?></th>
						<th style="width: 5%">%</th>
					</tr>

					<?php if(!Auth::guest()): ?>
						<?php if($examenes['original']['status']['error']==0): ?>
							<?php $__currentLoopData = $examenes['original']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e($examen['prueba']['nombre']); ?></a></td>
									<td><a href="/exameninicio/<?php echo e($examen['id']); ?>"><?php echo e(date('d-m-Y', strtotime($examen['created_at']))); ?></a></td>
									<td>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-danger" style="width: <?php echo e($examen['porcentaje']); ?>%"></div>
										</div>
									</td>
									<td><span class="badge bg-red"><?php echo e($examen['porcentaje']); ?>%</span></td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					<?php endif; ?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/examenes/examen_mitja.blade.php ENDPATH**/ ?>