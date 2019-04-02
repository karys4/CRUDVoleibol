<?php
include ("conexion.php");

//Eliminar registro en BD por medio del id

$id = $_GET['id'];
$consulta_bd = "DELETE FROM tbl_equipos WHERE id = $id";
$consultaGeneral = mysqli_query($mysqlConnexion, $consulta_bd);

if($consultaGeneral){
    header("Location: partials/admon.php");
}else{
    echo ("No se eliminó el elemento");
}
?>