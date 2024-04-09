<?php 

function eliminar_camion_por_matricula ($matricula)
{
    include'./conexion.php';
    $consulta = "DELETE FROM 'camiones' WHERE 'matricula = $matricula";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}