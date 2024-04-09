

 
 
 <?php



function listar_camiones()
{
    include 'conexion.php';
    
    $cresultado = mysqli_query($conexion, 'SELECT * FROM `camioneros`');
    $camiones= [];
    while ($fila = msqli_fetch_assoc($resultado))
    {
        array_push($camiones, $fila);
    }
    return $camiones;
}




?>