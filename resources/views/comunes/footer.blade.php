<footer class="main-footer">
	<div class="row">
		<div class="col-lg-10 col-md-10">
			© 2008 - Todos los derechos reservados
		</div>
		<div class="col-lg-2 col-md-2">
			@if (Request::url() == route('home'))
				<a href="/politica_de_cookies">Política de cookies</a>
			@endif	
		</div>
	</div>
</footer>
