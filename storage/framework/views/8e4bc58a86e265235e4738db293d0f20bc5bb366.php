  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid d-flex align-items-center">
      <div class="logo mr-auto">
        <img width="50" height="50" class="img-responsive img-fluid img-circle" src="/img/practicav/logoPracticavalenciano.svg" />
        <a href="/es/" class="h1 text-light">Practicavalenciano</a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <?php if(!Auth::guest()): ?>
            <?php if(Auth::user()->roll_id==99): ?>
              <li><a href="/pruebasmaster"><?php echo e(trans('message.master')); ?></a></li>
            <?php endif; ?>
          <?php endif; ?>
          <li><a href="/es/examenes-jqcv"><?php echo e(trans('esmessage.examenes_JQCV')); ?></a></li>
          <li><a href="/es/vocabulario"><?php echo e(trans('esmessage.vocabulario')); ?></a></li>
          <li><a href="/es/ortografia"><?php echo e(trans('esmessage.ortografia')); ?></a></li>
          <li><a href="/es/dictats"><?php echo e(trans('dictats.dictats_url')); ?></a></li>
          <li><a href="/es/noms"><?php echo e(trans('esmessage.nombres')); ?></a></li>
          <?php if(Auth::guest()): ?>
            <li><a href="/login" rel="nofollow"><?php echo e(trans('esmessage.usuario')); ?></a></li>
          <?php else: ?>
            <li>
              <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat" id="logout"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(trans('esmessage.signout')); ?></a>
              <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

                  <input type="submit" value="logout" style="display: none;">
              </form>
            </li>
          <?php endif; ?>
          <li class="drop-down"><a href="#"><?php echo e(trans('esmessage.idiomas')); ?></a>
            <ul>
              <li><a href="<?php echo e(route('change_lang', ['lang' => 'va'])); ?>">Va</a></li>
              <li><a href="<?php echo e(route('change_lang', ['lang' => 'es'])); ?>">Es</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>


<?php /**PATH C:\xampp\htdocs\practica\resources\views/frontend/comunes/esnav.blade.php ENDPATH**/ ?>