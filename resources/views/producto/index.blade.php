@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Productos</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Descripción</td>
					<td>Precio Unitario</td>
					<td>ID_Categoria</td>
					<td>Estado</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($producto as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->nomb_producto}}</td>
						<td>{{ $product->precio_unitario }}</td>
						<td>{{ $product->id_categoria }}</td>
						<td>{{ $product->estado }}</td>
						<td> Acciones </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection