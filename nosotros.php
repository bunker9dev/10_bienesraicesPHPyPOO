<?php
require 'includes/App.php';

incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nostros</h1>
        <div class="nosotros-contenedor">
            <div class="nosotros-imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="imagen nosotros">
                </picture>
    
            </div>
            <div class="nosotros-texto">
                <blockquote>25 años de Experiencia</blockquote>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus iste aspernatur praesentium id.
                    Modi, optio? Distinctio accusantium quasi repudiandae unde cupiditate assumenda? Lorem ipsum dolor, sit
                    amet consectetur adipisicing elit. Ipsam neque provident culpa cupiditate cum praesentium maiores id
                    totam alias architecto debitis et dolorem asperiores, nulla delectus ullam dignissimos vero earum. Lorem
                    ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, voluptate omnis quos hic magnam magni,
                    dicta qui exercitationem itaque, eius eum corrupti natus alias. Nisi libero exercitationem quo. Rem,
                    quos? Illo commodi voluptatibus harum, at soluta minima rerum.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, ad ea nihil eligendi alias amet
                    praesentium adipisci doloremque deleniti voluptates reprehenderit dicta, voluptas quos iste labore
                    corrupti ab tempora quidem!</p>
            </div>
        </div>

    </main>
    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="iconos">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus corrupti molestias sequi
                    fugiat culpa. Molestias quidem assumenda quos maiores repellendus vitae, tempore reiciendis, alias,
                    consectetur dicta sunt adipisci officiis soluta!</p>
            </div>
            <div class="iconos">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus corrupti molestias sequi
                    fugiat culpa. Molestias quidem assumenda quos maiores repellendus vitae, tempore reiciendis, alias,
                    consectetur dicta sunt adipisci officiis soluta!</p>
            </div>
            <div class="iconos">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus corrupti molestias sequi
                    fugiat culpa. Molestias quidem assumenda quos maiores repellendus vitae, tempore reiciendis, alias,
                    consectetur dicta sunt adipisci officiis soluta!</p>
            </div>
        </div>
    </section>


<?php
    incluirTemplate('footer');
?>