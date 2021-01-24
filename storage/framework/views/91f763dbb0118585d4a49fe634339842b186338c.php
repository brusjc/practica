<div class="page-title-container mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn">
                <h1>
                    <?php echo $__env->yieldContent("contentheader_h1"); ?>
                </h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 wow fadeIn">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?php echo $__env->yieldContent('breadcrumb0'); ?> </li>
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
                        <?php if(trim($__env->yieldContent('breadcrumb5'))): ?>
                            <li class="breadcrumb-item"><?php echo $__env->yieldContent('breadcrumb5'); ?></li>
                        <?php endif; ?>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 wow fadeIn">
                <?php echo $__env->yieldContent("contentheader_frase"); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/layouts/frontandia/comunes/titulo.blade.php ENDPATH**/ ?>