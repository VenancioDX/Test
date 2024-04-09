<?php 

function eliminar_probincia_por_codigo ($codigo)
{
    include'./conexion.php';
    $consulta = "DELETE FROM `provincia` WHERE 'codigo'= $codigo";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}