@extends("layouts.signin")

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Categorías</h1>
	</div>
	<div class="container">
		<table class="table table-success table-bordered table-hover table-striped table-sm .table-responsive" id="tableCategorias">
			<thead class="thead-inverse center-block">
				<tr>
					<th class="size-id table-text-center"><strong>ID</strong></th>
					<th class="table-text-center"><strong>Nombre Categoría</strong></th>
					<th class="size-acciones table-text-center"><strong>Acciones</strong></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categorias as $category)
					<tr>
						<td class="size-id table-text-center">{{ $category->id}}</td>
						<td>{{ $category->nomb_categoria}}</td>
						<td class="size-acciones">
							
								<a href="{{url('/categorias/'.$category->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
								@include('categorias.delete', ['categoria' => $category])
							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/categorias/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection