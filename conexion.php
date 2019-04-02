<?php
// mysqli(servidor,usuario,contraseña,base de datos);

$servidor = "127.0.0.1";//localhost
$usuario = "kary"; //root
$password = "Qwerty1234"; //''
$bd = "db_voleibol";


$mysqlConnexion = mysqli_connect($servidor,$usuario,$password,$bd);
//print_r($mysql);*/


/*if (!$mysqlConnexion) {
  echo "No se puede conectar a MySQL";
}
echo "Conexión exitosa";
mysqli_close($mysqlConnexion);*/



 ?>