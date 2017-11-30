<!DOCTYPE html>
<html>
<head>
	<title>Listado de Clientes</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<h1 class="table-text-center">Lista de Clientes</h1>
	<table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tableClientes">
			<thead class="thead-inverse center-block">
				<tr>
					<th class="size-id table-text-center">ID</th>
					<th class="table-text-center">Nombre</th>
					<th class="table-text-center">Apellido</th>
					<th class="table-text-center">Nro Documento</th>
					<th class="table-text-center">Telefono</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($clientes as $client)
					<tr>
						<td class="size-id table-text-center">{{ $client->id}}</td>
						<td>{{ $client->nombre }}</td>
						<td>{{ $client->apellido }}</td>
						<th class="table-text-center">{{ $client->cedula }}</th>
						<td>{{ $client->telefono }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>

			
						