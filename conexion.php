<!DOCTYPE html>		
<html>
<head>
<title>Conexion a base de datos</title>
<link rel="stylesheet" href="estilos.css" type="text/css"/>
<link href='ic.ico' rel='shortcut icon' type='image/x-icon'/>
</head>
<body background="ap.jpg">
<?php
echo "<center>";
echo "<fieldset style=width:500px;>";
   echo   "<legend> <h2> BASE DE DATOS </h2> </legend> <br/>";
	  
	echo  "<DIV ALIGN=left>";
	echo "<center><a href='sesion.php'><h4>cerrar sesion</h4></a></center>";
	echo "<center><a href=agregar.php><input type='button' value='Agregar'></a></center>";
	echo "<br/>";
	
	function conecta(){
$link = mysql_connect("127.0.0.1", "root",""); 
mysql_select_db("usuarios", $link)or die(mysql_error());
}

$con=conecta();
$qu="select * from usuario";
$ej=mysql_query($qu)or die(mysql_error());
$count=mysql_num_rows($ej);

$re=mysql_fetch_object($ej);
$contador=0;

echo "<center>";
echo "<table border=7;>";
echo"<center><p>TABLA DE USUARIOS</h1></p>";

echo "<th>ID</th><th>NOMBRE</th><th>TELEFONO</th><th>OPCIONES</th>";
while($contador<$count){
echo "<tr><td>".$re->id."</td><td>".$re->nombre."</td><td>".$re->telefono."</td>
<td><a href=editar.php><input type='button' value='Editar'></a>
<a href=eliminar.php><input type='button' value='Eliminar'></a>
<a href=ver.php><input type='button' value='Ver'></a></td></tr>";
	 
$re=mysql_fetch_object($ej);
$contador++;
}
echo "</table>";
echo "</center>";
echo "</div>"; 
echo "</center>";
 echo    "</fieldset>";
	 
	 echo"</center>";
?>
</body>
</html>