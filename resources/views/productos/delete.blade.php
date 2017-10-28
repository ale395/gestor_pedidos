{!! Form::open(['url' => '/productos/'.$producto->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
	<input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
{!! Form::close() !!}