@extends('layouts.signin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de Control</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Sesión Iniciada! Proximamente se mostrará el listado de Pedidos. --En Construcción--
                </div>
            </div>
        </div>
    </div>
</div>
@endsection