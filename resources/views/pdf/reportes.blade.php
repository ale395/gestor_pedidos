@extends("layouts.signin")

@section("content") 
<div class="big-padding text-center blue-grey white-text">
	<h1>Reportes </h1>
	<div><h1></h1></div>
</div>
<div class="panel panel-primary">
	<div class="panel-body">
		<div class ="col-lg-12 col-sm-12 col-md-12 col-xs-12">	
			<table id="detalles" class="table table-stripped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre Reporte</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<tr>
						<td width="70%">Reporte de Pedidos</td>
						<td width="30%">
							<a href="crear_reporte_pedidos/1"><button type="button" id="btn_ver" class="btn btn-primary">Ver</button></a>
							<a href="crear_reporte_pedidos/2"><button type="button" id="btn_down" class="btn btn-primary">Descargar</button></a>		
						</td>			
					</tr>
					<tr>
						<td width="70%">Reporte de Productos</td>
						<td width="30%">
							<a href="{{route('productos.pdf')}}" target="_blank"><button type="button" id="btn_ver" class="btn btn-primary">Ver</button></a>
							<a href="{{route('descargarproductos.pdf')}}"><button type="button" id="btn_down" class="btn btn-primary">Descargar</button></a>		
						</td>			
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>		
@endsection

@push('scripts')
<script>
	
</script>

<!--
<div class="container"> 
 	<table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tablePedidos"> 
 		<thead class="thead-inverse center-block">
 			<tr>
 				<th class="size-id table-text-center">Nombre Reporte</th>
 				<th class="size-acciones table-text-center">Acciones</th>
  			</tr>
 		</thead>
 		<tbody>
			<tr>
				<td class="size-id table-text-center">Listado de Pedidos</td>
				<td class="size-id table-text-center">Listado de Pedidos</td>>

					<a href="crear_reporte_pedidos/1" class="btn btn-primary btn-sm">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ver</a> 					

					<a href="crear_reporte_pedidos/2" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Descargar</a> 

				</td> 
			</tr>
 		</tbody>
 	</table>
</div>
-->