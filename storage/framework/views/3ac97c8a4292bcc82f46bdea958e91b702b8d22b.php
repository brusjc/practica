<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="/" class="brand-link">
    <span class="brand-text font-weight-light">Practicavalenciano.es</span>
  </a>

  <div class="sidebar">
    <?php if(! Auth::guest()): ?>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
      </div>
    <?php endif; ?>
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="/es/" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p><?php echo e(trans('message.home')); ?></p>
          </a>
        </li>

        <?php if(! Auth::guest()): ?>
          <?php if(Auth::user()->roll_id>=50): ?>
            <li class="nav-item">
              <a href="/es/master" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p><?php echo e(trans('message.master')); ?></p>
              </a>
            </li>
          <?php endif; ?>
        <?php endif; ?>

        <li class="nav-item">
          <a href="/es/ciudades" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p><?php echo e(trans('pagRaiz.ciudades')); ?></p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside><?php /**PATH C:\xampp\htdocs\practica\resources\views/layouts/frontAdmin/comunes/sidebar.blade.php ENDPATH**/ ?>