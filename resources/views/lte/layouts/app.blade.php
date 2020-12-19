<!DOCTYPE html>
  <head>
    @include('lte.comunes.headHtml')
  </head>
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
      @include('lte.comunes.nav')
      @include('lte.comunes.barraizqda')
      <div class="content-wrapper">
        @include('lte.comunes.bodyTitulo')
        <section class="content">
          <div class="container-fluid">
            @include('cookieConsent::index')
            @yield('main_content')
          </div>
        </section>
      </div>
    </div>
    @include('lte.comunes.footer')
    @include('lte.comunes.scripts')
    @yield('script-modal')
  </body>
</html>
