@extends("layouts.signin")

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Clientes</h1>
	</div>
	<div><h1></h1></div>
	<div class="container">
		<table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tableClientes">
			<thead class="thead-inverse center-block">
				<tr>
					<th class="size-id table-text-center">Id</th>
					<th class="table-text-center">Nombre</th>
					<th class="table-text-center">Apellido</th>
					<th class="table-text-center">Cedula</th>
					<th class="table-text-center">Telefono</th>
					<th class="table-text-center">Direccion</th>
				    <th class="table-text-center">Correo</th>
					<th class="size-acciones table-text-center">Acciones</th>				    
				</tr>
			</thead>
			<tbody>
				@foreach ($clientes as $client)
					<tr>
						<td class="size-id table-text-center">{{ $client->id}}</td>
						<td>{{ $client->nombre }}</td>
						<td>{{ $client->apellido }}</td>
						<td>{{ $client->cedula }}</td>
						<td>{{ $client->telefono }}</td>
						<td>{{ $client->direccion }}</td>
						<td>{{ $client->correo }}</td>
						<td class="size-acciones"></td>	
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/clientes/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection