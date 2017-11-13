@extends("layouts.signin")

@section("content")
<div class="big-padding text-center blue-grey white-text">
	<h1>Pedidos </h1>
	<div><h1></h1></div>
</div>
<div class="container"> 
 	<table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tablePedidos"> 
 		<thead class="thead-inverse center-block">
 			<tr>
 				<th class="size-id table-text-center">Num Pedido</th>
 				<th class="size-id table-text-center">Fecha Pedido</th>
 				<th class="table-text-center">Cliente</th>
 				<th class="size-id table-text-center">Estado</td>
 				<th class="size-id table-text-center">Total</td>
 				<th class="size-acciones table-text-center">Acciones</th>
  			</tr>
 		</thead>
 		<tbody>
 			@foreach ($pedidos as $pedidos)
 				<tr>
 					<td class="size-id table-text-center">{{ $pedidos->num_pedido }}</td>
 					<td class="size-id table-text-center">{{ $pedidos->fecha }}</td>
 					<td>{{ $pedidos->get_cliente($pedidos->cliente) }}</td>
 					@if ($pedidos->estado == 'A')
 						<td class="size-id table-text-center">Pendiente</td>
 					@else
 						@if ($pedidos->estado == 'R')
 							<td class="size-id table-text-center">Rechazado</td>
 						@else
 							<td class="size-id table-text-center">Facturado</td>
 						@endif
 					@endif
 					
 					<td class="size-id derecha">{{ number_format($pedidos->total, 0) }}</td>
 					<td> 
						<a href="{{URL::action('PedidoControlador@show', $pedidos->id_pedido)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ver</a> 					
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