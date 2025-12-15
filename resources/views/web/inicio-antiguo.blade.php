@extends('layouts.web.layout-web')

@section('titulo', 'Inicio')

@section('contenido')

<!-- INICIO SECCION -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .bg-responsive {
        background-image: url('../../resource/1745530977_680ab0619e0f7IMAGEN%20DE%20FAMILIA.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        margin-top: -100px;

        /* height: 85vh; */
    }

    /* Para pantallas medianas (tablets) */
    @media (max-width: 1292px) {
        .bg-responsive {
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('../../resource/1741726302_67d0a25eba816portada-inicio-1-tablet.png');
        }
    }

    /* Para pantallas pequeñas (móviles) */
    @media (max-width: 987px) {
        .bg-responsive {
            width: 100%;
            /* height: 90vh; */
            background-position: center;
            background-repeat: no-repeat;
            /* background-size: contain; */
            background-image: url('../../resource/1741726309_67d0a265ce0a9portada-inicio-1-celular.png');
        }
    }
</style>

<div id="carouselExample" class="carousel slide text-white pointer-event" data-bs-ride="carousel"
    data-bs-interval="30000">
    <div class="carousel-inner" style="display: flex; align-items: center">
        <!-- Diapositiva 1 -->
        <div class="carousel-item text-center pb-5 active bg-responsive" style="height: 90vh">
            <div class="container-fluid" style="background-color: transparent">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <div class="row h-100">
                    <!-- Columna izquierda con imagen -->
                    <div class="col-lg-6 col-xl-4 col-md-12 justify-content-center text-center align-content-center aos-init aos-animate"
                        data-aos="slide-right" data-aos-duration="700" data-aos-delay="500">
                        <div class="d-lg-none">
                            <img src="../ayba/4.png" alt="" style="width: 80px; margin-top: -30px" />
                            <br />
                        </div>

                        <div>
                            <div class="d-xl-none d-lg-none">
                                <p>&nbsp;</p>

                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                            <div class="d-sm-none">
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>

                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                            <div class="d-none d-lg-block d-xl-none">
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                            <!-- Contenido encima -->
                            <div class="d-none d-lg-block mt-5"></div>
                            <div class="d-sm-none">
                                <span class="text-white fs-3"
                                    style="letter-spacing: 10px; font-family: Montserrat-Medium">HACIENDO
                                    REALIDAD</span>
                                <h4 class="text-warning fs-3" style="
                    letter-spacing: 10px;
                    font-family: Montserrat-Medium;
                    margin-top: -5px;
                  ">
                                    TU HOGAR
                                </h4>
                            </div>

                            <div class="d-none d-sm-block">
                                <span class="text-white fs-6"
                                    style="letter-spacing: 10px; font-family: Montserrat-Medium">HACIENDO
                                    REALIDAD</span>
                                <h4 class="text-warning fs-5" style="
                    letter-spacing: 10px;
                    font-family: Montserrat-Medium;
                    margin-top: -5px;
                  ">
                                    TU HOGAR
                                </h4>
                                <div class="mt-2 mb-3 subrayado mx-auto"></div>
                            </div>
                            ¡No pierdas más tiempo y asegura el lote de tus
                            <br class="d-none d-lg-block" />
                            sueños hoy mismo, con facilidades de pago y
                            <br class="d-none d-lg-block" />
                            ubicaciones estratégicas!

                            <p></p>
                        </div>
                    </div>
                    <!-- Columna central con imagen adicional -->
                    <div class="d-none d-lg-block col-lg-1 d-xl-block col-xl-4 align-content-center"></div>

                    <!-- Columna derecha con formulario -->
                    <div class="col col-md-12 col-lg-4 col-xl-3 col-sm-12 aos-init aos-animate">
                        <div class="d-none d-lg-block">
                            <img src="../ayba/4.png" alt="" style="width: 150px; margin-top: 350px"
                                data-aos="flip-right" data-aos-duration="1700" data-aos-delay="500" />
                            <br />
                        </div>
                    </div>
                </div>
                <span style="font-size: 9px"> </span>
            </div>
            <span style="font-size: 9px"> </span>
        </div>
        <span style="font-size: 9px"> </span><!-- Diapositiva 2: Video de YouTube -->
        <div class="carousel-item position-relative" style="height: 756px">
            <div class="row">
                <div class="col-12 col-sm-12 col-xl-8 bg-black">
                    <iframe
                        src="https://www.youtube.com/embed/68tbz0AyBUs?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=68tbz0AyBUs&amp;controls=0&amp;showinfo=0&amp;modestbranding=1"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""
                        style="object-fit: cover; width: 100%; height: 773px"></iframe>
                </div>
                <div class="d-none d-sm-block col-xl-4 col-12 container py-5 text-center align-content-center d-flex"
                    style="
            background-image: url('../resource/1738091479_portada-descubre-nuestros-proyectos-escritorio.jpg');
          ">
                    <div class="p-5 rounded" style="
              background-color: #ffffff;
              color: rgb(100, 100, 100);
              box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3);
              margin-top: 50px;
            ">
                        <p class="text-center text-light mb-4">
                            <b>
                                <span style="font-size: 16px; color: #055261">QUIERO INFORMACIÓN DE UN LOTE</span></b>
                        </p>

                        <select class="form-control" name="project_id" id="project_id_2" style="
                color: white;
                background-color: rgb(230, 230, 230);
                color: rgb(124, 124, 124);
                font-family: Montserrat-SemiBold;
              ">
                            <option value="">Seleccione un proyecto</option>
                        </select>
                        <br />

                        <div class="mb-3">
                            <input type="text" class="form-control" name="names" placeholder="Nombres y Apellidos:"
                                style="
                  width: 100%;
                  background-color: rgb(230, 230, 230);
                  color: rgb(124, 124, 124);
                  font-family: Montserrat-SemiBold;
                " />
                        </div>
                        <div class="mb-3">
                            <input type="text" id="phone_2" class="form-control" name="cellphone"
                                placeholder="Número de Teléfono" style="
                  width: 100%;
                  background-color: rgb(230, 230, 230);
                  color: rgb(124, 124, 124);
                  font-family: Montserrat-SemiBold;
                " />
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="dni" name="dni" placeholder="Número de DNI"
                                style="
                  width: 100%;
                  background-color: rgb(230, 230, 230);
                  color: rgb(124, 124, 124);
                  font-family: Montserrat-SemiBold;
                " />
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="message" name="message" placeholder="Mensaje"
                                style="
                  width: 100%;
                  background-color: rgb(230, 230, 230);
                  color: rgb(124, 124, 124);
                  font-family: Montserrat-SemiBold;
                " maxlength="200" oninput="updateCounter()" />
                            <div class="form-text">
                                <p>
                                    <span id="charCount"><span style="font-size: 8px; color: black">0</span></span><span
                                        style="font-size: 8px">/200 caracteres</span>
                                </p>
                            </div>
                        </div>

                        <div class="form-check text-start">
                            <input class="form-check-input" type="checkbox" id="txtTratamientoDatos"
                                name="data_aprobed_1" value="true" />
                            <label class="form-check-label fs-3" for="txtTratamientoDatos">
                                <span class="fs-2">He leído y acepto la </span>
                                <a class="text-warning fs-2" data-bs-toggle="modal"
                                    data-bs-target="#bs-example-modal-xlg2" style="cursor: pointer">
                                    Política para envío de comunicaciones comerciales.
                                </a>
                            </label>
                        </div>

                        <div class="form-check text-start">
                            <input class="form-check-input" type="checkbox" id="txtTratamientoDatos2"
                                name="data_aprobed_2" value="true" />
                            <label class="form-check-label fs-3" for="txtTratamientoDatos2">
                                <span class="fs-2">He leído y acepto el </span>
                                <a class="text-warning fs-2" data-bs-toggle="modal"
                                    data-bs-target="#bs-example-modal-xlg" style="cursor: pointer">
                                    Tratamiento de mis datos personales.
                                </a>
                            </label>
                        </div>

                        <div class="text-center">
                            <span style="font-size: 9px"> </span><button type="button"
                                class="w-xs-100 mt-3 btn btn-warning btn-block" disabled=""
                                onclick="CustomerStorePublic();" style="
                  color: white;
                  border-radius: 100px;
                  background-color: #f6a42c;
                  width: 180px;
                ">
                                <span style="font-size: 9px">
                                    <span style="font-family: Montserrat-Bold; font-size: 12px">Enviar mis datos</span>
                                </span></button><span style="font-size: 9px"> </span>
                        </div>
                        <span style="font-size: 9px"> </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item text-center py-5" style="
        background-image: url('../resource/1734733260_fondo-.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100vw;
        height: 756px;
      ">
            <div class="container-fluid" style="background-color: transparent">
                <div class="row h-100 text-center align-content-center justify-content-center">
                    <!-- Columna izquierda con imagen -->
                    <div class="mt-5 ml-5 col-lg-6 col-xl-3 col-md-6 text-center align-content-center">
                        <div style="" class="pt-sm-1">
                            <!-- Contenido encima -->
                            <img src="../ayba/4.png" alt="" width="50px" />
                            <h4 class="font-weight-bold text-warning fs-5" style="letter-spacing: 10px">
                                LOTES ENTREGADOS
                            </h4>

                            <h4 class="text-white font-weight-bold fs-5" style="letter-spacing: 10px">
                                TERRA GALICIA <br />
                                Y LUGO
                            </h4>

                            <p class="lead mb-4 fs-3"></p>
                            <div class="container">
                                ¡Así como hemos cambiado la vida de muchas familias, podemos
                                cambiar la tuya!
                            </div>
                            <img src="../resource/1735944556_logos.png" width="250px" alt="" />
                            <p></p>
                        </div>
                    </div>
                    <!-- Columna central con imagen adicional -->
                    <div
                        class="d-none d-lg-block d-md-block d-xl-block col-xl-7 col-lg-6 col-md-6 align-content-center">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                        <img src="../resource/1735568084_imagenes.png" alt="Imagen central" width="100%"
                            class="note-float-right" style="
                float: right;
                width: 100%;
                padding-bottom: 38px;
                padding-top: 38px;
              " />
                        <p></p>
                    </div>

                    <span style="font-size: 9px"> </span>
                </div>
                <span style="font-size: 9px"> </span>
            </div>
            <span style="font-size: 9px"> </span>
        </div>
    </div>
    <!-- Indicadores del Carrusel -->
    <div class="carousel-indicators mb-3">
        <button type="button" style="
        background-color: transparent;
        border: solid 3px orange;
        width: 15px;
        height: 15px;
        border-top: none;
        border-right: none;
        transform: rotate(135deg);
        margin-right: 20px;
      " data-bs-target="#carouselExample" data-bs-slide-to="0" aria-label="Diapositiva 2" class="active"
            aria-current="true"></button>
        <button type="button" style="
        background-color: transparent;
        border: solid 3px orange;
        width: 15px;
        height: 15px;
        border-top: none;
        border-right: none;
        transform: rotate(135deg);
        margin-right: 20px;
      " data-bs-target="#carouselExample" data-bs-slide-to="1" class="" aria-label="Diapositiva 1"></button>
        <button type="button" style="
        background-color: transparent;
        border: solid 3px orange;
        width: 15px;
        height: 15px;
        border-top: none;
        border-right: none;
        transform: rotate(135deg);
        margin-right: 20px;
      " data-bs-target="#carouselExample" data-bs-slide-to="2" class="" aria-label="Diapositiva 3"></button>
    </div>
</div>
<p></p>
<div class="container-fluid text-light py-3 bg-white" data-aos="slide-up" data-aos-delay="300" data-aos-duration="1500">
    <div class="text-center">
        <div class="container py-1">
            <h4 class="d-sm-none text-center display-10" style="margin: 20px; font-family: Montserrat-SemiBold">
                <span style="color: #03424e; word-spacing: 10px; letter-spacing: 5px">VIVE EN LA</span><br />
                <b style="
            font-family: Montserrat-SemiBold;
            word-spacing: 10px;
            letter-spacing: 5px;
          ">MEJOR ZONA</b>
            </h4>
            <h4 class="d-none d-sm-block text-center display-6" style="margin: 20px; font-family: Montserrat-SemiBold">
                <span style="color: #03424e; word-spacing: 10px; letter-spacing: 15px">VIVE EN LA</span><br />
                <b style="
            font-family: Montserrat-SemiBold;
            word-spacing: 10px;
            letter-spacing: 15px;
          ">MEJOR ZONA</b>
            </h4>
            <div class="subrayado mx-auto"></div>

            <p>&nbsp;&nbsp;</p>
            <!-- Carrusel para pantallas pequeñas y medianas -->
            <div id="responsiveCarousel" class="carousel slide d-lg-none pointer-event" data-bs-ride="carousel"
                data-bs-interval="5000">
                <div class="carousel-inner">
                    <!-- Primera diapositiva -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-4 mb-3">
                                <lite-youtube videoid="rdxrSIrZISE" style="width: 100%; border: solid 1px #f4a623"
                                    class="rounded-1 border-2" title="Play: Video"><noscript>
                                        <iframe credentialless frameborder="0" title="Video"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen
                                            src="https://www.youtube.com/embed/rdxrSIrZISE?autoplay=1&start=0&null"></iframe></noscript><noscript>
                                        <iframe credentialless frameborder="0" title="Video"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen
                                            src="https://www.youtube.com/embed/rdxrSIrZISE?autoplay=1&start=0&null"></iframe></noscript>
                                </lite-youtube>
                            </div>
                        </div>
                    </div>
                    <!-- Segunda diapositiva -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-4 mb-3">
                                <lite-youtube videoid="uuw6UDjl0oo" style="width: 100%; border: solid 1px #f4a623"
                                    class="rounded-1 border-2" title="Play: Video"><noscript>
                                        <iframe credentialless frameborder="0" title="Video"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen
                                            src="https://www.youtube.com/embed/uuw6UDjl0oo?autoplay=1&start=0&null"></iframe></noscript><noscript>
                                        <iframe credentialless frameborder="0" title="Video"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen
                                            src="https://www.youtube.com/embed/uuw6UDjl0oo?autoplay=1&start=0&null"></iframe></noscript>
                                </lite-youtube>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-4 mb-3">
                                <lite-youtube videoid="aguyG7M828M" style="width: 100%; border: solid 1px #f4a623"
                                    class="rounded-1 border-2" title="Play: Video"><noscript>
                                        <iframe credentialless frameborder="0" title="Video"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen
                                            src="https://www.youtube.com/embed/aguyG7M828M?autoplay=1&start=0&null"></iframe></noscript><noscript>
                                        <iframe credentialless frameborder="0" title="Video"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen
                                            src="https://www.youtube.com/embed/aguyG7M828M?autoplay=1&start=0&null"></iframe></noscript>
                                </lite-youtube>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controles del carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#responsiveCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#responsiveCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

            <!-- Grilla para pantallas grandes -->
            <!-- Carrusel solo para pantallas grandes -->
            <div id="videoCarousel" class="carousel slide d-none d-lg-block mt-4 position-relative">
                <div class="carousel-inner">
                    <!-- Primera página de videos -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <!-- Imagen o div clickable -->

                                <div onclick="openVideo('rdxrSIrZISE')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <!-- Miniatura del video -->
                                    <img src="https://img.youtube.com/vi/rdxrSIrZISE/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />

                                    <!-- Botón rojo de Play (simulado con CSS) -->
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div onclick="openVideo('uuw6UDjl0oo')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <!-- Miniatura del video -->
                                    <img src="https://img.youtube.com/vi/uuw6UDjl0oo/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />

                                    <!-- Botón rojo de Play -->
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div onclick="openVideo('aguyG7M828M')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <!-- Miniatura del video -->
                                    <img src="https://img.youtube.com/vi/aguyG7M828M/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />

                                    <!-- Botón rojo de Play centrado -->
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Segunda página de videos (duplicados) -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <div onclick="openVideo('7A0_0K7AoAQ')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <img src="https://img.youtube.com/vi/7A0_0K7AoAQ/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div onclick="openVideo('0BaW0hi5_tI')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <img src="https://img.youtube.com/vi/0BaW0hi5_tI/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div onclick="openVideo('AlMNtbwCusM')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <img src="https://img.youtube.com/vi/AlMNtbwCusM/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <div onclick="openVideo('RCQYh-kKMyE')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <img src="https://img.youtube.com/vi/RCQYh-kKMyE/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div onclick="openVideo('UP3Cp61TqGM')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <img src="https://img.youtube.com/vi/UP3Cp61TqGM/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div onclick="openVideo('us4db_NzSdE')" style="
                    cursor: pointer;
                    border: 2px solid #f4a623;
                    border-radius: 10px;
                    overflow: hidden;
                    position: relative;
                  ">
                                    <img src="https://img.youtube.com/vi/us4db_NzSdE/hqdefault.jpg" alt="Video preview"
                                        style="
                      width: 100%;
                      height: 250px;
                      object-fit: cover;
                      display: block;
                      border-radius: 10px;
                    " />
                                    <div style="
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      width: 100px;
                      height: 80px;
                      background: url('https://img.icons8.com/ios-filled/100/fa314a/youtube-play.png')
                        no-repeat center center;
                      background-size: contain;
                    "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Flecha izquierda más alejada -->
                <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev"
                    style="left: -60px">
                    <span class="carousel-control-prev-icon" aria-hidden="true"
                        style="background-color: #f4a623; width: 20px; height: 20px"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>

                <!-- Flecha derecha más alejada -->
                <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next"
                    style="right: -60px">
                    <span class="carousel-control-next-icon" aria-hidden="true"
                        style="background-color: #f4a623; width: 20px; height: 20px"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>

    <div></div>
</div>
<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" class="py-4" style="background-color: #f7f7f7">
    <div class="container">
        <h4 class="d-sm-none text-center display-10" style="
        margin: 20px;
        font-family: Montserrat-SemiBold;
        letter-spacing: 2px;
      ">
            <span style="color: #03424e">¿POR QUÉ</span><br />
            INVERTIR CON NOSOTROS?
        </h4>
        <h4 class="d-none d-sm-block text-center display-6" style="
        margin: 20px;
        font-family: Montserrat-SemiBold;
        letter-spacing: 15px;
      ">
            <span style="color: #03424e">¿POR QUÉ</span><br />
            INVERTIR CON NOSOTROS?
        </h4>
        <div class="subrayado mx-auto my-md-1 mb-sm-0"></div>

        <!-- Carrusel (visible solo en pantallas pequeñas) -->
        <div id="mobileCarousel" class="carousel slide d-md-none pointer-event" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- Tarjeta 1 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="
                border-radius: 20px;
                width: 18rem;
                background-color: #f7f7f7;
              ">
                            <div class="el-card-item pb-5" style="border-radius: 20px">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                                    style="margin-top: 5vh">
                                    <img src="../resource/1738095847_67993ce7b34f0inversion%20segura.svg"
                                        alt="Inversion Segura" style="width: 50%; border-radius: 0px" />
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title" style="color: #03424e">
                                        INVERSIÓN<br />SEGURA
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="
                border-radius: 20px;
                width: 18rem;
                background-color: #f7f7f7;
              ">
                            <div class="el-card-item pb-5" style="border-radius: 20px">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                                    style="margin-top: 5vh">
                                    <img src="../resource/1738096177_67993e314cb8drentabilidad%20a%20largo%20plazo.svg"
                                        alt="Rentabilidad a Largo Plazo" style="width: 50%; border-radius: 0px" />
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title" style="color: #03424e">
                                        RENTABILIDAD<br />A LARGO PLAZO
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="
                border-radius: 20px;
                width: 18rem;
                background-color: #f7f7f7;
              ">
                            <div class="el-card-item pb-5" style="border-radius: 20px">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                                    style="margin-top: 5vh">
                                    <img src="../resource/1738096259_67993e83879f3patrimonio%20para%20tu%20familia.svg"
                                        alt="Patrimonio Familiar" style="width: 50%; border-radius: 0px" />
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title" style="color: #03424e">
                                        PATRIMONIO PARA<br />TU FAMILIA
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 4 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="
                border-radius: 20px;
                width: 18rem;
                background-color: #f7f7f7;
              ">
                            <div class="el-card-item pb-5" style="border-radius: 20px">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                                    style="margin-top: 5vh">
                                    <img src="../resource/1738096338_67993ed21e9e1alta%20revalorizacion.svg"
                                        alt="Alta Revalorizacion" style="width: 50%; border-radius: 0px" />
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title" style="color: #03424e">
                                        ALTA<br />REVALORIZACIÓN
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controles del Carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mobileCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Grid de tarjetas (visible en pantallas medianas y grandes) -->
        <div class="row d-none d-md-flex el-element-overlay">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="flip-down" data-aos-delay="300" data-aos-duration="1000">
                <div class="card overflow-hidden" style="border-radius: 20px; background-color: #f7f7f7">
                    <div class="el-card-item pb-5" style="border-radius: 20px">
                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                            style="margin-top: 5vh">
                            <img src="../resource/1738095847_67993ce7b34f0inversion%20segura.svg" alt="Inversion Segura"
                                style="width: 50%; border-radius: 0px" />
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="mb-0 card-title" style="color: #03424e">
                                INVERSIÓN<br />SEGURA
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="flip-down" data-aos-delay="300" data-aos-duration="1000">
                <div class="card overflow-hidden" style="border-radius: 20px; background-color: #f7f7f7">
                    <div class="el-card-item pb-5" style="border-radius: 20px">
                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                            style="margin-top: 5vh">
                            <img src="../resource/1738096177_67993e314cb8drentabilidad%20a%20largo%20plazo.svg"
                                alt="Rentabilidad a Largo Plazo" style="width: 50%; border-radius: 0px" />
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="mb-0 card-title" style="color: #03424e">
                                RENTABILIDAD<br />A LARGO PLAZO
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="flip-down" data-aos-delay="300" data-aos-duration="1000">
                <div class="card overflow-hidden" style="border-radius: 20px; background-color: #f7f7f7">
                    <div class="el-card-item pb-5" style="border-radius: 20px">
                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                            style="margin-top: 5vh">
                            <img src="../resource/1738096259_67993e83879f3patrimonio%20para%20tu%20familia.svg"
                                alt="Patrimonio Familiar" style="width: 50%; border-radius: 0px" />
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="mb-0 card-title" style="color: #03424e">
                                PATRIMONIO PARA<br />TU FAMILIA
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="flip-down" data-aos-delay="300" data-aos-duration="1000">
                <div class="card overflow-hidden" style="border-radius: 20px; background-color: #f7f7f7">
                    <div class="el-card-item pb-5" style="border-radius: 20px">
                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                            style="margin-top: 5vh">
                            <img src="../resource/1738096338_67993ed21e9e1alta%20revalorizacion.svg"
                                alt="Alta Revalorización" style="width: 50%; border-radius: 0px" />
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="mb-0 card-title" style="color: #03424e">
                                ALTA<br />REVALORIZACIÓN
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" style="
    background-image: url('../resource/1734733260_fondo-.jpg');
    background-repeat: no-repeat;
    background-size: auto 100%;
    background-position: center;
  ">
    <h4 class="d-none d-sm-block text-center display-6 pt-3 pb-2"
        style="margin: 15px; font-family: Montserrat-SemiBold; letter-spacing: 15px">
        <span style="color: #ffffff">DESCUBRE</span><br />
        NUESTROS PROYECTOS
    </h4>
    <h4 class="d-sm-none text-center display-10 pt-3"
        style="margin: 15px; font-family: Montserrat-SemiBold; letter-spacing: 5px">
        <span style="color: #ffffff">DESCUBRE</span><br />
        NUESTROS PROYECTOS
    </h4>
    <div class="subrayado mx-auto mb-5"></div>

    <!-- Carrusel para pantallas pequeñas -->
    <div id="responsiveCarousel6" class="carousel slide d-md-none pointer-event" data-bs-interval="3000"
        data-bs-ride="carousel">
        <div class="container">
            <div class="carousel-inner">
                <!-- Tarjeta 1 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card position-relative" style="
                width: 80%;
                background-image: url('../../resource/1738276853_679bfff554735SAN%20ANDRES.png');
                background-position: center;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease-in-out;
              " onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>

                            {{--
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto"
                                style="width: 100%; height: 220px; object-fit: cover" />
                            --}}
                            <div class="card-body bg-white" style="
                  height: 120px;
                  width: 85%;
                  border-top-right-radius: 10px;
                  border-bottom-right-radius: 10px;
                ">
                                <h5 class="fs-6 text-uppercase" style="color: #005563; margin-top: -13px">
                                    Proyecto <br />
                                    San Andrés
                                </h5>
                                <p class="" style="color: #a3a3a3">Lotes desde 120 m2</p>
                            </div>
                            <a href="../../proyectos/nuevo_huaral">
                                <div class="d-flex align-items-center justify-content-center position-absolute" style="
                    background: #ffa726;
                    border-radius: 20%;
                    width: 50px;
                    height: 50px;
                    bottom: 5%;
                    right: 9%;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                  ">
                                    <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset=""
                                        width="50%" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card position-relative" style="
                width: 80%;
                background-image: url('../resource/1738333326_679cdc8e7d400LAGOON%20VILLAGE.png');
                background-position: center;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease-in-out;
              " onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>

                            {{--
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto"
                                style="width: 100%; height: 220px; object-fit: cover" />
                            --}}
                            <div class="card-body bg-white" style="
                  height: 120px;
                  width: 85%;
                  border-top-right-radius: 10px;
                  border-bottom-right-radius: 10px;
                ">
                                <h5 class="fs-6 text-uppercase" style="color: #005563; margin-top: -13px">
                                    PROYECTO <br />
                                    LAGOON VILLAGE
                                </h5>
                                <p class="" style="color: #a3a3a3">Lotes desde 120 m2</p>
                            </div>
                            <a href="../../proyectos/nuevo_huaral">
                                <div class="d-flex align-items-center justify-content-center position-absolute" style="
                    background: #ffa726;
                    border-radius: 20%;
                    width: 50px;
                    height: 50px;
                    bottom: 5%;
                    right: 9%;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                  ">
                                    <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset=""
                                        width="50%" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card position-relative" style="
                width: 80%;
                background-image: url('../resource/1738333385_679cdcc9438c7Jumeirah.png');
                background-position: center;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease-in-out;
              " onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>

                            {{--
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto"
                                style="width: 100%; height: 220px; object-fit: cover" />
                            --}}
                            <div class="card-body bg-white" style="
                  height: 120px;
                  width: 85%;
                  border-top-right-radius: 10px;
                  border-bottom-right-radius: 10px;
                ">
                                <h5 class="fs-6 text-uppercase" style="color: #005563; margin-top: -13px">
                                    PROYECTO <br />
                                    JUMEIRAH LAKE
                                </h5>
                                <p class="" style="color: #a3a3a3">Lotes desde 120 m2</p>
                            </div>
                            <a href="../../proyectos/jumeirah">
                                <div class="d-flex align-items-center justify-content-center position-absolute" style="
                    background: #ffa726;
                    border-radius: 20%;
                    width: 50px;
                    height: 50px;
                    bottom: 5%;
                    right: 9%;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                  ">
                                    <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset=""
                                        width="50%" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controles del Carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#responsiveCarousel6" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#responsiveCarousel6" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <!-- Grilla para pantallas medianas y grandes -->
        <div class="row d-none d-md-flex justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-left" data-aos-delay="300"
                data-aos-duration="1000">
                <div class="card position-relative" style="
            background-image: url('../../resource/1738276853_679bfff554735SAN%20ANDRES.png');
            background-position: center;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
          " onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                    {{--
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto"
                        style="width: 100%; height: 220px; object-fit: cover" />
                    --}}
                    <div class="card-body bg-white" style="
              height: 120px;
              width: 85%;
              border-top-right-radius: 10px;
              border-bottom-right-radius: 10px;
            ">
                        <h5 class="fs-6 text-uppercase" style="color: #005563; margin-left: 10px; margin-top: -10px">
                            Proyecto <br />
                            San Andrés
                        </h5>
                        <p class="" style="color: #a3a3a3; margin-left: 10px">
                            Lotes desde 120 m2
                        </p>
                    </div>
                    <a href="../../proyectos/nuevo_huaral">
                        <div class="d-flex align-items-center justify-content-center position-absolute" style="
                background: #ffa726;
                border-radius: 20%;
                width: 70px;
                height: 70px;
                bottom: 5%;
                right: 9%;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
              ">
                            <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset=""
                                width="50%" />
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-left" data-aos-delay="300"
                data-aos-duration="1000">
                <div class="card position-relative" style="
            background-image: url('../resource/1738333326_679cdc8e7d400LAGOON%20VILLAGE.png');
            background-position: center;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
          " onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                    {{--
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto"
                        style="width: 100%; height: 220px; object-fit: cover" />
                    --}}
                    <div class="card-body bg-white" style="
              height: 120px;
              width: 85%;
              border-top-right-radius: 10px;
              border-bottom-right-radius: 10px;
            ">
                        <h5 class="fs-6 text-uppercase" style="color: #005563; margin-left: 10px; margin-top: -10px">
                            PROYECTO
                            <br />
                            LAGOON VILLAGE
                        </h5>
                        <p class="" style="color: #a3a3a3; margin-left: 10px">
                            Lotes desde 120 m2
                        </p>
                    </div>
                    <a href="../../proyectos/nuevo_huaral">
                        <div class="d-flex align-items-center justify-content-center position-absolute" style="
                background: #ffa726;
                border-radius: 20%;
                width: 70px;
                height: 70px;
                bottom: 5%;
                right: 9%;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
              ">
                            <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset=""
                                width="50%" />
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-left" data-aos-delay="300"
                data-aos-duration="1000">
                <div class="card position-relative" style="
            background-image: url('../resource/1738333385_679cdcc9438c7Jumeirah.png');
            background-position: center;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
          " onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                    {{--
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Proyecto"
                        style="width: 100%; height: 220px; object-fit: cover" />
                    --}}
                    <div class="card-body bg-white" style="
              height: 120px;
              width: 85%;
              border-top-right-radius: 10px;
              border-bottom-right-radius: 10px;
            ">
                        <h5 class="fs-6 text-uppercase" style="color: #005563; margin-left: 10px; margin-top: -10px">
                            PROYECTO
                            <br />
                            JUMEIRAH LAKE
                        </h5>
                        <p class="" style="color: #a3a3a3; margin-left: 10px">
                            Lotes desde 120 m2
                        </p>
                    </div>
                    <a href="../../proyectos/jumeirah">
                        <div class="d-flex align-items-center justify-content-center position-absolute" style="
                background: #ffa726;
                border-radius: 20%;
                width: 70px;
                height: 70px;
                bottom: 5%;
                right: 9%;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
              ">
                            <img src="../resource/1738274441_679bf6892121bflecha-blanca.svg" alt="" srcset=""
                                width="50%" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-1" style="
    background-image: url('../resource/1738100589_67994f6dc5aa9portada-confia-en-aybar-escritorio.jpg');
    margin-bottom: -16px;
    background-repeat: no-repeat;
    background-size: cover;

    background-position: center;
  ">
    <img src="../resource/1738168541_679a58dd6cbc9portada-confiaenaybar-celular.jpg" class="d-lg-none" alt="" style="
      border: solid white 5px;
      margin-bottom: -180px;
      margin-top: -4px;
      border-radius: 10px;
    " width="100%" />

    <div class="row">
        <!-- Imagen -->
        <div class="col-12 col-sm-12 col-lg-4 col-xl-6 mt-lg-5"></div>

        <!-- Contenido -->
        <div class="col-12 col-sm-12 col-xl-5 col-lg-8" style="margin-top: 50px">
            <div class="container">
                <div class="p-5 rounded" style="
            background-color: #ffffff;
            color: rgb(100, 100, 100);
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3);
          ">
                    <h4 class="d-sm-none text-center display-10 aos-init aos-animate" style="
              margin: 20px;
              font-family: Montserrat-SemiBold;
              letter-spacing: 5px;
            ">
                        <span style="color: #03424e" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1000">CONFÍA EN</span><br />
                        AYBAR CORP
                    </h4>
                    <h4 class="d-none d-sm-block text-center display-6 aos-init aos-animate" style="
              margin: 20px;
              font-family: Montserrat-SemiBold;
              letter-spacing: 15px;
            ">
                        <span style="color: #03424e" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1000">CONFÍA EN</span><br />
                        AYBAR CORP
                    </h4>
                    <div class="subrayado mx-auto mb-5"></div>

                    <p class="fs-6 text-center" style="color: #03424e" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="1000">
                        Construye un futuro sólido para tu familia
                        <br class="d-none d-sm-block" />
                        invirtiendo en confianza.
                    </p>

                    <!-- Carrusel para pantallas SM -->
                    <div id="carouselExample5" class="carousel slide d-md-none pointer-event" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Diapositiva 1 -->
                            <div class="carousel-item active">
                                <div class="card" style="
                    background-color: white;
                    color: #005463;
                    font-family: Montserrat-Regular;
                  ">
                                    <div class="card-body text-center">
                                        <img src="../../resource/1743542479_67ec58cf3f674Area%20recreativa.png"
                                            class="mb-1" width="100px" alt="" />
                                        <br /><b style="font-size: 9px">Áreas Recreativas para disfrutar en
                                            Familia<br /></b>
                                        <span style="font-size: 11px"> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 2 -->
                            <div class="carousel-item">
                                <div class="card" style="
                    background-color: white;
                    color: #005463;
                    font-family: Montserrat-Regular;
                  ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103930_67995c7a1bafde5anos.svg" class="mb-1"
                                            width="100px" alt="" />
                                        <br /><b style="font-size: 11px">Más de 5 años de experiencia en el
                                            mercado.<br /></b>
                                        <span style="font-size: 11px"> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 3 -->
                            <div class="carousel-item">
                                <div class="card" style="
                    background-color: white;
                    color: #005463;
                    font-family: Montserrat-Regular;
                  ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103935_67995c7fafb62d.svg" class="mb-1" width="100px"
                                            alt="" />
                                        <br /><b style="font-size: 10px">Más de 1000 familias adquirieron nuestros
                                            proyectos.<br /></b>
                                        <span style="font-size: 11px"> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 4 -->
                            <div class="carousel-item">
                                <div class="card" style="
                    background-color: white;
                    color: #005463;
                    font-family: Montserrat-Regular;
                  ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103999_67995cbf55c4cproyectos%20sostenibles.svg"
                                            class="mb-1" width="140px" alt="" />
                                        <br /><b style="font-size: 13px">PROYECTOS <br />SOSTENIBLES</b>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 5 -->
                            <div class="carousel-item">
                                <div class="card" style="
                    background-color: white;
                    color: #005463;
                    font-family: Montserrat-Regular;
                  ">
                                    <div class="card-body text-center">
                                        <img src="../resource/1738103970_67995ca291fcde300proyectos.svg" class="mb-1"
                                            width="100px" alt="" />
                                        <br /><b style="font-size: 11px">+ DE 30 PROYECTOS INMOBILIARIOS<br /></b>
                                        <span style="font-size: 11px">
                                            <b>Con la mejor inversión en la construcción de un futuro
                                                estable para tu familia.</b>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles del Carrusel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                    <!-- Grilla para pantallas MD y superiores -->
                    <div class="row d-none d-md-flex mt-4" data-aos="zoom-in" data-aos-delay="50"
                        data-aos-duration="1000">
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="
                  background-color: white;
                  color: #005463;
                  font-family: Montserrat-Regular;
                ">
                                <div class="card-body text-center">
                                    <img src="../../resource/1743542479_67ec58cf3f674Area%20recreativa.png" class="mb-1"
                                        width="100px" alt="" />
                                    <br /><b style="font-size: 12px">Áreas Recreativas para disfrutar en
                                        Familia<br /></b>
                                    <span style="font-size: 11px"> </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="
                  background-color: white;
                  color: #005463;
                  font-family: Montserrat-Regular;
                ">
                                <div class="card-body text-center">
                                    <img src="../resource/1738103930_67995c7a1bafde5anos.svg" class="mb-1" width="100px"
                                        alt="" />
                                    <br /><b style="font-size: 11px">Más de 5 años de experiencia en el
                                        mercado.<br /></b>
                                    <span style="font-size: 8px"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none col-md-3"></div>
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="
                  background-color: white;
                  color: #005463;
                  font-family: Montserrat-Regular;
                ">
                                <div class="card-body text-center">
                                    <img src="../resource/1738103935_67995c7fafb62d.svg" class="mb-1" width="100px"
                                        alt="" />
                                    <br /><b style="font-size: 11px">Más de 1000 familias adquirieron nuestros
                                        proyectos.<br /></b>
                                    <span style="font-size: 11px"> </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-xl-6">
                            <div class="card" style="
                  background-color: white;
                  color: #005463;
                  font-family: Montserrat-Regular;
                ">
                                <div class="card-body text-center">
                                    <img src="../resource/1738103999_67995cbf55c4cproyectos%20sostenibles.svg"
                                        class="mb-1" width="140px" alt="" />
                                    <br /><b style="font-size: 13px">PROYECTOS <br />SOSTENIBLES</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-xl-6">
                            <div class="card" style="
                  background-color: white;
                  color: #005463;
                  font-family: Montserrat-Regular;
                ">
                                <div class="card-body text-center">
                                    <img src="../resource/1738103970_67995ca291fcde300proyectos.svg" class="mb-1"
                                        width="100px" alt="" />
                                    <br /><b style="font-size: 11px">+ DE 30 PROYECTOS INMOBILIARIOS<br /></b>
                                    <span style="font-size: 11px">
                                        <b>Con la mejor inversión en la construcción de un futuro
                                            estable para tu familia.</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-lg btn-hover-shadow" href="../../proyectos" style="
                color: white;
                border-radius: 5px;
                background-color: #f6a42c;
                width: 50%;
              ">
                            &nbsp;CONOCER MÁS&nbsp;<b style="color: #03424e; font-size: 30px"></b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection