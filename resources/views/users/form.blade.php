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
		<label><h5>Nombre</h5></label>
		{{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre del usuario'])}}
		<label><h5>Correo Electrónico</h5></label>
		{{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Correo electrónico'])}}
	</div>

	<div class="form-group text-right">
		<a href="{{url('/users')}}">Regresar al listado de Usuarios</a>
		<input type="submit" value="enviar" class="btn btn-success">
	</div>
{!!Form::close()!!}