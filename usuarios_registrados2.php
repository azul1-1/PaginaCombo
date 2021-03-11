<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text-html; charset=utf=8">
<title> Documento sin titulo </title>
</head>

<style type="text/css">
	
	tr,td{
		border: 2px solid black;
	    width: 5vw;
	    height: 5vh;
	    text-align:center;}
</style>
<body>

	<?php

	session_start();
	if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
	}
	?>
<h1>bienvenidos usuarios</h1>


<?php
echo "Usuario: ".$_SESSION["usuario"]."<br><br>";

?>


<table style="border:1px solid #000">
	<tr style="column-span: 3;text-align: center">
		<td colspan=3>
			h
		</td>
		
	</tr>
	<tr>
		<td>
			<a href="usuarios_registrados1.php">home</a>
		</td>
		<td>
			<a href="usuarios_registrados3.php">pagina2</a>
		</td>
		<td>
			<a href="usuarios_registrados4.php">pagina3</a>
		</td>
		
	</tr>
</table>
<a href="cierre.php">cerrar</a><br>
<a href="usuarios_registrados1.php">volver</a>
</body>

</html>

