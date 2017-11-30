<!DOCTYPE html>
<html>
<head>
	<title>Listado de Productos</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<header class="table-text-center"><img src="{{asset('logo_tienda.png')}}" width="300" height="80"></header>
	<div class="footer">Página Nro: <span class="pagenum"></span></div>
	<div>
		<h1 class="table-text-center">Lista de Productos</h1>
		<table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tableProductos">
				<thead class="thead-inverse center-block">
					<tr>
						<th class="size-id table-text-center">ID</th>
						<th class="table-text-center">Descripción</th>
						<th class="table-text-center size-acciones">Precio Unitario</th>
						<th class="table-text-center">Categoria</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($productos as $product)
						<tr>
							<td class="size-id table-text-center">{{ $product->id}}</td>
							<td>{{ $product->nomb_producto}}</td>
							<td class="derecha size-acciones">{{ number_format($product->precio_unitario, 0) }}</td>
							<td class="table-text-center">{{ $product->get_categoria($product->id_categoria) }}</td>
						</tr>
					@endforeach
				</tbody>
		</table>
	</div>
</body>
</html>