@extends("layouts.signin")

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Usuarios</h1>
	</div>
	<div><h1></h1></div>
	<div class="container">
		<table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tableUsuarios">
			<thead class="thead-inverse center-block">
				<tr>
					<th class="size-id table-text-center"><strong>ID</strong></th>
					<th class="table-text-center">Nombre</th>
					<th class="table-text-center">Correo Electrónico</th>
					<th class="size-acciones table-text-center">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td class="size-id table-text-center">{{ $user->id}}</td>
						<td>{{ $user->name}}</td>
						<td>{{ $user->email}}</td>
						<td  class="size-acciones">
							<a href="{{url('/users/'.$user->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
							@include('users.delete', ['user' => $user])
						</td>
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