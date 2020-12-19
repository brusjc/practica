@extends('frontend.layouts.esfrontend')

@section('contentheader_title'){{ trans('esexamenes.A1_title') }}@endsection

@section('contentheader_h1'){{ trans('esexamenes.A1_h1') }}@endsection

@section('breadcrumb0')<a href="/es/">Inicio</a>@endsection

@section('breadcrumb1')<a href="/examenes-jqcv">{{ trans('esexamenes.jqcv_breadcrumb') }}</a>@endsection

@section('descripcion'){{ trans('esexamenes.A1_descripcion') }}@endsection

@section('keywords'){{ trans('esexamenes.A1_keywords') }}@endsection

@section('main_content')
<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-2">
			<p>{{ trans('esexamenes.A1_texto1') }}</p>
			<ul>
				<li>{{ trans('esexamenes.A1_texto2') }}</li>
				<li>{{ trans('esexamenes.A1_texto3') }}</li>
				<li>{{ trans('esexamenes.A1_texto4') }}</li>
			</ul>
			<p>{!! trans('esexamenes.A1_texto5') !!}</p>
        </div>
    </div>
</section>

<section class="about">
	<div class="row content">
		<div class="col-12">
			<p>{{ trans('esexamenes.A1_texto7') }}</p>
			<ul>
				<li>{{ trans('esexamenes.A1_texto8') }}</li>
				<li>{{ trans('esexamenes.A1_texto9') }}</li>
				<li>{{ trans('esexamenes.A1_texto10') }}</li>
				<li>{{ trans('esexamenes.A1_texto11') }}</li>
				<li>{{ trans('esexamenes.A1_texto12') }}</li>
			</ul>
		</div>
	</div>
</section>

@endsection
