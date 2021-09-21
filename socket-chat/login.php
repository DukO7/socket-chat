<?php
session_start();
include "config.php";

if (isset($_SESSION['user'])) 
{
 	# code...
 	?>
 	Hola <?php-$_SESSION['user']?>
 	Ya haz iniciado sesi&oacute;n <a href="logout.php">Cerrar Sesi&oacute;n</a>
 	<?php
 } 
 else
 	?>
 	<center><table border=3 width="300" bgcolor="#FFA07A">
 		<form method="POST" action="firmar.php">
 			<tr>
 				<td>User:</td> <td><input type="text" name="user" required></td>
 			</tr>
 			<tr>
 				<td>Password:</td> <td><input type="password" name="pass" required></td>
 			</tr>
 			<tr>
 				<td align="center" colspan="2"><input type="submit" name="enviar" value="Acceder"></td>
 			</tr>
 		</form>
 	</table></center>
 ?>