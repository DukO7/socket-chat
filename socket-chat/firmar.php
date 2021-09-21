<?php
session_start();
/*
	echo "<pre>";
*/
include "config.php";
if(isset($_POST['enviar'])){
	$user= $_POST['user'];
	$pass=$_POST['pass'];
	$select="SELECT * FROM users WHERE user = '".$user."' AND pass = '".$pass."'";
	$query=mysqli_query($conex, $select);
	$rows = mysqli_num_rows($query);

	if($row = mysqli_fetch_array($query)){
		$_SESSION['user'] = $row['1'];
		$_SESSION['pass'] = $row['2'];
		$_SESSION['id'] = $row['0'];
		$_SESSION['rango'] = $row['3'];
		header("location: index.php");
		} else {
			echo "<center><b>el usuario o la contrase&ntilde; a son invalidos</b></center>";
		} 
}
?>