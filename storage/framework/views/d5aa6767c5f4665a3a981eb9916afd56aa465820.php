<div class="row container-cargando">
  <div class="col-sm-12 text-center">
    <div class="cargando hidden"><i class="fa fa-spinner fa-spin fa-3x"></i></div>
  </div>
</div>
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark">
            <?php echo $__env->yieldContent('contentheader_h1', 'Page Header here'); ?>
        </h1>
      </div>
      <div class="col-sm-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><?php echo e(trans('message.home')); ?></a></li>

          <?php if(trim($__env->yieldContent('breadcrumb1'))): ?>
             <li class="breadcrumb-item"><?php echo $__env->yieldContent('breadcrumb1'); ?></li>            
          <?php endif; ?>

          <?php if(trim($__env->yieldContent('breadcrumb2'))): ?>
             <li class="breadcrumb-item"><?php echo $__env->yieldContent('breadcrumb2'); ?></li> 
          <?php endif; ?>

          <?php if(trim($__env->yieldContent('breadcrumb3'))): ?>
               <li class="breadcrumb-item"><?php echo $__env->yieldContent('breadcrumb3'); ?></li>  
          <?php endif; ?>

          <?php if(trim($__env->yieldContent('breadcrumb4'))): ?>
               <li class="breadcrumb-item"><?php echo $__env->yieldContent('breadcrumb4'); ?></li>  
          <?php endif; ?>

          <li class="breadcrumb-item"> <?php echo e(trans('message.here')); ?> </li>
          
        </ol>
      </div>
    </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/comunes/bodyTitulo.blade.php ENDPATH**/ ?>