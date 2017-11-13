@extends("layouts.signin")

@section("content")
	<div class="container white">
		<h1>Editar Pedido</h1>
		<!-- FORMULARIOS -->
		@include('pedidos.form', ['pedido' => $pedido, 'url' => '/pedidos/'.$pedido->id, 'method' => 'PATCH'])
	</div>
@endsection