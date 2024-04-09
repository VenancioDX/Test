<?php 

function actualizar_matricula ($matricula,$modelo,$tipo,$potencia)
{
    include'./conexion.php';
    $consulta = "UPDATE `camion` SET `modelo` = '$modelo', `tipo` = '$tipo', `potencia` = '$potencia' WHERE `camion`.`matricula` = $matricula;";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}