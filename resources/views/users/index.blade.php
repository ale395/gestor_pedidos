@extends("layouts.signin")

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Usuarios</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Correo Electrónico</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td>{{ $user->name}}</td>
						<td>{{ $user->email}}</td>
						<td><a href="{{url('/users/'.$user->id.'/edit')}}" class="btn btn-primary btn-sm">Editar</a>
						@include('users.delete', ['user' => $user])</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{ route('register') }}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection