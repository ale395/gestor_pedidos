{!! Form::open(['url' => '/pedidos/'.$pedidos ->id_pedido, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
	<button class="submit btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
{!! Form::close() !!}