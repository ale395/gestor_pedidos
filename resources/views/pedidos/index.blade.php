@extends("layouts.app");

@section("content")
 <div class="big-padding text-center blue grey white-text">
 	<h1>Pedidos </h1>
 </div>
 <div class="container"> 
 	<table class="table table-bordered"> 
 		<thead>
 			<tr>
 				<td>Num Pedido</td>
 				<td>Fecha Pedido</td>
 				<td>Cliente</td>
 				<td>Total</td>
  			</tr>
 		</thead>
 		<tbody>
 			@foreach ($pedidos as $pedidos)
 				<tr>
 					<td>{{ $pedidos->num_pedido }}</td>
 					<td>{{ $pedidos->fecha }}</td>
 					<td>{{ $pedidos->cliente }}</td>
 					<td>{{ $pedidos->estado }}</td>

 				</tr>
 			@endforeach 
 		</tbody>
 	</table>
 </div>


@endsection