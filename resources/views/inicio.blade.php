@include('header')

<main class="main-inicio">
    <section class="presentation main-section">
        <p class="font" id="presentation">
            Somos una ferretería con mas de 10 años de experiencia en el rubro, siempre brindando la mejor atención
            y ayudándote a encontrar la solución más óptima a tu problema a través de nuestros productos.
        </p>
    </section>

    <span class="structure">
        <section class="catalogue__container main-section">

            <div class="icon-container">
                <i class="icon fas fa-box"></i>
            </div>
            <p class="font">
                Tenemos una amplia variedad de artículos, de rubros tales como bulonería, electricidad, sanitarios, herramientas,
                pinturas y artículos para el hogar.
                Puedes visitar nuestro catálogo para mas información.
            </p>
        </section>

        <section class="service_key__container main-section">
            <div class="icon-container">
                <i class="fas fa-key icon"></i>
            </div>

            <div class="service__galery">
                <div class="galery-container">
                    <img src="{{asset('img/galeria/key-machine (1).jpg')}}">
                    <img src="{{asset('img/galeria/key-machine (2).jpg')}}">
                </div>
            </div>

            <div class="font">
                Realizamos copias de llaves en el acto para puertas placa doble paleta tales como Trabex, Prive, Dac y Acytra entre las más conocidas.
            </div>
        </section>

        <section class="service__container main-section">
            <div class="icon-container">
                <i class="fas fa-file-invoice-dollar icon"></i>
            </div>
            <p class="font">
                ¿Tenés en mente algún tipo de proyecto en el que requieras de nuestros productos? ¡Contactános y te realizamos un presupuesto!
            </p>
        </section>
    </span>
</main>

@include('footer')
