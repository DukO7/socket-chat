<?php 
$dbhost="localhost";
$dbusuario="root";
$dbpassword="";
//$db="";
$conex=mysqli_connect($dbhost, $dbusuario, $dbpassword, "ejemplo_chat");
//mysqli_select_db($db,);
/*if (!$conex) {
    die("Conexion Fallida: " . mysqli_connect_error());
}
echo "Conexion exitosa";*/
return $conex;
 ?>