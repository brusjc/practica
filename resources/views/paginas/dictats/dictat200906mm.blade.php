@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('dictats.dictat200906mm_titulo1') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('dictats.dictat200906mm_h1') )}}@endsection

@section('breadcrumb1')<a href="/dictats">{{ trans('dictats.dictats_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('dictats.dictat200906mm_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('dictats.dictat200906mm_keywords') )}}@endsection

@section('main_content')

<div class="row">
	<div class="col-7">
		<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto3') )}}</p>
	</div>
	<div class="col-5">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-7412986561454436"
		     data-ad-slot="6463281785"
		     data-ad-format="auto"
		     data-full-width-responsive="true"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto4') )}}</p>
	<ul>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto5') )}}</li>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto6') )}}</li>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto7') )}}</li>
	</ul>
</div>

<div class="comment-text">
	<h2>{{ html_entity_decode(trans('dictats.dictat200906mm_titulo1') )}}</h2>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto8') )}}</p>
	<ol>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto9') )}}</li>
		<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto10') )}}</li>
		<audio src="/sonido/dictados/dictados200906mmp.mp3" preload="none" controls></audio>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto11') )}}</li>
		<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
	</ol>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto12') )}}</p>
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto13') )}}</p>
</div>

<h2>Comprueba tu dictado</h2>

<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<form action='{{ action("DictatController@comprovaDictat") }}' method="POST" class="form-horizontal">
				{{csrf_field()}}

				<input type="hidden" name="_method" value="PUT">

				<div class="box-body">
					<div class="col-md-12">
						<div class="box box-solid">
							<div class="box-body">
								<div class="form-group">
				                  <textarea class="form-control" id="textoalumno" name="textoalumno" rows="3" placeholder="Escribe aqui el texto del dictado"></textarea>
				                </div>
							</div>
						</div>
					</div>						
				</div>

				<input id="dictado_id" type="hidden" name="dictado_id" value="1">
				<div class="box-footer row invoice-info">
					<div class="col-sm-6 invoice-col">
						<button type="submit" class="btn btn-info pull-right">Enviar</button>
					</div>
					<div class="col-sm-6 invoice-col">
						<a href="{{session('BC4')}}">Go Back</button></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
