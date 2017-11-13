@extends("layouts.signin")

@section("content")
	<div class="container white">
		<h1 align="center">Editar Categoría</h1>
		<!-- FORMULARIOS -->
		@include('categorias.form', ['categoria' => $categoria, 'url' => '/categorias/'.$categoria->id, 'method' => 'PATCH'])
	</div>
@endsection