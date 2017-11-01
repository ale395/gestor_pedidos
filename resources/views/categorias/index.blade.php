@extends("layouts.signin")

@section("content")
	<div class="form-group">
        <h2>Select</h2>
        <select class="form-control">
            @foreach($categorias as $category)
            	<option>{{$category->nomb_categoria}}</option>
            @endforeach
        </select>
    </div>
@endsection