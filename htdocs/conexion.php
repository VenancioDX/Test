<?php
$conexion = mysqli_connect(HOST, USER, PASS, NAME);

if (mime_content_errno($conexion))
    echo "Fallo al conectar con MYSQL:" .mysqli_connect_error()

?>