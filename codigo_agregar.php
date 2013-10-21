<!DOCTYPE html>
<html>
<title>Conexion a base de datos</title>
<link rel="stylesheet" href="estilos.css" type="text/css"/>
<link href='ic.ico' rel='shortcut icon' type='image/x-icon'/>
<head>
</head>
<body background="ap.jpg">
<?php
echo "<center>";
echo "<fieldset style=width:550px;>";
   echo   "<legend> <h2> Informacion </h2> </legend> <br/>";
	  
	echo  "<DIV ALIGN=center>";
    
    $Nombre = $_POST['Nom'];
    $Telefono = $_POST['Tel'];
	$Celular = $_POST['Cel'];
    $Domicilio = $_POST['Dom'];
	$Colonia = $_POST['Col'];
    $Codigop = $_POST['Cp'];
	 
$link = mysql_connect("127.0.0.1", "root",""); 
mysql_select_db("usuarios", $link)or die(mysql_error());

	 $sql = "INSERT INTO `usuario` ".
                "(`nombre`, `telefono`, `celular`, `direccion`, `colonia`, ".
                "`cp`) ".
                "VALUES ".
                "('$Nombre','$Telefono', '$Celular', '$Domicilio','$Colonia', '$Codigop')";
   mysql_query($sql);
   
   echo "Hemos recibido sus datos.<br/>y Se han guardado con exito";
  echo "<br/>";
   echo "<br/>";
  echo "<a href=conexion.php><input type='button' value='Aceptar'></a>";
//echo "<script>alert(\"GUARDADO CON EXITO.\");</script>";
	
	echo "</div>"; 
echo "</center>";
 echo    "</fieldset>";
	 
	 echo"</center>";
    ?>
	</body>
	</html>