
   
    <?php
     include 'pagina/header.php';
    ?>
    <title>Menú PHP</title>
    <style>
        /* Estilos CSS para el menú */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>
   <?php
// Arreglo de enlaces y nombres de menú
$menu_items = array(
    "camion" => "index.php",
    "camioneros" => "about.php",
    "paquete" => "services.php",
    "provincias" => "contact.php",
    "transporte" => "contac.php"
);

// Generar el menú
echo "<ul>";
foreach ($menu_items as $nombre => $enlace) {
    echo "<li><a href='$enlace'>$nombre</a></li>";
}
echo "</ul>";
?>
     <?php

     include 'pagina/footer.php';
     ?>


