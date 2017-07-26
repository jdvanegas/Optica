<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Optical All in One</title>
<link rel="stylesheet" href="css/principal.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/componente.css" />
</head>

<body>
 <header>
      
</header>
<?php 
session_start();
if(isset($_SESSION["existDoc"]))
{
	$ad = $_SESSION["existDoc"];
	echo $ad;	
}
if(isset($_SESSION["existMail"]))
{
	$ad = $_SESSION["existMail"];
	echo $ad;
}
if(isset($_SESSION["nonSelected"]))
{
	$ad = $_SESSION["nonSelected"];
	echo $ad;
}
?>
	<p class="bg-info">Nuevo Usuario</p>
    
	<p class=bg-info>Para continuar, necesitamos que nos ofrezcas los siguientes datos de la entidad oftalmologica a la cual perteneces.</p>
	<form name="registro_medico" action="nuevoUsuarioMedico.php" method="post">
	<table width=400 border=0>
	  <tr>
		<td>nombre</td>
		<td><label for="nombre"></label>
		  <input type="text" name="null" /></td>
	  </tr>
	  <tr>
		<td>codigo de acceso</td>
		<td><label for="codigo"></label>
		  <input type="text" name="codigo" /></td>
	  </tr>
	  <tr>
		<td>palabra clave</td>
		<td><label for="palabra"></label>
		  <input type="text" name="palabra" /></td>
	  </tr>
	  <tr>
		<td>
		<input type="hidden" name="nombre" value="$Nombre" />
		</td>
	  </tr>
	  <tr>
		<td>
		<input type="hidden" name="apellido" value="$Apellidos" />
		</td>
	  </tr>
	  <tr>
		<td>
		<input type="hidden" name="mail" value="$CorreoElectronico" />
		</td>
	  </tr>
	  <tr>
		<td>
		<input type="hidden" name="fecha" value="$Fecha" />
		</td>
	  </tr>
	  <tr>
		<td>
		<input type="hidden" name="tipo" value="$tipoDocumento" />
		</td>
	  </tr>
	  <tr>
		<td>
		<input type="hidden" name="documento" value="$Documento" />
		</td>
	  </tr>
	  <tr>
		<td>
		<input type="hidden" name="password" value="$Contrasena" />
		</td>
	  </tr>
	  <tr>
		<td>
		<input type="hidden" name="rol" value="$rol" />
		</td>
	  </tr>
	</table>
	  <input class="btn-primary" type="submit" name="continuar" id="continuar" value="Enviar" />
	</form>
    <p>&nbsp;</p>
    <?php 
	unset($_SESSION["existDoc"]);
	unset($ad);
	unset($_SESSION["existMail"]);
	unset($_SESSION["nonSelected"]);
	?>
</body>
<footer>
</footer>
</html>