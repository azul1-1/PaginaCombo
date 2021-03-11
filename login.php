

<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text-html; charset=utf=8">
<title> Documento sin titulo </title>
</head>
<style type="text/css">
	
	table{margin:auto;
		border: 2px solid black;
		background-color: pink;}
		
        #boton{
        	border-radius: 3px;
        	border: 2px solid black;
        	margin-left: 40%;
        	background-color: orange;
        }
		#boton:hover{
			background-color:red;
			color: black;
			transition-duration: 1s;

		}
</style>

<body>

	<h1>INTRODUCE TUS DATOS</h1>

<form action="comprueba_login.php" method="post">
	<table>
		<tr>
			
			<td class="izq">
				
				Login: 
			</td>
			<td class="der">
				<input type="text" name="login" >
				
			</td>
		
			
		</tr>

		<tr>
			<td class="izq">
				Password: 
				
			</td>
			<td class="der"><input type="password" name="password">
		   </td>

		</tr>

		<tr><td colspan="2"><input type="submit" name="enviar" value="login" id="boton">
			
		</td>
			
		</tr>

	</table>
<div style="width: 100%; text-align: center;margin-top:2%">
<input type="submit" value="home" style="color:white;background: black;border-radius: 5px;border:1px solid orange;height: 4vh;width: 4vw;font-weight: bold;">
</div>
	


</body>

</html>
