<?php
require 'includes/config/database.php';
$db = conectarDB();



// Autenticar el usuario
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));

    // var_dump($email);
    $password =  mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es Obligatorio o no es valido";
    }

    if (!$password) {
        $errores[] = "El Password es Obligatorio";
    }

    if (empty($errores)) {
        //Revisar si el usuario exite
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        // var_dump($query);

        $resutado = mysqli_query($db, $query);

        // var_dump($resutado);



        if ($resutado->num_rows) {
            // Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resutado);

            // Verificar si el passoword es correcto
            $auth = password_verify($password, $usuario['password']);

            var_dump($auth);

            if ($auth) {
                // El Usuario esta autenticado
                session_start();
                
                // Llenar 

                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin');

                

            } else {
                $errores[] = 'El Password es incorrecto';
            }
        } else {
            $errores[] = "El Usuario no existe";
        }
    }
}




// incluye  el header

require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>

    <?php foreach ($errores as $error) :   ?>
        <div class="alerta error">
            <?php echo $error;    ?>
        </div>

    <?php endforeach;   ?>

    <form method="POST" class="formulario">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu email" id="email">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" id="password">

        </fieldset> <!---------- Fin fieldset---------->

        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">;






    </form>

</main>


<?php
incluirTemplate('footer');
?>