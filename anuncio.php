<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /');
}

// importar la coneccion DB

require  'includes/config/database.php';
$db = conectarDB();


// consultar
$query = "SELECT * FROM propiedades WHERE id= $id";


// obtner los resultados
$resultado = mysqli_query($db, $query);

if (!$resultado->num_rows) {
    header('Location: /');
}

$propiedad = mysqli_fetch_assoc($resultado);



require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa de lujo en el Lago</h1>
    <picture>

        <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="propiedad<?php echo $propiedades['id']; ?>">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio"><?php echo $propiedad['precio']; ?></p>
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
        <?php echo $propiedad['descripcion']; ?>
    
    </div>

</main>

<?php
incluirTemplate('footer');
?>