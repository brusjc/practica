  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <?php if(Request::url() === 'http://localhost/va' or Request::url() === 'http://localhost/es'): ?>
            <div class="col-lg-3 col-md-6 footer-links">
              <a href="/<?php echo e(session('lang')); ?>/politica-de-cookies" rel="nofollow"><?php echo e(trans('message.politicacookies')); ?></a>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <a href="/<?php echo e(session('lang')); ?>/politica-de-privacidad" rel="nofollow"><?php echo e(trans('message.politicaprivacidad')); ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/frontend/comunes/footer.blade.php ENDPATH**/ ?>