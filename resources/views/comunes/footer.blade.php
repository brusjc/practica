<footer class="main-footer">
	<div class="row">
		<div class="col-lg-8 col-md-8">
			© 2008 - Todos los derechos reservados
		</div>
		<div class="col-lg-2 col-md-2">
			@if (Request::url() == route('home'))
				<a href="/politica_de_cookies">Política de cookies</a>
			@endif	
		</div>
		<div class="col-lg-2 col-md-2">
			@if (Request::url() == route('home'))
				<a href="http://www.practicavalenciano.es/varios/enlaces.php">Webs d'interés</a>
			@endif	
		</div>
	</div>
</footer>
