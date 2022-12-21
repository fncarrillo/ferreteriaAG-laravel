@if(isset($estado) && $estado=="mostrar") <form class="form-perfil" method="GET" action="{{ route('perfil.edit',$usuario->id) }}"> @csrf @endif
@if(isset($estado) && $estado=="editar") <form class="form-perfil" method="POST" action="{{ route('perfil.update',$usuario->id) }}"> @method('put') @csrf @endif

        <div class="form-perfil-group">
        <label for="text">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$usuario->nombre}}" required @if(isset($estado) && $estado=="mostrar") readonly @endif>
        <label for="text">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" value="{{$usuario->apellido}}" @if(isset($estado) && $estado=="mostrar") readonly @endif>

        @if(isset($estado) && $estado=="mostrar")
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{$usuario->email}}" readonly>
        @endif
    </div>

    @if(isset($errors) && $errors->any())
        <div class="alert alert-danger" style="margin: 20px 0">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="form-button-group">
        @if(isset($estado) && $estado=="mostrar") <button type="submit" class="btn btn-primary">Editar</button> @endif
        @if(isset($estado) && $estado=="editar") <button type="submit" class="btn btn-primary">Guardar</button> @endif
    </div>
</form>
