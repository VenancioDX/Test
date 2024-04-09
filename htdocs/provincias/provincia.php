<?php
 function listar_provincias_por_codigo ($codigo)
{
    include './conexion.php';
   $sql = "SELECT * FROM 'provincia' WHERE 'codigo' = $codigo ";
   $resultados = mysqli_query($conexion, $sql);
   $provincia = mysqli_fetch_assoc($resultado);
   return $provincia;
   
} 