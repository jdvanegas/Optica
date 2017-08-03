<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/logo.png" />
  <title>Optica All in One</title>
  <link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="../../css/overwrite.css" type="text/css" />
  <link rel="stylesheet" href="../../css/site.css" type="text/css" />
	<script type="text/javascript" src="../../javascript/jquery.js"></script>
	<script type="text/javascript" src="../../javascript/bootstrap.js"></script>
  </head>
  <body>
  	<?php
	$logo = "../../images/logo.png";
	$inicio = "../../index.php";
	$acercade = "../../modules/menuAcercade.php";
	$contacto = "../../modules/menuContacto.php";
	$entidad = "../../modules/menuEntidades.php";	
	$cerrar = "../cerrar_sesion.php";
	$usuarioRol = "../nuevoUsuarioRol.php";
	?>
    <?php include ('../../modules/navbar.php'); ?>
    <?php include('../../seguridad/UsuarioMedico.php'); ?>
    <div class="body-content container">
         <div class="row">
         	<?php include('cuentaMedicoBanner.php');?>
         </div>
        <div class="row">
            <div class="col-md-3">
                <br />
                <?php include('cuentaMedicoMenu.php')?>
            </div>
            <div class="col-md-9"> 
                <!--Nueva Insersion-->
                    <form action="agregarRegistro.php" method="post" name="formActualizarDatos">
                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-4">
                                <p class="text-danger"><?php if(isset($_SESSION["resultAgregar"])){echo $_SESSION["resultAgregar"];unset($_SESSION["resultAgregar"]);}?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Lugar</p>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="lugar"/>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Fecha</p>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" name="fecha"/>
                            </div>
                        </div>
                        <br />
                         <div class="row">
                            <div class="col-sm-3">
                                <p>Tipo de documento paciente</p>
                            </div>
                            <div class="col-sm-9">
                                <select class="form-control" name="tipoDocumento" id="select">						  
                                              <option value="Cedula de ciudadania" selected="selected">Cedula de ciudadania</option>
                                              <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                              <option value="Cedula extrajera">Cedula extrajera</option>
                                              <option value="Pasaporte">Pasaporte</option>
                                              <option value="Libreta Militar">Libreta Militar</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Documento paciente</p>
                            </div>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="numeroDocumento" pattern="+[0-9]"/>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Descripcion</p>
                            </div>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="4" name="descripcion"></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Resultado</p>
                            </div>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="4" name="resultado"></textarea>
                            </div>
                        </div>
                        <br />
                         <div class="row">
                            <div class="col-sm-3">
                                <p>Tratamiento</p>
                            </div>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="4" name="tratamiento"/></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="cuentaMedicoHistorial.php" target="content">Regresar</a>
                            </div>
                            <div class="col-sm-4">
                                <br />
                                <input class="btn btn-primary" type="submit" name="add" value="Agregar Registro" />
                            </div>
                        </div>
                    </form>
                    <!-- --------- -->
            </div>
        </div><?php include ('../../modules/footer.php'); ?>
     </div>     
  </body>
</html>