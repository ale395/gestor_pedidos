{!!Form::open(['url' => $url, 'method' => $method])!!}
	<div class="form-group">
		{{Form::text('nomb_producto', $producto->nomb_producto, ['class' => 'form-control', 'placeholder' => 'Nombre del producto'])}}
	</div>

	<div class="form-group">
		{{Form::number('precio_unitario', $producto->precio_unitario, ['class' => 'form-control', 'placeholder' => 'Precio Unitario del producto'])}}
	</div>

	<div class="form-group">
		{{Form::number('id_categoria', $producto->id_categoria, ['class' => 'form-control', 'placeholder' => 'Categoría del producto'])}}
	</div>

	<div class="form-group">
		{{Form::text('estado', $producto->estado, ['class' => 'form-control', 'placeholder' => 'Estado'])}}
	</div>

	<div class="form-group text-right">
		<a href="{{url('/productos')}}">Regresar al listado de Productos</a>
		<input type="submit" value="enviar" class="btn btn-success">
	</div>
{!!Form::close()!!}