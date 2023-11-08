<?php
   session_start();

   if (!isset($_SESSION)) {
        session_start();
   }

   $auth = $_SESSION ['login'] ?? false;


?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raiz</title>
    <link rel="stylesheet" href="/build/css/app.css">

</head>

<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de bienes raices">
                </a>
                <div class="mobileMenu">
                    <img src="/build/img/barras.svg" alt="icono de hamburgesa">

                </div>

                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                    <?php if ($auth): ?>
                        <a href="cerrar-sesion.php">Cerrar Sesión</a>

                    <?php endif; ?>

                    
                </nav>

            </div> <!-- Cierre de barra-->


            <?php if ($inicio) { ?>
                 <h1>Venta de casas y apartamentos Exclusivos de lujo</h1>
            <?php } ?>

        </div>
    </header>