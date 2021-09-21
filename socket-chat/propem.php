<?php 
session_start();

include "config.php";
$Enviar = $_GET['enviar'];
if ($Enviar <> NULL) {
	# code...
	$user = $_SESSION['user'];
	$rango =$_SESSION['rango'];
	$id = $_SESSION['id'];
	$mensaje = $_GET['mensaje'];
	$insert ="INSERT INTO `chat` (`user`, `mensaje`)VALUES ('$user','".$mensaje."')";
	mysqli_query($conex,$insert);
	header("location: index.php");
}
else 
{
	echo "error!";
	header('refresh:5; index.php');
}

 ?>