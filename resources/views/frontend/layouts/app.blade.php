<!DOCTYPE html>
<html lang="es">

<head>
  @include('frontend.comunes.headHtml')
</head>

<body>
  @include('frontend.comunes.nav')
  @include('cookieConsent::index')

  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>@yield('contentheader_h1')</h1>
          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          @include('frontend.comunes.breadcrumb')
        </div>
      </div>
    </div>

    <svg class="hero-waves"  viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)"/>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)"/>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff"/>
      </g>
    </svg>

  </section>

  <main id="main">
    <div class="container">
      @yield('main_content')
    </div>
  </main>

  @include('frontend.comunes.footer')

  @include('frontend.comunes.scripts')

</body>

</html>