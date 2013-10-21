<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="Estilos.css" type="text/css"/>
  
  </head>
  <body>
    
<?php
    $Codigo = $_POST['txtCodigo'];
    $Pass = $_POST['txtPass'];
   
	if(($Codigo == 100 && $Pass == "udg") ||
		($Codigo == 110 && $Pass == "tonala")||
		($Codigo == 1 && $Pass == "root")){
		session_start();
		$_SESSION["codigo"] = $Codigo;
		$_SESSION["pass"] = $Pass;
		
	header('Location: conexion.php'); 
	}else{
	
	//echo "<script>alert(\"El Usuario o contrasena son incorrectos\");</script>";
		header('Location: sesion.php');
	}
	
    ?>
	

	
</body>
</html