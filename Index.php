<?php
require 'includes/funciones.php';
incluirTemplate('header')
?>
<main class="main">
    <section class="banner">
        <div class="Texto">
            <h1 class="C-Blanco">JDF & Asociados Inmobiliaria</h1>
            <p class="C-Blanco">Trabajamos con eficiencia, ética preofecional, creatividad y gran dinamismo frente a un mercado en cosntante cambio, generando así un buen negocio a largo plazo.</p>
        </div>
        <div class="degradado"></div>
    </section>
    <section class="buscador-rapido D-flex">
        <h2>Buscador de propiedades</h2>
        <a class="btn-Blanco Border-R T-Decoration btn-quiero C-BordoSec" href="venta.php">Quiero Comprar</a>
        <a class="btn-Blanco Border-R T-Decoration btn-quiero C-BordoSec" href="alquiler.php">Quiero Alquilar</a>
        <div class="busqueda">
            <!-- <input type="text" name="busqueda-rapida" id="busquedaRapida" placeholder="¿Donde queres mudarte?"> -->
            <select name="tipoPropiedad" id="tipoPropiedad">
                <option value="tipo de propiedad" selected disabled>Tipo de propiedad</option>
                <option value="todo">Todo</option>
                <option value="casa">Casas</option>
                <option value="departamento">Depertamento</option>
                <option value="quinta">Quintas</option>
                <option value="cochera">Cocheras</option>
                <option value="terreno">Terrenos</option>
                <option value="otros">Otros</option>
            </select>
            <button type="submit">Buscar</button>
        </div>
    </section>
    <section class="propiedad-recientes ">
        <div class="titulo-boton D-flex">
            <h3 class="C-BordoSec">Ventas</h3>
            <a href="#" class="C-Blanco btn-Bordo T-Decoration">Ver todas</a>
        </div>
        <div class="lista-propiedad D-flex P-Relativo carousel">
            <div class="contenedor-propiedad carousel">
                <div class="propiedades carousel-item">
                    <div class="Imagen swiper">
                        <div class="galeria swiper-wrapper">
                            <img src="/Ventas/img/v1/img1.jpg" alt="Imagen de la propiedad a la venta" class="swiper-slide">
                            <img src="/Ventas/img/v1/img2.jpg" alt="Imagen de la propiedad a la venta" class="swiper-slide">
                            <img src="/Ventas/img/v1/img3.jpg" alt="Imagen de la propiedad a la venta" class="swiper-slide">
                        </div>
                        <div class="precio-categoria">
                            <p class="P-Absolute p-Precio">U$s 000.000</p>
                            <p class="P-Absolute filtro">Casa</p>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                    <div class="Infomarcion">
                        <ol class="iconos-info P-Relativo">
                            <li><i class='bx bxs-bath'></i> 1</li>
                            <li><i class='bx bxs-car-garage'></i> 1</li>
                            <li><i class='bx bxs-ruler'></i> 350 Mt<sup>2</sup></li>
                            <li><i class='bx bxs-bed'></i> 1</li>
                        </ol>
                        <div class="datos-informacion">
                            <h3 class="C-Blanco">Rivadavia 9999</h3>
                            <div class="datos-localizacion">
                                <p class="C-Blanco">Provincia: <span>Santa fe</span></p>
                                <p class="C-Blanco">Localidad: <span>Capital</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <i class='bx bx-chevron-left prev btnes'></i>
            <i class='bx bx-chevron-right next btnes'></i>
            <i class='bx bx-chevrons-left restart btnes'></i>
        </div>
    </section>
    <section class="medio-banner">
        <div class="degradado"></div>
        <h2 class="C-Blanco sub-titulo">Tenemos lo que buscas</h2>
        <ol class="lista-mid-banner">
            <li class="icono-banner">
                <i class='bx bxs-home'></i>
                <p>Casa</p>
            </li>
            <li class="icono-banner">
                <i class='bx bxs-building-house'></i>
                <p>Edificios</p>
            </li>
            <li class="icono-banner">
                <i class='bx bxs-store'></i>
                <p>Negocios</p>
            </li>
            <li class="icono-banner">
                <i class='bx bxs-car-garage'></i>
                <p>Cocheras</p>
            </li>
        </ol>
    </section>
    <section class="propiedad-recientes">
        <div class="titulo-boton D-flex">
            <h3 class="C-BordoSec">Ventas</h3>
            <a href="#" class="C-Blanco btn-Bordo T-Decoration">Ver todas</a>
        </div>
        <div class="contenedor-propiedad">
            <div class="propiedades">
                <div class="Imagen swiper">
                    <div class="galeria swiper-wrapper">
                        <img src="/Ventas/img/v1/img1.jpg" alt="Imagen de la propiedad a la venta" class="swiper-slide">
                        <img src="/Ventas/img/v1/img2.jpg" alt="Imagen de la propiedad a la venta" class="swiper-slide">
                        <img src="/Ventas/img/v1/img3.jpg" alt="Imagen de la propiedad a la venta" class="swiper-slide">
                    </div>
                    <div class="precio-categoria">
                        <p class="P-Absolute p-Precio">U$s 000.000</p>
                        <p class="P-Absolute filtro">Casa</p>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
                <div class="Infomarcion">
                    <ol class="iconos-info P-Relativo">
                        <li><i class='bx bxs-bath'></i>1</li>
                        <li><i class='bx bxs-car-garage'></i>1</li>
                        <li><i class='bx bxs-ruler'></i>350 Mt<sup>2</sup></li>
                        <li><i class='bx bxs-bed'></i>1</li>
                    </ol>
                    <div class="datos-informacion">
                        <h3 class="C-Blanco">Rivadavia 9999</h3>
                        <div class="datos-localizacion">
                            <p class="C-Blanco">Provincia: <span>Santa fe</span></p>
                            <p class="C-Blanco">Localidad: <span>Capital</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
incluirTemplate('footer')
?>