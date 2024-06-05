<?php
require'includes/funciones.php';
incluirTemplate('header')
?>

    <main class="contacto-main">
        <section class="section-formulario">
            <h1 class="titulo-formulario">Formulario</h1>
            <hr class="hr-separacion">
            <form action="https://formsubmit.co/info@jdfinmuebles.com" method="POST"class="formulario">
                <fieldset class="formulario__fieldset">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </fieldset>
                <fieldset class="formulario__fieldset">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required>
                </fieldset>
                <fieldset class="formulario__fieldset">
                    <label for="telefono" class="form-label">Número de Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </fieldset>
                <fieldset class="formulario__fieldset">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" required>
                </fieldset>
                <fieldset class="formulario__fieldset textarea">
                    <label for="mensaje" class="form-label">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                </fieldset>
                <button class="fomulario___enviar" type="submit" value="Enviar">Enviar</button>
            </form>
        </section>
        <section class="separacion-mid">
            <div class="separacion"></div>
        </section>
        <section class="informacion">
            <img class="informacion-logo" src="/img/Logo-JDF-1.3.png" alt="Logo de JDF & asociados inmobiliaria">
            <hr class="hr-separacion">
            <p class="informacion-texto">Responderemos a los correos enviados dentro de estos horarios el mismo día. Los correos enviados fuera de estos horarios serán respondidos en nuestro siguiente horario de atención.
            </p>
            <h2 class="informacion-titulo-principal">Horarios</h2>
            <hr class="hr-separacion">
            <div class="informacion-hora-subtitulos">
                <h3 class="informacion-titulo">De lunes a Vieres de:</h3>
                <p class="informacion-horarios">09:00 - 11:00 hs</p>
                <p class="informacion-horarios">16:30 - 19:30 hs</p>
                <h3 class="informacion-titulo">Sábado, Domingo y Feriados:</h3>
                <p class="informacion-horarios">Cerrado</p>
            </div>
            
        </section>
        
    </main>
<?php
incluirTemplate('footer')
?>