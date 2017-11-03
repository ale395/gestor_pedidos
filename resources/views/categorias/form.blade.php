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
		{{Form::text('nomb_categoria', $categoria->nomb_categoria, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría'])}}
	</div>

	<div class="form-group text-right">
		<a href="{{url('/categorias')}}">Regresar al listado de Categorias</a>
		<button class="submit btn btn-success"><i class="fa fa-user-o" aria-hidden="true"></i> Guardar</button>
	</div>
{!!Form::close()!!}