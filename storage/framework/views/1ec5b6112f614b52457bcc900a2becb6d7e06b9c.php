<?php if($cookieConsentConfig['enabled'] && ! $alreadyConsentedWithCookies): ?>

    <div class="js-cookie-consent cookie-consent alert-danger m-3 p-4 rounded-lg">
        <span class="cookie-consent__message">
            <?php echo trans('cookieConsent::texts.message'); ?> <a href="/politica_de_privacidad"><?php echo trans('message.politicaprivacidad'); ?></a>.
        </span>
        <button class="js-cookie-consent-agree cookie-consent__agree">
            <?php echo e(trans('cookieConsent::texts.agree')); ?>

        </button>
    </div>

    <script>
        window.laravelCookieConsent = (function () {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = '<?php echo e(config('session.domain') ?? request()->getHost()); ?>';

            function consentWithCookies() {
                setCookie('<?php echo e($cookieConsentConfig['cookie_name']); ?>', COOKIE_VALUE, <?php echo e($cookieConsentConfig['cookie_lifetime']); ?>);
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/<?php echo e(config('session.secure') ? ';secure' : null); ?>'
                    + '<?php echo e(config('session.same_site') ? ';samesite='.config('session.same_site') : null); ?>';
            }

            if (cookieExists('<?php echo e($cookieConsentConfig['cookie_name']); ?>')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/frontend/comunes/cookies.blade.php ENDPATH**/ ?>