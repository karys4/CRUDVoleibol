<?php
include ("conexion.php");

//Se obtienen los datos del formulario
$nombre = $_POST['nombre'];
$rama = $_POST['rama'];
$categoria = $_POST['categoria'];

//Se insertan los datos en la tabla
$consulta_bd = "INSERT INTO tbl_equipos(nombre,rama,categoria) VALUES ('$nombre','$rama','$categoria')";
$consultaGeneral = mysqli_query($mysqlConnexion, $consulta_bd);


if($consultaGeneral){
    header("Location: index.php");
}else{
    echo ("Error en el proceso de guardado");
}


?>

