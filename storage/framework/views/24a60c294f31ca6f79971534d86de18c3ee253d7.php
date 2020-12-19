<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php echo $__env->make('comunes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<meta name="csrf-token" content=<?php echo e(csrf_token()); ?>>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<meta name="description" content="<?php echo $__env->yieldContent('descripcion'); ?>"/>
<meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>"/>
<meta name="author" content="Bruno Jiménez">
<meta name="geo.region" content="ES" />
<meta name="DC.Title" content="<?php echo $__env->yieldContent('contentheader_title'); ?>" />
<meta name="DC.Language" content="es" />
<meta name="DC.Creator" content="Bruno Jiménez" />
<meta name="google-site-verification" content="nG2hpUXdyDL_NjzC_PVq-WdbfMnDlcz_I3if5hcURhM" />

<link rel="icon" href="img/favicon.png" type="image/png" />

<!-- Script de Google Analitics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create','UA-6810309-1','auto');ga('send','pageview');
</script>

<script data-ad-client="ca-pub-7412986561454436" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<link rel="canonical" href="<?php echo e(Request::fullUrl()); ?>" />

<title><?php echo $__env->yieldContent("contentheader_title"); ?></title>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/comunes/headHtml.blade.php ENDPATH**/ ?>