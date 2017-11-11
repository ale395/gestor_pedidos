@extends("layouts.signin")

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Productos</h1>
	</div>
	<div><h1></h1></div>
	<div class="container">
		<table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tableProductos">
			<thead class="thead-inverse center-block">
				<tr>
					<th class="size-id table-text-center">ID</th>
					<th class="table-text-center">Descripción</th>
					<th class="table-text-center">Precio Unitario</th>
					<th class="table-text-center">Categoria</th>
					<th class="size-acciones table-text-center">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($producto as $product)
					<tr>
						<td class="size-id table-text-center">{{ $product->id}}</td>
						<td>{{ $product->nomb_producto}}</td>
						<td class="derecha">{{ number_format($product->precio_unitario, 0) }}</td>
						<td class="table-text-center">{{ $product->get_categoria($product->id_categoria) }}</td>
						<td class="size-acciones">
							
								<a href="{{url('/productos/'.$product->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
								@include('productos.delete', ['producto' => $product])
							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/productos/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection