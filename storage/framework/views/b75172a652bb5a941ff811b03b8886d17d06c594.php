 <nav class="navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="h1">
                <a href="/<?php echo e(session('lang')); ?>/">Practicavalenciano.es</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <?php if(!Auth::guest()): ?>
                    <?php if(Auth::user()->roll_id>=50): ?>
                        <li>
                            <a href="/es/master"><i class="fa fa-key fa-2x misvg"></i><br><?php echo e(trans('message.master')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                <li>
                    <a href="/<?php echo e(session('lang')); ?>/examenes-jqcv"><i class="fa fa-graduation-cap fa-2x misvg"></i><br><?php echo e(trans('message.examenes_JQCV')); ?></a>
                </li>
                <li>
                    <a href="/<?php echo e(session('lang')); ?>/vocabulario"><i class="fa fa-font fa-2x misvg"></i><br><?php echo e(trans('message.vocabulario')); ?></a>
                </li>
                <li>
                    <a href="/<?php echo e(session('lang')); ?>/ortografia"><i class="fa fa-book fa-2x"></i><br><?php echo e(trans('message.ortografia')); ?></a>
                </li>
                <li>
                    <a href="/<?php echo e(session('lang')); ?>/dictats"><i class="fa fa-play fa-2x misvg"></i><br><?php echo e(trans('dictats.dictats_url')); ?></a>
                </li>
                <li>
                    <a href="/<?php echo e(session('lang')); ?>/noms"><i class="fa fa-male fa-2x"></i><br><?php echo e(trans('message.nombres')); ?></a>
                </li>
                <?php if(Auth::guest()): ?>
                    <li><a href="/login" rel="nofollow"><i class="fa fa-user fa-2x"></i><br><?php echo e(trans('message.usuario')); ?></a></li>
                <?php else: ?>
                    <li>
                      <a href="<?php echo e(url('/logout')); ?>" id="logout"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-user-times fa-2x"></i><br><?php echo e(trans('message.signout')); ?></a>
                      <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                          <?php echo e(csrf_field()); ?>

                          <input type="submit" value="logout" style="display: none;">
                      </form>
                    </li>
                <?php endif; ?>
                <?php if(Session::get('lang')=='es'): ?>
                  <li><a href="<?php echo e(route('change_lang', ['lang' => 'va'])); ?>"><i class="fa fa-flag fa-2x"></i><br>Va</a></li>
                <?php else: ?>            
                  <li><a href="<?php echo e(route('change_lang', ['lang' => 'es'])); ?>"><i class="fa fa-flag fa-2x"></i><br>Es</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\practica\resources\views/layouts/frontandia/comunes/nav.blade.php ENDPATH**/ ?>