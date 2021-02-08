<!DOCTYPE html>
<head>
  <?php echo $__env->make('layouts.frontAdmin.comunes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <?php echo $__env->make('layouts.frontAdmin.comunes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.frontAdmin.comunes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-wrapper">
      <?php echo $__env->make('layouts.frontAdmin.comunes.titulo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <section class="content">
        <div class="container-fluid">
          <?php echo $__env->yieldContent('main_content'); ?>
        </div>
      </section>
    </div>
  </div>
  <?php echo $__env->make('layouts.frontAdmin.comunes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('layouts.frontAdmin.comunes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/layouts/frontAdmin/general.blade.php ENDPATH**/ ?>