<?php
require 'includes/funciones.php';
incluirTemplate('header')
?>
<main class="vista-propiedades P-Relativo">
    <i class='bx bx-filter btn-abrir P-Fixed'></i>
    <div class="menuFiltro D-flex">
        <i class='bx bx-x btn-cerrar'></i>
        <div class="lista-filtro D-flex">
            <button class="btn-Filtro filtro-activado" categoria="todo">todo</button>
            <button class="btn-Filtro" categoria="casa">casas</button>
            <button class="btn-Filtro" categoria="departamento">departamentos</button>
            <button class="btn-Filtro" categoria="quinta">quintas</button>
            <button class="btn-Filtro" categoria="cochera">cocheras</button>
            <button class="btn-Filtro" categoria="terrenos">terrenos</button>
            <button class="btn-Filtro" categoria="otros">otros</button>
        </div>
    </div>
    <div class="propiedades">
        <div class="Imagen">
            <div class="galeria">
                <img src="/Ventas/img/v1/img1.jpg" alt="Imagen de la propiedad a la venta">
            </div>
            <div class="precio-categoria">
                <p class="P-Absolute p-Precio">U$s 000.000</p>
                <p class="P-Absolute filtro">Casa</p>
            </div>
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
    <div class="propiedades">
        <div class="Imagen">
            <div class="galeria">
                <img src="/Ventas/img/v1/img1.jpg" alt="Imagen de la propiedad a la venta">
            </div>
            <div class="precio-categoria">
                <p class="P-Absolute p-Precio">U$s 000.000</p>
                <p class="P-Absolute filtro">Casa</p>
            </div>
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
</main>
<?php
incluirTemplate('footer')
?>