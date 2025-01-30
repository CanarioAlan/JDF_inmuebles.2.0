<?php
require '../includes/funciones.php';
incluirTemplate('header')
?>

<main class="Propiedad">
    <h1 class="propiedad__titulo Titulo">Francia 1100</h1>
    <section class="propiedad">
        <div class="Info-Galeria">
            <div class="propiedades-img Galeria">
                <img src="../img/flecha-izq.svg" class="btns btn-izq Boton-Izquierdo" alt="indicador hacia la izquierda">
                <div class="img-propiedades Imagenes">
                    <img src="img/V30/img1.jpg" class="Imagen  img-prop activo" alt="foto de la propiedad">
                    <!-- <img src="img/V31/img2.jpg" class="Imagen img-prop" alt="foto de la propiedad"> -->
                    <!-- <img src="img/V31/img3.jpg" class="Imagen img-prop" alt="foto de la propiedad"> -->
                    <!-- <img src="img/V20/img4.jpg" class="Imagen img-prop" alt="foto de la propiedad"> -->
                </div>
                <img src="../img/flecha-der.svg" class="btns btn-der Boton Boton-Derecho" alt="indicador hacia la derecha">
                <p class="Alquilado">Alquilado</p>
            </div>
            <div class="Info-Completa">
                <ol class="Informacion">
                    <li class="items-Info"><img src="/img/baño.svg" alt="icono">1 Baño</li>
                    <li class="items-Info"><img src="/img/dormitorio.svg" alt="icono">2 Dormitorio</li>
                    <li class="items-Info"><img src="/img/garage.svg" alt="icono">1 Garaje</li>
                    <li class="items-Info"><img src="/img/M2.svg" alt="icono">350 Mt<sup>2</sup></li>
                </ol>
                <p class="Precio">Precio: <span>U$s: 100.000</span></p>
            </div>
        </div>
        <div class="Descripcion">
            <p class="Texto-Descripcion">Se vende muy linda Casa sobre Pje Arzamendi, a metros de Gral Paz 5800.
                Ingreso independiente al patio, living comedor, cocina comedor, 2 dormitorios amplios, baño, lindo patio con pisos de ceramico y parte de césped, lavadero cubierto amplio.
                Todos los servicios.
                Terreno 8 x 19
                U$S 79.000</p>
            <iframe class="iframe-Descripcion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.303254323069!2d-60.69800092358234!3d-31.625546306395165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5a9e9a1985e19%3A0x30be15bb20e278bb!2sBelgrano%204700%2C%20S3002FNW%20Santa%20Fe%20de%20la%20Vera%20Cruz%2C%20Santa%20Fe!5e0!3m2!1ses-419!2sar!4v1719881974186!5m2!1ses-419!2sar" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</main>
<?php
incluirTemplate('footer')
?>