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
			<div class = "col-lg-3 col-sm-3 col-md-3 col-xs-12">
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
			<div class = "col-lg-3 col-sm-3 col-md-3 col-xs-12">	
				<div class="form-group">
					<label>Cantidad</label>
					<input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="cantidad"></input>
				</div>
			</div>
			<div class = "col-lg-3 col-sm-3 col-md-3 col-xs-12">	
				<div class="form-group">
					<label>Prec. Unit.</label>
					<input type="number" name="pprecio_unitario" id="pprecio_unitario" class="form-control" placeholder="cantidad"></input>
				</div>
			</div>
			<div class = "col-lg-3 col-sm-3 col-md-3 col-xs-12">	
				<div class="form-group">
					<label>Total Artic.</label>
					
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label>Total</label>

	</div>

	<div class="form-group text-right">
		<a href="{{url('/productos')}}">Regresar al listado de Pedidos</a>
		<input type="submit" value="enviar" class="btn btn-success">
	</div>
{!!Form::close()!!}