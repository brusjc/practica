  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid d-flex align-items-center">
      <div class="logo mr-auto">
        <img width="50" height="50" class="img-responsive img-fluid img-circle" src="/img/practicav/logoPracticavalenciano.svg" />
        <h1 class="text-light"><a href="index.html">Practicavalenciano</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">{{ trans('message.home') }}</a></li>
          <li class="drop-down"><a href="/examenes-jqcv">{{ trans('message.examenes_JQCV') }}</a>
            <ul>
              <li><a href="/examenes-a1">{{ trans('examenes.jqcv_titulo11') }}</a></li>
              <li><a href="/examenes-a2">{{ trans('examenes.jqcv_titulo12') }}</a></li>
              <li><a href="/examenes-b1">{{ trans('examenes.jqcv_titulo13') }}</a></li>
              <li><a href="/examenes-b2">{{ trans('examenes.jqcv_titulo14') }}</a></li>
              <li><a href="/examenes-c1">{{ trans('examenes.jqcv_titulo15') }}</a></li>
              <li><a href="/examenes-c2">{{ trans('examenes.jqcv_titulo16') }}</a></li>
              <li><a href="/examenelemental">{{ trans('examenes.jqcv_titulo17') }}</a></li>
              <li><a href="/examenoral">{{ trans('examenes.jqcv_titulo18') }}</a></li>
              <li><a href="/examenmitja">{{ trans('examenes.jqcv_titulo19') }}</a></li>
              <li><a href="/examensuperior">{{ trans('examenes.jqcv_titulo20') }}</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="/vocabulario">{{ trans('message.vocabulario') }}</a>
            <ul>
              <li><a href="/el-nom-de-les-lletres">{{ trans('message.nombresletras') }}</a></li>
              <li><a href="/parts-del-dia">{{ trans('message.partesdia') }}</a></li>
              <li><a href="/dies-de-la-setmana">{{ trans('message.diassemana') }}</a></li>
              <li><a href="/mesos-any">{{ trans('message.mesesano') }}</a></li>
              <li><a href="/les-hores">{{ trans('message.horas') }}</a></li>
              <li><a href="/numeros">{{ trans('message.numeros') }}</a></li>
              <li><a href="/cos-huma">{{ trans('message.partescuerpo') }}</a></li>
              <li><a href="/avui-qui-cuina">{{ trans('message.hoyquecocinamos') }}</a></li>
              <li><a href="/parem-taula">{{ trans('message.ponermesa') }}</a></li>
              <li><a href="/entre-teles">{{ trans('message.entretelas') }}</a></li>
              <li><a href="/ciutat">{{ trans('message.ciudad') }}</a></li>
              <li><a href="/casa">{{ trans('message.casa') }}</a></li>
              <li><a href="/les-relacions-convencionals-i-de-parentiu">{{ trans('message.relacionesconvencionales') }}</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="/ortografia">{{ trans('message.ortografia') }}</a>
            <ul>
              <li><a href="/vocalisme">{{ trans('ortografia.vocalisme_breadcrumb') }}</a></li>
              <li><a href="/byv">{{ trans('ortografia.byv_breadcrumb') }}</a></li>
              <li><a href="/acentuacion">{{ trans('ortografia.acentuacion_breadcrumb') }}</a></li>
              <li><a href="/eio">{{ trans('ortografia.eio_breadcrumb') }}</a></li>
              <li><a href="/dieresis">{{ trans('ortografia.dieresis_breadcrumb') }}</a></li>
              <li><a href="/diftong">{{ trans('ortografia.diptongos_breadcrumb') }}</a></li>
              <li><a href="/diacritic">{{ trans('ortografia.diacritic_breadcrumb') }}</a></li>
              <li><a href="/apostrof">{{ trans('ortografia.apostrof_breadcrumb') }}</a></li>
              <li><a href="/contraccio">{{ trans('ortografia.contraccio_breadcrumb') }}</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="/dictats">{{ trans('dictats.dictats_url') }}</a>
            <ul>
              <li><a href="/dictat-mitja-junio-2009-mati">{{ trans('dictats.dictat200906mm_breadcrumb') }}</a></li>
              <li><a href="/dictat-mitja-junio-2009-vesprada">{{ trans('dictats.dictat200906mv_breadcrumb') }}</a></li>
              <li><a href="/dictat-mitja-junio-2010-mati">{{ trans('dictats.dictat201006mm_breadcrumb') }}</a></li>
              <li><a href="/dictat-mitja-junio-2010-vesprada">{{ trans('dictats.dictat201006mv_breadcrumb') }}</a></li>
              <li><a href="/dictat-mitja-novembre-2010-mati">{{ trans('dictats.dictat201011mm_breadcrumb') }}</a></li>
              <li><a href="/dictat-mitja-novembre-2011-mati">{{ trans('dictats.dictat201111mm_breadcrumb') }}</a></li>
              <li><a href="/dictat-mitja-novembre-2011-vesprada">{{ trans('dictats.dictat201111mv_breadcrumb') }}</a></li>
              <li><a href="/dictat-superior-junio-2009">{{ trans('dictats.dictat200906sm_breadcrumb') }}</a></li>
              <li><a href="/dictat-superior-junio-2010">{{ trans('dictats.dictat201006sm_breadcrumb') }}</a></li>
            </ul>
          </li>
          <li><a href="/noms">{{ trans('message.nombres') }}</a></li>
          @if(Auth::guest())
            <li><a href="/login" rel="nofollow">{{ trans('message.usuario') }}</a></li>
          @else
            <li>
              <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ trans('message.signout') }}
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  <input type="submit" value="logout" style="display: none;">
              </form>
            </li>
          @endif
          <li class="drop-down"><a href="#">{{ trans('message.idiomas') }}</a>
            <ul>
              <li><a href="{{ route('change_lang', ['lang' => 'va']) }}">Va</a></li>
              <li><a href="{{ route('change_lang', ['lang' => 'es']) }}">Es</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>


