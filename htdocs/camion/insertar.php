<?php 

function insertar_matricula ($modelo,$tipo,$potencia)
{
    include'./conexion.php';
    $consulta = "INSERT INTO'camiones' ('matricula', 'modelo','tipo','potencia') VALUES (NULL,'$modelo', '$tipo','$potencia');";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}