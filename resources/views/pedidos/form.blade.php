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
		{{Form::text('id_pedido', $pedidos->id_pedido, ['class' => 'form-control', 'placeholder' => 'Num. del Pedido'])}}
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
	

 	<!--
 	<div class="input-group date" data-provide="datepicker">
    	<label>Fecha</label>
    	<input type="text" class="form-group">
    	<div class="input-group-addon">
    		<span class="glyphicon glyphicon-th"></span>
    	</div>
	</div>
	-->


	<div class="form-group">
		<label>Cliente</label>
		{{Form::text('cliente', $pedidos->cliente, ['class' => 'form-control', 'placeholder' => 'id del cliente'])}}
	</div>

	<div class="panel panel-primary">
		<div class="panel-body">
			<div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="form-group">
					<label>Articulo</label>
					<select name="pid_articulo" class="form-control" id="pid_articulo">
						@foreach($productos as $productos)
					</select>	
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