<?php
 function listar_camionero_por_dni ($dni)
{
    include './conexion.php';
   $sql = "SELECT * FROM 'camioneros' WHERE 'dni' = $dni ";
   $resultados = mysqli_query($conexion, $sql);
   $camionero = mysqli_fetch_assoc($resultado);
   return $camionero;
   
} 
