  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          @if(Request::url() === 'http://localhost/va' or Request::url() === 'http://localhost/es')
            <div class="col-lg-3 col-md-6 footer-links">
              <a href="/{{session('lang')}}/politica-de-cookies" rel="nofollow">{{ trans('message.politicacookies') }}</a>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <a href="/{{session('lang')}}/politica-de-privacidad" rel="nofollow">{{ trans('message.politicaprivacidad') }}</a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </footer>
