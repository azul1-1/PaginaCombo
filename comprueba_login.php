
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text-html; charset=utf=8">
<title> Documento sin titulo </title>
</head>

<body>
<?php

try{

$base=new PDO("mysql:host=localhost; dbname=pruebas", "root","");

$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="SELECT*FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD=:password";

$resultado=$base->prepare($sql);

$login=htmlentities(addslashes($_POST["login"]));

$password=htmlentities(addslashes($_POST["password"]));

$resultado->bindValue(":login",$login);
$resultado->bindValue(":password",$password);
$resultado->execute();

$numero_registro=$resultado->rowCount();


if($numero_registro!=0){

    session_start();
    $_SESSION["usuario"]=$_POST["login"];

	header("Location:usuarios_registrados1.php");
}else{

header("location:login.php");

	
}
}
catch(Exception $e){
	
	die("Error: ". $e->getMessage());
}


?>

</body>

</html>
