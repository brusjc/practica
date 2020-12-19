  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid d-flex align-items-center">
      <div class="logo mr-auto">
        <img width="50" height="50" class="img-responsive img-fluid img-circle" src="/img/practicav/logoPracticavalenciano.svg" />
        <a href="/es/" class="h1 text-light">Practicavalenciano</a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          @if(!Auth::guest())
            @if(Auth::user()->roll_id==99)
              <li><a href="/pruebasmaster">{{ trans('message.master') }}</a></li>
            @endif
          @endif
          <li><a href="/es/examenes-jqcv">{{ trans('vamessage.examenes_JQCV') }}</a></li>
          <li><a href="/es/vocabulario">{{ trans('vamessage.vocabulario') }}</a></li>
          <li><a href="/es/ortografia">{{ trans('vamessage.ortografia') }}</a></li>
          <li><a href="/es/dictats">{{ trans('dictats.dictats_url') }}</a></li>
          <li><a href="/es/noms">{{ trans('vamessage.nombres') }}</a></li>
          @if(Auth::guest())
            <li><a href="/login" rel="nofollow">{{ trans('vamessage.usuario') }}</a></li>
          @else
            <li>
              <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('vamessage.signout') }}</a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  <input type="submit" value="logout" style="display: none;">
              </form>
            </li>
          @endif
          <li class="drop-down"><a href="#">{{ trans('vamessage.idiomas') }}</a>
            <ul>
              <li><a href="{{ route('change_lang', ['lang' => 'va']) }}">Va</a></li>
              <li><a href="{{ route('change_lang', ['lang' => 'es']) }}">Es</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>


