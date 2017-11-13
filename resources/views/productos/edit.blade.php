@extends("layouts.signin")

@section("content")
	<div class="container white">
		<h1 align="center">Editar Producto</h1>
		<!-- FORMULARIOS -->
		@include('productos.form', ['producto' => $producto, 'url' => '/productos/'.$producto->id, 'method' => 'PATCH'])
	</div>
@endsection