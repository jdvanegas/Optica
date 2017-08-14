<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restablecer contraseña</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="images/logo.png" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/overwrite.css" type="text/css" />
<link rel="stylesheet" href="css/site.css" type="text/css" />
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/bootstrap.js"></script>
</head>
<body>
	<?php include ('modules/navbar.php'); ?>
    <div class="body-content container">
         <div class="row">
           <div class="col-md-12"> 
             <h1>Restablecer Contraseña</h1>
             <p>Digite su correo electronico para enviar mensaje restablecer contraseña.</p>
           </div>
         </div>
         <div class="row">
            <div class="col-md-6">
            	<form id="form1" name="form1" method="post" action="controlador-enviarRestablecer.php">
                	<br />
                	<div class="row">
                    	<div class="col-md-5">
                        	<p>Correo Electronico</p>
                        </div>
                    	<div class="col-md-7">
          					<input class="form-control" type="mail" name="textfield" id="textfield" />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                    	<div class="col-md-8"></div>
                    	<div class="col-md-4">
          					<input name="send" type="submit" class="btn btn-primary" id="send" value="Continuar" />
                        </div>
                    </div>
				</form>
            </div>
         </div>
     </div>
</body>
</html>