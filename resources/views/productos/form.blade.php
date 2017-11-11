{!!Form::open(['url' => $url, 'method' => $method])!!}

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="form-group">
		<label>Nombre</label>
		{{Form::text('nomb_producto', $producto->nomb_producto, ['class' => 'form-control', 'placeholder' => 'Nombre del producto'])}}
	</div>

	<div class="form-group">
		<label>Precio Unitario</label>
		{{Form::number('precio_unitario', $producto->precio_unitario, ['class' => 'form-control', 'placeholder' => 'Precio Unitario del producto'])}}
	</div>

	<div class="form-group">
        <label>Categoría</label>
        <select name="id_categoria" class="form-control">
            <option value="">-- Escoja la categoría --</option>
            @foreach($categorias as $category)
	            <option value="{{ $category->id }}">{{$category->nomb_categoria}}</option>
            @endforeach
        </select>
    </div>

	<div class="form-group text-right">
		<a href="{{url('/productos')}}">Regresar al listado de Productos</a>
		<input type="submit" value="enviar" class="btn btn-success">
	</div>
{!!Form::close()!!}