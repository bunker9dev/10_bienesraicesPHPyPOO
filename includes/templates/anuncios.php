<?php
    // importar la coneccion DB

    require __DIR__ . '/../config/database.php';
    $db = conectarDB();


    // consultar
    $query = "SELECT * FROM propiedades LIMIT $limite";


    // obtner los resultados
    $resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>


        <div class="anuncio">
            <picture> 
                <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio1">
            </picture>
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
                <p class="precio">$ <?php echo $propiedad['precio']; ?></p>

                <ul class="icono-caracteristicas">
                    <li>
                        <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                        <p><?php echo $propiedad['wc']; ?></p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                        <p><?php echo $propiedad['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p><?php echo $propiedad['habitaciones']; ?></p>
                    </li>
                </ul>

                <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
        </div> <!------- .anuncio------->  
        <?php endwhile; ?>

    </div><!------- .contenedor anuncio------->


<?php
    // Cerrar la conexion 
    mysqli_close($db);
?>
