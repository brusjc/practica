  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid d-flex align-items-center">
      <div class="logo mr-auto">
        <img width="50" height="50" class="img-responsive img-fluid img-circle" src="/img/practicav/logoPracticavalenciano.svg" />
        <a href="/{{ session('lang') }}/" class="h1 text-light">Practicavalenciano</a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/{{ session('lang') }}/examenes-jqcv">{{ trans('message.examenes_JQCV') }}</a></li>
          <li><a href="/{{ session('lang') }}/vocabulario">{{ trans('message.vocabulario') }}</a></li>
          <li><a href="/{{ session('lang') }}/ortografia">{{ trans('message.ortografia') }}</a></li>
          <li><a href="/{{ session('lang') }}/dictats">{{ trans('dictats.dictats_url') }}</a></li>
          <li><a href="/{{ session('lang') }}/noms">{{ trans('message.nombres') }}</a></li>
          @if(Auth::guest())
            <li><a href="/login" rel="nofollow">{{ trans('message.usuario') }}</a></li>
          @else
            <li>
              <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('message.signout') }}</a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  <input type="submit" value="logout" style="display: none;">
              </form>
            </li>
          @endif
          <li class="drop-down"><a href="#">{{ trans('message.idiomas') }}</a>
            <ul>
              @if(session('lang')!="va") <li><a href="{{ route('change_lang', ['lang' => 'va']) }}"><img width="30" height="30" src="/img/practicav/valenciano.svg" /><span class="pl-2">Va</span></a></li> @endif
              @if(session('lang')!="es") <li><a href="{{ route('change_lang', ['lang' => 'es']) }}"><img width="30" height="30" src="/img/practicav/castellano.svg" /><span class="pl-2">Es</span></a></li> @endif
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>


