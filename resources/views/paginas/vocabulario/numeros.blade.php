@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.numeros_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.numeros_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.numeros_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.numeros_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2 centraimg" data-aos="fade-left">
				@include('paginas.vocabulario.publi.superior50')
			</div>
			<div class="col-md-7">
				<p>{{ trans('vocabulario.numeros_texto1') }}</p>
				<p>{{ trans('vocabulario.numeros_texto2') }}</p>
				<p>{{ trans('vocabulario.numeros_texto3') }}</p>
				<p>{{ trans('vocabulario.numeros_texto4') }}</p>
				<p>{{ trans('vocabulario.numeros_texto5') }}</p>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row content h-100">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo2') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo2') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td>0</td><td>Zero</td></tr>
							<tr><td>1</td><td>Un, u, una</td></tr>
							<tr><td>2</td><td>Dos, dues</td></tr>
							<tr><td>3</td><td>Tres</td></tr>
							<tr><td>4</td><td>Quatre</td></tr>
							<tr><td>5</td><td>Cinc</td></tr>
							<tr><td>6</td><td>Sis</td></tr>
							<tr><td>7</td><td>Set</td></tr>
							<tr><td>8</td><td>Huit</td></tr>
							<tr><td>9</td><td>Nou</td></tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo5') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo5') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td>10</td><td>Deu</td></tr>
							<tr><td>11</td><td>Onze</td></tr>
							<tr><td>12</td><td>Dotze</td></tr>
							<tr><td>13</td><td>Tretze</td></tr>
							<tr><td>14</td><td>Catorze</td></tr>
							<tr><td>15</td><td>Quinze</td></tr>
							<tr><td>16</td><td>Setze</td></tr>
							<tr><td>17</td><td>Dèsset, disset</td></tr>
							<tr><td>18</td><td>Dihuit, divuit</td></tr>
							<tr><td>19</td><td>Dènou, dinou</td></tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Vocabulario - Bajo Marcas - 728x90 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-7412986561454436"
			     data-ad-slot="8783629312">
			</ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo6') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo6') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td></td><td>Vint – i – (unitat)</td></tr>
							<tr><td>20</td><td>Vint</td></tr>
							<tr><td>21</td><td>Vint-i-u, vint-i-un, vint-i-una</td></tr>
							<tr><td>22</td><td>Vint-i-dos, vint-i-dues</td></tr>
							<tr><td>23</td><td>Vint-i-tres</td></tr>
							<tr><td>24</td><td>Vint-i-quatre</td></tr>
							<tr><td>25</td><td>Vint-i-cinc</td></tr>
							<tr><td>26</td><td>Vint-i-sis</td></tr>
							<tr><td>27</td><td>Vint-i-set</td></tr>
							<tr><td>28</td><td>Vint-i-huit</td></tr>
							<tr><td>29</td><td>Vint-i-nou</td></tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo7') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo7') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td></td><td>Trenta – (unitat)</td></tr>
							<tr><td>30</td><td>Trenta</td></tr>
							<tr><td>31</td><td>Trenta-u, trenta-un, trenta-una</td></tr>
							<tr><td>40</td><td>Quaranta</td></tr>
							<tr><td>42</td><td>Quaranta-dos, quaranta-dues</td></tr>
							<tr><td>50</td><td>Cinquanta</td></tr>
							<tr><td>53</td><td>Cinquanta-tres</td></tr>
							<tr><td>60</td><td>Seixanta</td></tr>
							<tr><td>64</td><td>Seixanta-quatre</td></tr>
							<tr><td>70</td><td>Setanta</td></tr>
							<tr><td>75</td><td>Setanta-cinc</td></tr>
							<tr><td>80</td><td>Huitanta, vuitanta</td></tr>
							<tr><td>86</td><td>Huitanta-sis, vuitanta-sis</td></tr>
							<tr><td>87</td><td>Huitanta-set, vuitanta-set</td></tr>
							<tr><td>90</td><td>Noranta</td></tr>
							<tr><td>98</td><td>Noranta-huit, noranta-vuit</td></tr>
							<tr><td>99</td><td>Noranta-nou</td></tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Vocabulario - Bajo Marcas - 728x90 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-7412986561454436"
			     data-ad-slot="8783629312">
			</ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo8') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo8') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td></td><td>(unitat)- cents</td></tr>
							<tr><td>100</td><td>Cent</td></tr>
							<tr><td>110</td><td>Cent deu</td></tr>
							<tr><td>115</td><td>Cent quinze</td></tr>
							<tr><td>200</td><td>Dos-cents</td></tr>
							<tr><td>222</td><td>Dos-cents vint-i-dos</td></tr>
							<tr><td>233</td><td>Dos-cents trenta-tres</td></tr>
							<tr><td>300</td><td>Tres-cents</td></tr>
							<tr><td>346</td><td>Tres-cents quaranta-sis</td></tr>
							<tr><td>378</td><td>Tres-cents setanta-huit o tres-cents setanta-vuit</td></tr>
							<tr><td>400</td><td>Quatre-cents</td></tr>
							<tr><td>457</td><td>Quatre-cents cinquanta-set</td></tr>
							<tr><td>499</td><td>Quatre-cents noranta-nou</td></tr>
							<tr><td>500</td><td>Cinc-cents</td></tr>
							<tr><td>554</td><td>Cinc-cents cinquanta-quatre</td></tr>
							<tr><td>566</td><td>Cinc-cents seixanta-sis</td></tr>
							<tr><td>600</td><td>Sis-cents</td></tr>
							<tr><td>667</td><td>Sis-cents seixanta-set</td></tr>
							<tr><td>613</td><td>Sis-cents tretze</td></tr>
							<tr><td>700</td><td>Set-cents</td></tr>
							<tr><td>778</td><td>Set-cents setanta-huit o Set-cents setanta-vuit</td></tr>
							<tr><td>789</td><td>Set-cents huitanta-nou o Set-cents vuitanta-nou</td></tr>
							<tr><td>800</td><td>Huit-cents o Vuit-cents</td></tr>
							<tr><td>888</td><td>Huit-cents huitanta-huit o Vuit-cents vuitanta-vuit</td></tr>
							<tr><td>825</td><td>Huit-cents vint-i-cinc o Vuit-cents vint-i-cinc</td></tr>
							<tr><td>900</td><td>Nou-cents</td></tr>
							<tr><td>999</td><td>Nou-cents noranta-nou</td></tr>
							<tr><td>907</td><td>Nou-cents set</td></tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Vocabulario - Bajo Marcas - 728x90 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-7412986561454436"
			     data-ad-slot="8783629312">
			</ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo9') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo9') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td>1000</td><td>Mil</td></tr>
							<tr><td>2000</td><td>Dos mil</td></tr>
							<tr><td>3000</td><td>Tres mil</td></tr>
							<tr><td>4000</td><td>Quatre mil</td></tr>
							<tr><td>5000</td><td>Cinc mil</td></tr>
							<tr><td>6000</td><td>Sis mil</td></tr>
							<tr><td>7000</td><td>Set mil</td></tr>
							<tr><td>8000</td><td>Huit mil o Vuit mil</td></tr>
							<tr><td>9000</td><td>Nou mil</td></tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo10') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo10') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td>10000</td><td>Deu mil</td></tr>
							<tr><td>11000</td><td>Onze mil</td></tr>
							<tr><td>12000</td><td>Dotze mil</td></tr>
							<tr><td>13000</td><td>Tretze mil</td></tr>
							<tr><td>14000</td><td>Catorze mil</td></tr>
							<tr><td>15000</td><td>Quinze mil</td></tr>
							<tr><td>16000</td><td>Setze mil</td></tr>
							<tr><td>17000</td><td>Dèsset mil o  Disset mil</td></tr>
							<tr><td>18000</td><td>Dihuit mil o  Divuit mil</td></tr>
							<tr><td>19000</td><td>Dènou mil, Dinou mil</td></tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Vocabulario - Bajo Marcas - 728x90 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-7412986561454436"
			     data-ad-slot="8783629312">
			</ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo11') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo11') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td></td><td>Vint – i – (unitat) mil</td></tr>
							<tr><td>20000</td><td>Vint mil</td></tr>
							<tr><td>21000</td><td>Vint-i-u mil, vint-i-un mil, vint-i-una mil</td></tr>
							<tr><td>22000</td><td>Vint-i-dos mil, vint-i-dues mil</td></tr>
							<tr><td>23000</td><td>Vint-i-tres mil</td></tr>
							<tr><td>24000</td><td>Vint-i-quatre mil</td></tr>
							<tr><td>25000</td><td>Vint-i-cinc mil</td></tr>
							<tr><td>26000</td><td>Vint-i-sis mil</td></tr>
							<tr><td>27000</td><td>Vint-i-set mil</td></tr>
							<tr><td>28000</td><td>Vint-i-huit mil o Vint-i-vuit mil</td></tr>
							<tr><td>29000</td><td>Vint-i-nou mil</td></tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo12') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo12') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
							<tr><td></td><td>Trenta – (unitat) mil</td></tr>
							<tr><td>30000</td><td>Trenta mil</td></tr>
							<tr><td>31000</td><td>Trenta-u mil, trenta-un mil, trenta-una mil</td></tr>
							<tr><td>40000</td><td>Quaranta mil</td></tr>
							<tr><td>42000</td><td>Quaranta-dos mil, quaranta-dues mil</td></tr>
							<tr><td>50000</td><td>Cinquanta mil</td></tr>
							<tr><td>53000</td><td>Cinquanta-tres mil</td></tr>
							<tr><td>60000</td><td>Seixanta mil</td></tr>
							<tr><td>64000</td><td>Seixanta-quatre mil</td></tr>
							<tr><td>70000</td><td>Setanta mil</td></tr>
							<tr><td>75000</td><td>Setanta-cinc mil</td></tr>
							<tr><td>80000</td><td>Huitanta mil, vuitanta mil</td></tr>
							<tr><td>86000</td><td>Huitanta-sis mil, vuitanta-sis mil</td></tr>
							<tr><td>87000</td><td>Huitanta-set mil, vuitanta-set mil</td></tr>
							<tr><td>90000</td><td>Noranta mil</td></tr>
							<tr><td>98000</td><td>Noranta-huit mil, noranta-vuit mil</td></tr>
							<tr><td>99000</td><td>Noranta-nou mil</td></tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Vocabulario - Bajo Marcas - 728x90 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-7412986561454436"
			     data-ad-slot="8783629312">
			</ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header  with-border">
						<h2 class="box-title">{{ trans('vocabulario.numeros_titulo13') }}</h2>
					</div>
					<div class="box-body">
						<table class="table table-bordered" summary="{{ trans('vocabulario.numeros_titulo13') }}">
							<thead>
								<tr>
									<th scope="col">{{ trans('vocabulario.numeros_titulo3') }}</th>
									<th scope="col">{{ trans('vocabulario.numeros_titulo4') }}</th>
								</tr>
							</thead>
								<tr><td>1.000.000</td><td>Un milió</td></tr>
								<tr><td>1.000.000.000.000</td><td>Un bilió</td></tr>
								<tr><td>1.000.000.000.000.000.000</td><td>Un trilió</td></tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
