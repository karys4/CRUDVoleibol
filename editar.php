<?php
include ("conexion.php");

$id = $_GET['id'];
$consulta_bd = "SELECT * FROM tbl_equipos WHERE id = $id";
$consultaGeneral = mysqli_query($mysqlConnexion, $consulta_bd);
$fila = mysqli_fetch_array($consultaGeneral);

//Obtener datos para mostrar en formulario
$nombre = $fila['nombre'];
$rama = $fila['rama'];
$categoria = $fila['categoria'];

//Actualizar información en BD
//Se obtienen los nuevos datos que vienen del formulario
if(isset($_POST['actualizar'])) {
   $id = $_GET['id'];
   $nombre = $_POST['nombre'];
   $rama = $_POST['rama'];
   $categoria = $_POST['categoria'];

   $consulta_bd = "UPDATE tbl_equipos SET nombre = '$nombre' ,rama = '$rama' , categoria = '$categoria' WHERE id = $id";
   $consultaGeneral = mysqli_query($mysqlConnexion, $consulta_bd);
   header("Location: partials/admon.php");

}else{
    //echo ("No se actualizó el elemento");
}

?>

<?php
include ("partials/header.php");
?>

<div class="container p-4 ">
<div class="row ">
    <div class="col-md-4 mx-auto ">

        <h1>Editar Equipo</h1>
    <div class="card card-body ">

<form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <div class="form-group">
    <label for="nombre">Nombre Equipo:</label>
    <input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control" required  autofocus>
</div>

<div class="form-group">
    <label for="rama">Rama:</label>
    <input type="text" name="rama" value="<?php echo $rama;?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" value="<?php echo $categoria;?>" class="form-control" required>
</div>

<input type="submit" class="btn btn-primary btn-block" name="actualizar" value="Actualizar">

</form> <br>
<a href="partials/admon.php"><-- Regresar a la tabla general</a>

</div>


</div>
</div>
</div>



<?php
include ("partials/body.php");
?>