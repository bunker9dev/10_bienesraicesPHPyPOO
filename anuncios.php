<?php
require 'includes/App.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h2>Casas y Depas en ventas</h2>
        
        <?php 
        $limite = 10;
        include 'includes/templates/anuncios.php';
    ?>
    </main>

    
<?php
    incluirTemplate('footer');
?>