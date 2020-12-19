<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto ml-2 mr-2">
      @if(Auth::guest())
          <li><a href="{{ url('/login') }}"><button type="button" class="btn btn-default ml-1 mr-1"><i class="fa fa-user"></i></button></a></li>
      @else
        <li class="dropdown user user-menu" id="user_menu" style="max-width: 280px;white-space: nowrap;">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="max-width: 280px;white-space: nowrap;overflow: hidden;overflow-text: ellipsis">
                <button type="button" class="btn btn-default ml-1 mr-1">
                  <i class="fa fa-user"></i>
                  <span class="hidden-xs" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</span>
                </button>
            </a>
            <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                    <i class="fa fa-user"></i>
                    <p>
                        <span data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</span>
                        <small>{{ trans('message.login') }} Nov. 2012</small>
                    </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                    <div class="col-xs-4 text-center">
                        <a href="#">{{ trans('message.followers') }}</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">{{ trans('message.sales') }}</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">{{ trans('message.friends') }}</a>
                    </div>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="{{ url('/user/profile') }}" class="btn btn-default btn-flat">{{ trans('message.profile') }}</a>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ trans('message.signout') }}
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <input type="submit" value="logout" style="display: none;">
                        </form>

                    </div>
                </li>
            </ul>
        </li>
      @endif
      <li>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('change_lang', ['lang' => 'va']) }}"><button type="button" class="btn btn-default ml-2 mr-2">Va</button></a></li>
            <li><a href="{{ route('change_lang', ['lang' => 'es']) }}"><button type="button" class="btn btn-default ml-2 mr-2">Es</button></a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
