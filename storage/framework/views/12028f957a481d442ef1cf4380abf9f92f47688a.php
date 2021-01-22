<!DOCTYPE html>
<html lang="es">

    <head>
        <?php echo $__env->make('layouts.frontandia.comunes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
    
        <?php echo $__env->make('layouts.frontandia.comunes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.frontandia.comunes.titulo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent("main_content"); ?>
        
        <?php echo $__env->make('layouts.frontandia.comunes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.frontandia.comunes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>

</html><?php /**PATH C:\xampp\htdocs\practica\resources\views/layouts/frontandia/general.blade.php ENDPATH**/ ?>