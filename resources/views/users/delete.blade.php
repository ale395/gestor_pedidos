{!! Form::open(['url' => '/users/'.$user->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
	<input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
{!! Form::close() !!}