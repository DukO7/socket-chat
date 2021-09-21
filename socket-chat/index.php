<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			table {
				background: #FFA07A;
			}
		</style>
	</head>
	<body>
		<?php
		session_start();
		/*
		echo "<pre>";
		*/
		include "config.php";
		if (isset ($_SESSION['user'])) {
			# code...

		?>
		<form action="propem.php" method="GET">
			<center><table border=2 width="800">
				<th><h1>Mensajes</h1></th>
				<tr><td><center>
					<iframe src="mensajes.php"name="iframe" wid="700"></iframe>
				</center>
				 </td>
				 </tr>
				<tr><td>
					<input type="text" name='mensaje' size="90">
					<input type="submit" name="enviar" value="Enviar">
				</td></tr>
				<tr>
					<td>
						Estas conectado como <strong>
							<?php print_r($_SESSION['user']) ?>
						</strong> 
					</td>
				</tr>
				<tr>
					<td>
						Debes cerrar sesion para reiniciar el chat
						<a href="logout.php">Click aqui</a>
					</td>
				</tr>

			</table>
			</center>
			<?php
		} else
		{
			?>
			Debes iniciar sesion para poder utilizar el chat <a href="login.php">Click Aqui</a>
			<?php
		}
		?>
		</form>
	</body>
</html>