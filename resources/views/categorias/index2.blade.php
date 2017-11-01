@extends("layouts.signin")

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Categorías</h1>
	</div>
	<div class="container">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($categorias as $category)
					<tr>
						<td>{{ $category->nomb_categoria}}</td>
						<td>
							<a href="{{url('/categorias/'.$category->id.'/edit')}}" class="btn btn-primary btn-sm">Editar</a>
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