@extends("layouts.signin")

@section("content")
	<div class="container white">
		<h1 align="center">Editar cliente</h1>
		<!-- FORMULARIOS -->
		@include('clientes.form', ['clientes' => $clientes, 'url' => '/clientes/'.$clientes->id, 'method' => 'PATCH'])
	</div>
@endsection

