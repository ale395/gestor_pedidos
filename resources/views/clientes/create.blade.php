@extends("layouts.signin")

@section("content")
	<div class="container white">
		<h1 align="center">Agregar cliente</h1>
		<!-- FORMULARIOS -->
		@include('clientes.form', ['clientes' => $clientes, 'url' => '/clientes', 'method' => 'POST'])
	</div>
@endsection