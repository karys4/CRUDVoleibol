<?php
include ("conexion.php");
?>

<?php
include ("partials/header.php");
?>

<div class="container p-4 ">
<div class="row ">
    <div class="col-md-4 mx-auto ">

        <h1>Agregar Equipo</h1>
    <div class="card card-body ">

<form action="guardar.php" method="POST">
    <div class="form-group">
    <label for="nombre">Nombre Equipo:</label>
    <input type="text" name="nombre" class="form-control" required  autofocus>
</div>

<div class="form-group">
    <label for="rama">Rama:</label>
    <input type="text" name="rama" class="form-control" required>
</div>

<div class="form-group">
    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" class="form-control" required>
</div>

<input type="submit" class="btn btn-primary btn-block" name="guardar" value="Guardar">

</form>

</div>


</div>
</div>
</div>

<?php
include ("partials/body.php");
?>




    