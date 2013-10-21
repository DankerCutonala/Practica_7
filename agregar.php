 <!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="estilos.css" type="text/css"/> 
<link href='ic.ico' rel='shortcut icon' type='image/x-icon'/>	  
    </head>
	<body background="ap.jpg">


	<center>
	  <fieldset style="width:450px;">
      <legend> <h2> Agregar Nuevo Usuario </h2> </legend> <br/>
	  
	  <DIV ALIGN=left>
	<a href="sesion.php"><h4>cerrar sesion</h4></a>
   <div>
<form method="post" action="codigo_agregar.php">

   <label for="txtNombre">Nombre</label><br/>
   <input type="text" size="40" maxlength="255"  name="Nom" style="width: 320px; height: 15px"/>
   <br/>
   <br/>
   <label for="txtCorreo">Telefono</label><br/>
   <input type="text" size="40" maxlength="255"  name="Tel" style="width: 150px; height: 15px"/>
   <br/>
   <br/>
  <label for="txtAsunto">Celular</label><br/>
   <input type="text" size="40" maxlength="255"  name="Cel" style="width: 150px; height: 15px"/>
   <br/>
   <br/>
  <label for="txtAsunto">Direccion</label><br/>
   <input type="text" size="40" maxlength="255" name="Dom" style="width: 320px; height: 15px"/>
   <br/>
   <br/>
  <label for="txtAsunto">Colonia</label><br/>
   <input type="text" size="40" maxlength="255"  name="Col" style="width: 320px; height: 15px"/>
   <br/>
   <br/>
  <label for="txtAsunto">Codigo Postal</label><br/>
   <input type="text" size="40" maxlength="255"  name="Cp" style="width: 100px; height: 15px"/>
   <br/>
   <br/>
   <form method="post" action="conexion.php">
   </DIV>
	   <center>
   <input type="submit" value="Guardar" />

</form>

</div> 
</center>
     </fieldset>
	 
	 </center>
	  
 </body>
</html>