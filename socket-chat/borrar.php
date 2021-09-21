<?php 
session_start();
/* echo "<pre>";
print_r($_SESSION);
print_r($_GET);
echo "</pre>" */
include ("config.php");

if (isset($_SESSION['user']) && ($_SESSION['rango']== '2'))
{
	# code...
	$id=$_GET['id'];
	$delete =" DELETE FROM chat WHERE id = '$id' ";
	mysqli_query($conex,$delete);
	header('location: mensajes.php');
}
else {
	echo "Error: ";
	header('refresh:2; mensajes.php');
}
?>
