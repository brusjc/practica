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
                <a href="/{{ session('locale') }}/home">Practicavalenciano.es</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::guest())
                    @if(Auth::user()->roll_id>=50)
                        <li>
                            <a href="/master"><i class="fa fa-key fa-2x misvg"></i><br>{{ trans('general.master') }}</a>
                        </li>
                    @endif
                @endif
                <li>
                    <a href="/{{ session('locale') }}/examenes-jqcv"><i class="fa fa-graduation-cap fa-2x misvg"></i><br>{{ trans('general.examenes_JQCV') }}</a>
                </li>
                <li>
                    <a href="/{{ session('locale') }}/vocabulario"><i class="fa fa-font fa-2x misvg"></i><br>{{ trans('general.vocabulario') }}</a>
                </li>
                <li>
                    <a href="/{{ session('locale') }}/ortografia"><i class="fa fa-book fa-2x"></i><br>{{ trans('general.ortografia') }}</a>
                </li>
                <li>
                    <a href="/{{ session('locale') }}/dictats"><i class="fa fa-play fa-2x misvg"></i><br>{{ trans('dictats.dictats_url') }}</a>
                </li>
                <li>
                    <a href="/{{ session('locale') }}/noms"><i class="fa fa-male fa-2x"></i><br>{{ trans('general.nombres') }}</a>
                </li>

                @if(Auth::guest())
                    <li><a href="/login" rel="nofollow"><i class="fa fa-user fa-2x"></i><br>{{ trans('general.usuario') }}</a></li>
                @else
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                            <i class="fa fa-user fa-2x"></i><br>{{ trans('general.usuario') }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li class="active">
                                <a href="/user/profile">{{ __('general.Profile') }}</a>
                            </li>
                            <li>
                      <a href="{{ url('/logout') }}" id="logout"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-user-times fa-2x"></i><br>{{ trans('general.signout') }}</a>
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          <input type="submit" value="logout" style="display: none;">
                      </form>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(isset($urlblade))
                    @if(Session::get('locale')=='es')
                      <li><a href="/va/{{$urlblade}}"><i class="fa fa-flag fa-2x"></i><br>Va</a></li>
                    @else            
                      <li><a href="/es/{{$urlblade}}"><i class="fa fa-flag fa-2x"></i><br>Es</a></li>
                    @endif
                @endif

            </ul>
        </div>
    </div>
</nav>
