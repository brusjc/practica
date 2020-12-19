  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid d-flex align-items-center">
      <div class="logo mr-auto">
        <img width="50" height="50" class="img-responsive img-fluid img-circle" src="/img/practicav/logoPracticavalenciano.svg" />
        <a href="/va/" class="h1 text-light">Practicavalenciano</a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/examenes-jqcv"><?php echo e(trans('message.examenes_JQCV')); ?></a></li>
          <li><a href="/vocabulario"><?php echo e(trans('message.vocabulario')); ?></a></li>
          <li><a href="/ortografia"><?php echo e(trans('message.ortografia')); ?></a></li>
          <li><a href="/dictats"><?php echo e(trans('dictats.dictats_url')); ?></a></li>
          <li><a href="/noms"><?php echo e(trans('message.nombres')); ?></a></li>
          <?php if(Auth::guest()): ?>
            <li><a href="/login" rel="nofollow"><?php echo e(trans('message.usuario')); ?></a></li>
          <?php else: ?>
            <li>
              <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat" id="logout"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(trans('message.signout')); ?></a>
              <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

                  <input type="submit" value="logout" style="display: none;">
              </form>
            </li>
          <?php endif; ?>
          <li class="drop-down"><a href="#"><?php echo e(trans('message.idiomas')); ?></a>
            <ul>
              <li><a href="<?php echo e(route('change_lang', ['lang' => 'va'])); ?>">Va</a></li>
              <li><a href="<?php echo e(route('change_lang', ['lang' => 'es'])); ?>">Es</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>


<?php /**PATH C:\xampp\htdocs\practica\resources\views/frontend/comunes/nav.blade.php ENDPATH**/ ?>