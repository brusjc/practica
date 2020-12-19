<!DOCTYPE html>
  <head>
    <?php echo $__env->make('comunes.headHtml', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
      <?php echo $__env->make('comunes.bodyCabeza', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('comunes.bodySidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="content-wrapper">
        <?php echo $__env->make('comunes.bodyTitulo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section class="content">
          <div class="container-fluid">
            <?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('main_content'); ?>
          </div>
        </section>
      </div>
    </div>
    <?php echo $__env->make('comunes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('comunes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script-modal'); ?>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/layouts/app.blade.php ENDPATH**/ ?>