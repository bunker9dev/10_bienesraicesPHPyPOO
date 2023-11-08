<?php
require 'includes/funciones.php';

incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
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
</main>
<section class="seccion contenedor">
    <h2>Casas y Departamentos en ventas</h2>

    <?php 
        $limite = 3;
        include 'includes/templates/anuncios.php';
    ?>

    
    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver todas</a>
    </div>

</section>

<section class="imagen-contacto">
    <h2>Encuentra la Casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a href="contacto.html" class="boton boton-amarillo-block">Contactenos</a>>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="imagen1 entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informcion-meta">Escrito el; <span>20/06/2021</span> por: <span>Admin</span></p>

                    <p>Consejos par construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorando dinero</p>
                </a>
            </div>
        </article> <!-------Terminia articulo---------->

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="imagen2 entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoración de tu hogar</h4>
                    <p class="informcion-meta">Escrito el; <span>20/07/2022</span> por: <span>Admin</span></p>

                    <p>Mazimizar el espacio en tu hogar con esta guia, aprende combinar uebles y colores para darle
                        vida a tu espacio</p>
                </a>
            </div>
        </article> <!-------Terminia articulo---------->
    </section>

    <section class="testimniales">
        <h3>Testimonial</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron
                cumple con todas las expectivas.
            </blockquote>
            <p>-Antonio Arenas</p>

        </div>
    </section>

</div>

<?php
    incluirTemplate('footer');
?>