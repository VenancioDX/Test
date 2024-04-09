<?php 

function insertar_provincias ($nombre)
{
    include'./conexion.php';
    $consulta = "INSERT INTO `provincia`(`codigo`, `nombre`) VALUES (NULL,'$nombre');";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
    
}