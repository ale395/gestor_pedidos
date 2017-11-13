{!!Form::open(['url' => $url, 'method' => $method ])!!}

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
		{{Form::text('nombre', $clientes->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre del cliente'])}}
	</div>

		<div class="form-group">
		<label><h5>Apellido</h5></label>
		{{Form::text('apellido', $clientes->apellido, ['class' => 'form-control', 'placeholder' => 'Apellido del cliente'])}}
	</div>

	<div class="form-group">
		<label><h5>Cedula o RUC</h5></label>
		{{Form::number('cedula', $clientes->cedula, ['class' => 'form-control', 'placeholder' => 'Cedula de identidad o ruc sin guion'])}}
	</div>

	<div class="form-group">
		<label><h5>Telefono</h5></label>
		{{Form::number('telefono', $clientes->telefono, ['class' => 'form-control', 'placeholder' => 'Telefono o celular del cliente'])}}
	</div>

	<div class="form-group">
		<label><h5>direccion</h5></label>
		{{Form::text('direccion', $clientes->direccion, ['class' => 'form-control', 'placeholder' => 'Lugar donde vive el cliente'])}}
	</div>

	<div class="form-group">
		<label><h5>Correo</h5></label>
		{{Form::text('correo', $clientes->correo, ['class' => 'form-control', 'placeholder' => 'Correo del cliente'])}}
	</div>

	<div class="form-group text-right">
		<a href="{{url('/clientes')}}">Regresar al clientes</a>
		<input type="submit" value="enviar" class="btn btn-success">
	</div>
{!!Form::close()!!}