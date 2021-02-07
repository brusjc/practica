<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2><?php echo e(__('auth.Confirmación de correo electrónico')); ?></h2>
	<p><?php echo e(__('auth.Hola')); ?> <?php echo e($name); ?>, <?php echo e(__('auth.gracias por registrarte en www.practicavalenciano.es')); ?></p>
    <p><?php echo e(__('auth.Por favor confirma tu correo electrónico')); ?>.</p>
    <p><?php echo e(__('auth.Para ello simplemente debes hacer click en el siguiente enlace')); ?>:</p>

    <a href="<?php echo e(url('/register/verify/' . $confirmation_code)); ?>">
        <?php echo e(__('auth.Clic para confirmar tu email')); ?>

    </a>
</body>
</html><?php /**PATH C:\xampp\htdocs\practica\resources\views/paginas/emails/confirmation_code.blade.php ENDPATH**/ ?>