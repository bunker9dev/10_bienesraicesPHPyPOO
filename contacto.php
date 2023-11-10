<?php
require 'includes/App.php';

incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="contacto img">
        </picture>
        <h2>LLene el formulario de Contacto</h2>
        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Nombre" id="email">

                <label for="celular">Celular</label>
                <input type="tel" placeholder="Tu numero celular" id="celular">

                <label for="sugerencias">Observaciones y sugerencias</label>
                <textarea id="sugerencias"></textarea>
            </fieldset> <!---------- Fin fieldset---------->

            <fieldset>
                <legend>Informacion Sobre la Propiedad</legend>

                <label for="opciones">Vende o compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder=" Tu Precio o Presupuesto" id="presupuesto">
            </fieldset> <!---------- Fin fieldset---------->

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió Teléfono, elija la fecha y hora</p>
                
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">

                <label for="sugerencias">Observaciones y sugerencias</label>
                <textarea id="sugerencias"></textarea>
            </fieldset> <!---------- Fin fieldset---------->

            <input type="submit" value="E-mail" class="boton-amarillo">

        </form>


    </main>

<?php
    incluirTemplate('footer');
?>