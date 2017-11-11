@extends("layouts.app");

@section("content")
<div class="big-padding text-center blue grey green-text">
	<h1>Pedidos </h1>
</div>
<div class="container"> 
 	<table class="table table-bordered"> 
 		<thead>
 			<tr>
 				<td>ID Pedido</td>
 				<td>Fecha Pedido</td>
 				<td>Cliente</td>
 				<td>Total</td>
 				<td>Acciones</td>
  			</tr>
 		</thead>
 		<tbody>
 			@foreach ($pedidos as $pedidos)
 				<tr>
 					<td>{{ $pedidos->id_pedido }}</td>
 					<td>{{ $pedidos->fecha }}</td>
 					<td>{{ $pedidos->cliente }}</td>
 					<td>{{ $pedidos->total }}</td>
 					<td> 
						<a href="{{url('/pedidos/'.$pedidos->id_pedido.'/edit')}}" class="btn btn-primary btn-sm">Editar 
						</a>
						@include('pedidos.delete', ['pedidos' => $pedidos])
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