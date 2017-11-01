@extends("layouts.signin")

@section("content")
	<div class="container white">
		<h1>Nueva Categoría</h1>
		<!-- FORMULARIOS -->
		@include('categorias.form', ['categoria' => $categoria, 'url' => '/categorias', 'method' => 'POST'])
	</div>
@endsection