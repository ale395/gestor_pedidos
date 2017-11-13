@extends("layouts.app");

@section("content")
<div class="big-padding text-center blue grey green-text">
	<h1>Pedidos </h1>
</div>
<div class="container"> 
 	<table class="table table-bordered"> 
 		<thead>
 			<tr>
 				<td>Num Pedido</td>
 				<td>Fecha Pedido</td>
 				<td>Cliente</td>
 				<td>Estado</td>
 				<td>Total</td>
 				<td>Acciones</td>
  			</tr>
 		</thead>
 		<tbody>
 			@foreach ($pedidos as $pedidos)
 				<tr>
 					<td>{{ $pedidos->num_pedido }}</td>
 					<td>{{ $pedidos->fecha }}</td>
 					<td>{{ $pedidos->cliente }}</td>
 					<td>{{ $pedidos->estado }}</td>
 					<td>{{ $pedidos->total }}</td>
 					<td> 
						<a href="{{URL::action('PedidoControlador@show', $pedidos->id_pedido)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Detalles</a> 						

						@include('pedidos.delete', ['pedidos' => $pedidos ])					
  					</td> 
 				</tr>
 			@endforeach 
 		</tbody>
 	</table>
</div>
<div class="floating">
	<a href="{{url('/pedidos/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection

<!--
						<a href="{{URL::action('PedidoControlador@show', $pedidos->id_pedido)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Detalles</a>
						<a href="{{url('/pedidos/show')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Detalles</a>

-->