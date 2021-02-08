    <html lang="es">
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content=<?php echo e(csrf_token()); ?>>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <meta name="description" content=<?php echo $__env->yieldContent("descripcion"); ?>/>
    <meta name="keywords" content=<?php echo $__env->yieldContent("keywords"); ?>/>
    <meta name="author" content="Bruno Jiménez">

    <title><?php echo $__env->yieldContent("contentheader_title"); ?></title>
    <?php echo $__env->make('layouts.frontAdmin.comunes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        window.trans = <?php
            $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
            $trans = [];
            foreach ($lang_files as $f) {
                $filename = pathinfo($f)['filename'];
                $trans[$filename] = trans($filename);
            }
            $trans['adminlte_lang_message'] = trans('message');
            echo json_encode($trans);
        ?>
    </script>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/layouts/frontAdmin/comunes/head.blade.php ENDPATH**/ ?>