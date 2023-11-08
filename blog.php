<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
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
                    <p class="informcaion-meta">Escrito el: <span>20/06/2021</span> por: <span>Admin</span></p>

                    <p>Consejos par construir una terraza en el techo de tu casa con los mejores materiales y ahorando dinero</p>
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
                    <p class="informacion-meta">Escrito el: <span>20/07/2022</span> por: <span>Admin</span></p>

                    <p>Mazimizar el espacio en tu hogar con esta guia, aprende  combinar uebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article> <!-------Terminia articulo---------->      

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="imagen3 entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/06/2021</span> por: <span>Admin</span></p>

                    <p>Consejos par construir una terraza en el techo de tu casa con los mejores materiales y ahorando dinero</p>
                </a>
            </div>
        </article> <!-------Terminia articulo---------->

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="imagen4 entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/07/2022</span> por: <span>Admin</span></p>

                    <p>Mazimizar el espacio en tu hogar con esta guia, aprende  combinar uebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article> <!-------Terminia articulo---------->      
    </main>

<?php
    incluirTemplate('footer');
?>