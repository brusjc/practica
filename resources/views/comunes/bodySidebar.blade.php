<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="/" class="brand-link">
    <div class="row mt-0 mb-0">
      <div class="col-lg-12 text-center">
        <center>
          <img width="100" height="100" class="img-responsive img-fluid img-circle" src="/img/practicav/logotipo.png" />
        </center>
      </div>
    </div> 
    <div class="row mt-0 mb-0">
      <div class="col-lg-12 text-center">
        <center>
          <span class="brand-text font-weight-light">Practicavalenciano.es</span>
        </center>
      </div>
    </div> 

    
  </a>

  <div class="sidebar" style="margin-top: calc(7.5rem + 1px);">
    
    <nav class="mt-5">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>{{ trans('message.home') }}</p>
          </a>
        </li>

        @if(!Auth::guest())
          @if(Auth::user()->roll_id==99)
            <li class="nav-item">
              <a href="/pruebasmaster" class="nav-link">
                <i class="nav-icon fa fa-tasks"></i>
                <p>{{ trans('message.master') }}</p>
              </a>
            </li>
          @endif
        @endif

        <li class="nav-item">
          <a href="/examenes-jqcv" class="nav-link">
            <i class="nav-icon fa fa-university"></i>
            <p>{{ trans('message.examenes_JQCV') }}</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/vocabulario" class="nav-link">
            <i class="nav-icon fa fa-edit"></i>
            <p>{{ trans('message.vocabulario') }}</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/ortografia" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p>{{ trans('message.ortografia') }}</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/dictats" class="nav-link">
            <i class="nav-icon fa fa-microphone"></i>
            <p>{{ trans('dictats.dictats_url') }}</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/noms" class="nav-link">
            <i class="nav-icon fa fa-user-md"></i>
            <p>{{ trans('noms.noms_url') }}</p>
          </a>
        </li>

      </ul>
    </nav>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7412986561454436"
         data-ad-slot="4155848498"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
</aside>