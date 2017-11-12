@extends("layouts.signin")

@section("content")
	<div class="container white">
		<h1 align="center">Editar Usuario</h1>
		<!-- FORMULARIOS -->
		@include('users.form', ['user' => $user, 'url' => '/users/'.$user->id, 'method' => 'PATCH'])
	</div>
@endsection