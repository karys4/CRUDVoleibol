<?php
include ("../conexion.php");
?>

<?php
include ("header.php");
?>

<div class="container p-4">
<div class="col-md-8 mx-auto">
<h1>Lista general de Equipos</h1>
<table class="table table-bordered">
<thead>
<tr>
    <th>Nombre de Equipo</th>
    <th>Rama</th>
    <th>Categoría</th>
    <th></th>
    <th></th>
    <!--<th></th>-->
</tr>    
</thead>
<tbody>
<?php
$consulta = "SELECT * FROM tbl_equipos";
$infoEquipos = mysqli_query($mysqlConnexion,$consulta);

//Pintamos la información que viene de la BD
while($fila = mysqli_fetch_array($infoEquipos)) { ?>
<tr>
   <td><?php echo $fila['nombre'] ?></td>
   <td><?php echo $fila['rama'] ?></td>
   <td><?php echo $fila['categoria'] ?></td>
   <!--<td>
        <a href="../index.php?id=<?php echo $fila['id']?>" class="fas fa-plus" title="Agregar"></a>
        
   </td>-->
   <td>
        <a href="../editar.php?id=<?php echo $fila['id']?>" class="fas fa-edit" title="Editar"></a>
        
   </td>
   <td>
       
        <a href="../eliminar.php?id=<?php echo $fila['id']?>" class="fas fa-trash-alt" title="Eliminar"></a>
   </td>
</tr>



<?php } ?>


</tbody>
</table>


</div>

</div>

<?php
include ("body.php");
?>