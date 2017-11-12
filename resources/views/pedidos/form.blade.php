{!!Form::open(['url' => $url, 'method' => $method])!!}

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
		<label>Num. Pedido</label>
		{{Form::text('num_pedido', $pedidos->num_pedido, ['class' => 'form-control', 'placeholder' => 'Num. del Pedido'])}}
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
		<div>
			<input type="text" name="fecha" id="datepicker"></p>
		</div>
	</div>

	<div class="form-group">
		<label>Cliente</label>
		{{Form::text('cliente', $pedidos->cliente, ['class' => 'form-control', 'placeholder' => 'id del cliente'])}}
	</div>

	<div class="panel panel-primary">
		<div class="panel-body">
			<div class = "col-lg-4 col-sm-4 col-md-4 col-xs-12">
				<div class="form-group">
					<label>Articulo</label>
					<select name="pid_articulo" class="form-control selectpicker" id="pid_articulo" data-live-search="true">
						@foreach($productos as $productos)
							<option value="{{$productos->id}}" >
								{{$productos->producto}}
							</option>						
						@endforeach	
					</select>	
				</div>
			</div>
			<div class = "col-lg-3 col-sm-2 col-md-2 col-xs-12">	
				<div class="form-group">
					<label>Cantidad</label>
					<input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="cantidad"></input>
				</div>
			</div>
			<div class = "col-lg-3 col-sm-3 col-md-2 col-xs-12">	
				<div class="form-group">
					<label>Prec. Unit.</label>
					<input type="number" name="pprecio_unitario" id="pprecio_unitario" class="form-control" placeholder="cantidad">
					</input>
				</div>
			</div>
			<div class = "col-lg-2 col-sm-2 col-md-2 col-xs-12">	
				<button type="button" id="btn_add" class="btn btn-primary">Agregar</button>	
			</div>

			<div class ="col-lg-12 col-sm-12 col-md-12 col-xs-12">	
				<table id="detalles" class="table table-stripped table-bordered table-condensed table-hover table-sm .table-responsive">
					<thead>
						<th>Opciones</th>
						<th>Articulo</th>
						<th>Cantidad</th>
						<th>Precio Unit.</th>
						<th>SubTotal</th>
					</thead>
					<tfoot>
						<th>Total</th>
						<th></th>
						<th></th>
						<th></th>
						<th><h4 id="total">S/. 0.00</h4></th>				
					</tfoot>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="form-group text-right">
		<a href="{{url('/productos')}}">Regresar al listado de Pedidos</a>
		<input id="guardar" type="submit" value="Guardar" class="btn btn-success">
	</div>
{!!Form::close()!!}

@push('scripts')
<script>
	$(document).ready(function(){
		$('#btn_add').click(function () {
			agregar(); 
		});
	});

	var cont = 0;
	total=0;      
	subtotal=[];

	function agregar()
	{
		idarticulo=$("#pid_articulo").val();
		articulo=$("#pid_articulo option:selected").text();
		cantidad=$("#pcantidad").val();
		precio_unitario=$("#pprecio_unitario").val();

		if(idarticulo!="" && cantidad!="" && cantidad>0 && precio_unitario!="")
		{
			subtotal[cont] = cantidad*precio_unitario;
			tota=total+subtotal[cont];

			var fila =' <tr class="selected" id"fila '+cont+'" > <td></td> </tr>';
		}
	}

	function limpiar() {
		$("#pcantidad").val("");
		$("#pprecio_unitario").val("");				
	}

	function evaluar() {
		if (total > 0) 
		{
			$("#guardar").show;
		} 
		else 
		{
			$("#guardar").hide;
		}
	}

</script>
@endpush
