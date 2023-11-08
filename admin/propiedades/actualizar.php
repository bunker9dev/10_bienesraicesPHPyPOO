<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();

if (!$auth) {
    header('Location: /');
}


//Validar la URL por ID no valido

use function PHPSTORM_META\exitPoint;

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}


// Importar Base de datos
require '../../includes/config/database.php';

$db = conectarDB ();

// Obtener los datos de la propiedad

$consulta = "SELECT *FROM propiedades WHERE id = $id";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);


// Consultar para obtener los vendedores

$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);


// Arreglo con mensaje de errores
$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedor_id = $propiedad['vendedor_id'];
$imagenPropiedad = $propiedad['imagen'];


//Ejecuta el codigo despues que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    // exit;

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedor_id = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('y/m/d');

    // Asignar files hacia una variable
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = "El titulo es obligatorio";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "la descripcion es obligatoria y debe tener al menos 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio";
    }
    if (!$wc) {
        $errores[] = "El numero de baños es obligatorio";
    }
    if (!$estacionamiento) {
        $errores[] = "El numero de estacionamiento es obligatorio";
    }
    if (!$vendedor_id) {
        $errores[] = "El vendedor es obligatorio";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";

    // exit;


    //Revisar que el array de errores este vacio
    // if (empty($errores)) {

    // Crear carpeta
    $carpetaImagenes = '../../imagenes/';

    if (!is_dir($carpetaImagenes)) {
        mkdir($carpetaImagenes);
    }

    $nombreImagen = '';

    //     /* SUBIDA DE ARCHIVOS */
    if ($imagen['name']) {
        // eliminar imagen previa
        unlink($carpetaImagenes . $propiedad['imagen']);

        // Generar un nombre unico para imagenes

        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        // subir imagen 
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
    } else {
        $nombreImagen = $propiedad['imagen'];
    }


    // INSERTAR EN LA BASE DE DATOS
    $query = " UPDATE propiedades SET titulo = '$titulo', precio = '$precio', 
        imagen = '$nombreImagen', descripcion = '$descripcion', habitaciones = $habitaciones, wc = $wc, 
        estacionamiento = $estacionamiento, vendedor_id = $vendedor_id WHERE id = $id";


    // echo $query;
    // exit;

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
        // echo "Insertado correctamente";

        header('Location: /admin? resultado=2');
    };
}




incluirTemplateAdmin('header');

?>

<main class="contenedor seccion">
    <h1>Actualizar Propiedades</h1>

    <a href="/admin" class="boton boton-verde">volver</a>

    <?php foreach ($errores  as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>

            <legend>Información general</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-actual" />

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 1" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 2" min="0" max="9" value="<?php echo $estacionamiento; ?>">

        </fieldset>


        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">--Seleccione--</option>
                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedor_id === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] . " " . $row['apellidos']; ?> </option>
                <?php endwhile; ?>
            </select>

        </fieldset>

        <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
    </form>


</main>


<?php
include '../../includes/templates/footer.php';
?>