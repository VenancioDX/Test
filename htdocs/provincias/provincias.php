<?php



function listar_provincias()
{
    include 'conexion.php';
    
    $cresultado = mysqli_query($conexion, 'SELECT * FROM `provincia`');
    $nombre= [];
    while ($fila = msqli_fetch_assoc($resultado))
    {
        array_push($provincias, $fila);
    }
    return $provincias;
}




?>