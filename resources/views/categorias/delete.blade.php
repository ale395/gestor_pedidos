{!! Form::open(['url' => '/categorias/'.$categoria->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
	<button class="submit btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
{!! Form::close() !!}