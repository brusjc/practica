<div class="js-cookie-consent cookie-consent alert-danger m-3 p-4 rounded-lg" style="z-index: 1070">

    <span class="cookie-consent__message">
        <?php echo trans('privacidad.consentimiento_texto1'); ?> <a class="enlacesCookies" href="/<?php echo e(session('lang')); ?>/politica-de-cookies"><?php echo trans('message.politicacookies'); ?></a>
        <?php echo trans('privacidad.consentimiento_texto2'); ?> <a class="enlacesCookies" href="/<?php echo e(session('lang')); ?>/politica-de-privacidad"><?php echo trans('message.politicaprivacidad'); ?></a>
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree btn btn-success">
        <?php echo trans('privacidad.consentimiento_texto3'); ?>

    </button>

</div>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/vendor/cookieConsent/dialogContents.blade.php ENDPATH**/ ?>