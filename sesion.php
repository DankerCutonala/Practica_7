<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" href="Estilos.css" type="text/css"/>
<link href='ic.ico' rel='shortcut icon' type='image/x-icon'/>
  </head>
  <body background="ap.jpg">
  <center>
    <h1>Ingresar a la base de datos</h1>
	 <fieldset style="width:550px;">
      <legend> <h2> Ingrese codigo y contrasena </h2> </legend> <br/>
	  
	  <DIV ALIGN=left>
    <form method="post" action="datos.php">
      
	  <label for="txtCodigo">Codigo </label><br/>
	  <input type="text" name ="txtCodigo"/><p />
      
	  <label for="txtCodigo">Password</label><br/>
	  <input type="password" name="txtPass" /><p />
	  <br/>
      <br/>
      </DIV>
	  <center>
	  <input type="submit" value="Iniciar sesion" />
    </form>
	 </center>
     </fieldset>
  </body>
</html>