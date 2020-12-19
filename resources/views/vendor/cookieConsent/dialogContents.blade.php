<div class="js-cookie-consent cookie-consent alert-danger m-3 p-4 rounded-lg" style="z-index: 1070">

    <span class="cookie-consent__message">
        {!! trans('privacidad.consentimiento_texto1') !!} <a class="enlacesCookies" href="/{{session('lang')}}/politica-de-cookies">{!! trans('message.politicacookies') !!}</a>
        {!! trans('privacidad.consentimiento_texto2') !!} <a class="enlacesCookies" href="/{{session('lang')}}/politica-de-privacidad">{!! trans('message.politicaprivacidad') !!}</a>
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree btn btn-success">
        {!! trans('privacidad.consentimiento_texto3') !!}
    </button>

</div>
