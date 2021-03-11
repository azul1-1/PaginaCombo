
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text-html; charset=utf=8">
<title> Documento sin titulo </title>
</head>

<body>

	<?php
       session_start();

       session_destroy();


       header("location:login.php");
	?>


</body>

</html>
