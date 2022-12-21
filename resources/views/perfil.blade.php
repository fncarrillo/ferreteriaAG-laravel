@include('header')

<main class="main-perfil">
    <nav class="nav-perfil">
        <ul class="nav-perfil-ul">
            <li class="nav-perfil-li"><a href="{{route('perfil.index',$usuario->id)}}">Mis Pedidos</a></li>
            <li class="nav-perfil-li"><a href="{{route('perfil.edit',$usuario->id)}}">Editar Perfil</a></li>
            <li class="nav-perfil-li"><a href="{{route('perfil.show',$usuario->id)}}">Ver Perfil</a></li>
            <li class="nav-perfil-li"><form action="{{ route('login.destroy', $usuario->id) }}" method="post"> <input class="btn-oculto-cerrar-sesion" type="submit" value="Cerrar Sesion" /> @method('delete') @csrf </form></li>
        </ul>
    </nav>

    @if(isset($estado))
        @include('perfilform',["estado" => $estado])
    @else
        <div class="contenedor-vacio"></div>
    @endif

</main>

@include('footer')
