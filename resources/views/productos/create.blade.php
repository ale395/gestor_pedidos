@extends("layouts.signin")

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo Producto</h1>
		<!-- FORMULARIOS -->
		@include('productos.form', ['producto' => $producto, 'url' => '/productos', 'method' => 'POST'])
	</div>
@endsection