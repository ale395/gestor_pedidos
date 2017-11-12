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
        <label><h5>Nombre</h5></label>
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nombre del usuario'])}}
    </div>

    <div class="form-group">
        <label><h5>Correo Electrónico</h5></label>
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Correo Electrónico'])}}
    </div>

    <div class="form-group">
        <label><h5>Contraseña</h5></label>
        {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría'])}}
    </div>

    <div class="form-group text-right">
        <a href="{{url('/users')}}">Regresar al listado de Usuarios</a>
        <button class="submit btn btn-success"><i class="fa fa-user-o" aria-hidden="true"></i> Guardar</button>
    </div>
{!!Form::close()!!}