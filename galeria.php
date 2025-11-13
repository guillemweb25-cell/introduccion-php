<?php
$pageTitle = "Galería";
require __DIR__ . "/includes/header.php";

// Ruta de la carpeta de imágenes
$dir = __DIR__ . "/assets/img/gallery";

// Obtener todos los archivos de la carpeta
$files = scandir($dir);


?>
<h2>Galeria</h2>

<?php

foreach ($files as $file) {

    // Ignorar "." y ".."
    if ($file === "." || $file === "..") {
        continue;
    }

    // Filtrar solo los que contienen ".gallery."
    if (strpos($file, ".gallery.") !== false) {
        ?>
        <img src="assets/img/gallery/<?=$file?>" alt="">
        
        <?php
    }
}


require __DIR__ . "/includes/footer.php";
