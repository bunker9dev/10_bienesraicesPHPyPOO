<?php

require '../includes/funciones.php';

$auth = estaAutenticado();

if (!$auth) {
    header('Location: /');
}


// Importar Base de datos
require '../includes/config/database.php';

$db = conectarDB();

//Escribir el Query
$query = "SELECT * FROM propiedades";

//Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);



//Mensaje Condicional
$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {

        //Eliminar imagen del archivo
        $query = "SELECT imagen FROM propiedades WHERE id = $id";
        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        // var_dump($articulo['imagen']);
        // exit;

        unlink('../imagenes/' . $propiedad['imagen']);

        // Eliminar Propiedad
        $query = "DELETE FROM propiedades WHERE id = $id";
        // echo $query;
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('location: /admin?resultado=3');
        }
    }
}


//Incluye un Tamplate

incluirTemplateIndex('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>

    <?php if (intval($resultado) === 1) : ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>

    <?php elseif (intval($resultado) === 2) : ?>
        <p class="alerta exito">Anuncio Modificado Correctamente</p>

    <?php elseif (intval($resultado) === 3) : ?>
        <p class="alerta exito">Anuncio Eliminado</p>

    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>


    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar resultados DB -->
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"></td>
                    <td> <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <form method="post" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="boton-rojo-block botonAcc" value="Eliminar">
                        </form>

                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</main>

<?php
//Cerrar la conexion
mysqli_close($db);

incluirTemplateIndex('footer');
?>