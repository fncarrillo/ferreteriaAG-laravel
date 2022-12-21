@include('header')

<main class="main-catalogue">

    <nav class="nav-catalogue">
        <ul class="nav-catalogue-ul">
            @foreach($categorias as $categoria)
             <li class="nav-catalogue-li"><a href="{{url(route('catalogue.show',$categoria->id_categoria))}}">{{ $categoria->categoria }}</a></li>
            @endforeach
        </ul>
    </nav>

    @if(isset($articulos))
        <div class="container">
            <div class="row justify-content-around">
                @foreach($articulos as $articulo)
                    <div class="col-6 card card-style">
                        <img src="{{asset('img/productos/')}}/{{$articulo->ruta_img}}" class="card-img-top" alt="...">
                        <div class="card-header" style="color: #000">
                            {{$articulo->nombre}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item descripcion">{{$articulo->medida1}} {{$articulo->medida2}}</li>
                            <li class="list-group-item precio">${{$articulo->precio_lista}}</li>
                        </ul>
                        <form method="POST" action="{{route('cart.store')}}">@csrf
                            <input id="id" name="id" type="hidden" value="{{$articulo->id_producto}}"><button class="carrito"><i class="fas fa-shopping-cart"></i></button>
                            <input type="hidden" value="{{ $articulo->nombre }}" id="name" name="name">
                            <input type="hidden" value="{{ $articulo->precio_lista }}" id="price" name="price">
                            <input type="hidden" value="{{ $articulo->ruta_img }}" id="img" name="img">
                            <input type="hidden" value="{{ $articulo->medida1 }}" id="medida1" name="medida1">
                            <input type="hidden" value="{{ $articulo->medida2 }}" id="medida2" name="medida2">
                            <input type="hidden" value="1" id="quantity" name="quantity">
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="contenedor-vacio"></div>
    @endif
</main>

@include('footer')
