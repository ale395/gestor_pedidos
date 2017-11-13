@extends("layouts.app");

@section("content")
	<div class="container white">	
		<div class="form-group">
			<label>Num. Pedido</label>
			<p>{{ $pedidos->num_pedido }}</p>
		</div>

		<!-- 	
		<div class="input-group date" data-provide='datepicker'>
			<label>Fecha</label>
			{{Form::text('fecha', $pedidos->fecha, ['class' => 'form-control datepicker', 'placeholder' => ''])}}
		</div>
			-->
			 	
			<!-- en caso de emergencia, este nomas ya uso-->
			<div class="input-group date" data-provide='datepicker'>
			<label>Fecha</label>
			<p>{{ $pedidos->fecha }}</p>
		</div>

		<div class="form-group">
			<label>Cliente</label>
			<p>{{ $pedidos->cliente }}</p>
		</div>

		<div class="panel panel-primary">
			<div class="panel-body">
				<div class ="col-lg-12 col-sm-12 col-md-12 col-xs-12">	
					<table id="detalles" class="table table-stripped table-bordered table-condensed table-hover">
						<thead>

							<th>Articulo</th>
							<th>Cantidad</th>
							<th>Precio Unit.</th>
							<th>SubTotal</th>
						</thead>
						<tfoot>
							<th>Total</th>
							<th></th>
							<th></th>
							<th><h4 id="total">{{$pedidos->total}}</h4></th>				
						</tfoot>
						<tbody>
							@foreach($detalles as $det)
							<tr>
								<td>{{$det->producto}}</td>
								<td>{{$det->cantidad}}</td>
								<td>{{$det->precio_unitario}}</td>
								<td>{{$det->subtotal}}</td>								
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>		
	</div>
@endsection