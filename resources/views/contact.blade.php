@include('header')

<main class="main-contact">

    <div class="galery__container">
        <div id="galery__img-1">
            <img src="img/galeria/Mostrador.jpg">
        </div>
        <div id="galery__img-2">
            <img src="img/galeria/ferre2.jpg">
        </div>
    </div>

    <div class="contact-map">
        <div class="form__container">
            <h2 class="form__container-title">¡Contáctanos!</h2>
            <p class="form__container-introduction">
                Envianos un correo a nuestro email ferreteria@agserviciossrl.com o completa el siguiente formulario:
            </p>
            <form method="POST" action="{{ route('contact.store') }}" class="form">
                @csrf
                <div class="form__input-container">
                    <input type="text" name="asunto" id="asunto" placeholder="Asunto" required>
                </div>
                <div class="form__input-container">
                    <input type="text" name="email" id="email" placeholder="correo@gmail.com" required>
                    <label>Email invalido</label>
                </div>
                <div class="form__textarea-container">
                    <textarea name="msg" id="msg" placeholder="Mensaje" required></textarea>
                    <label>Mensaje vacio</label>
                </div>
                <div class="form__submit-container">
                    <input type="submit" name="Enviar" value="Enviar">
                </div>
            </form>
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
        <div class="local-data__container">
            <ul class="local-data__ul">
                <li class="local-data__li local-data__title">UBICACION</li>
                <li class="local-data__data">Intendente M. Quindimil 118, CP 1824</li>
                <li class="local-data__data">Lanus Oeste, Buenos Aires, Argentina</li>

                <span class="separador"></span>

                <li class="local-data__li local-data__title">TELEFONOS</li>
                <li class="local-data__data">(+54 11) 7705-1474</li>
                <li class="local-data__data">(+54 11) 3292-4361</li>


                <span class="separador"></span>

                <li class="local-data__li local-data__title">HORARIO</li>
                <li class="local-data__data">Lunes-Viernes: 08-18hs</li>
                <li class="local-data__data">Sabados: 09-13hs</li>


                <span class="separador"></span>

                <li class="local-data__li local-data__title">SIGUENOS EN</li>
                <a class="local-data__social-network" href="https://facebook.com/ferre.ag.7" target="_blank">
                    <i class="fab fa-facebook-square local-data__icon"></i>
                </a>
                <a class="local-data__social-network" href="https://instagram.com/ferreteriaagservicios/" target="_blank">
                    <i class="fab fa-instagram local-data__icon"></i>
                </a>
                <a class="local-data__social-network" href="https://api.whatsapp.com/send?phone=541132924361" target="_blank">
                    <i class="fab fa-whatsapp local-data__icon"></i>
                </a>


            </ul>
            <div class="map__container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13121.215028941155!2d-58.3931884!3d-34.6975177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1666c673689fff3f!2sFerreteria%20AG!5e0!3m2!1ses!2sar!4v1618174345515!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</main>
