@extends("layouts.signin")

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Productos</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Descripción</td>
					<td>Precio Unitario</td>
					<td>Categoria</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($producto as $product)
					<tr>
						<td>{{ $product->nomb_producto}}</td>
						<td>{{ $product->precio_unitario }}</td>
						<!--<td>{{ $product->id_categoria }}</td>-->
						<td>{{ $product->get_categoria($product->id_categoria) }}</td>
						<td>
							<a href="{{url('/productos/'.$product->id.'/edit')}}" class="btn btn-primary btn-sm">Editar 
							</a>
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