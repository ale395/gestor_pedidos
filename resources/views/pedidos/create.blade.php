@extends("layouts.app")

@section("content")
	<div class="container white">
		<h1>Nuevo Pedido</h1>
		<!-- FORMULARIOS -->
		@include('pedidos.form', ['pedidos' => $pedidos, 'url' => '/pedidos', 'method' =>  'POST'])
	</div>
@endsection