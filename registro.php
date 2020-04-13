<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="estilos/estilo.css">
<link rel="stylesheet" href="estilos/animate.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php require_once "scripts.php" ?>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" style="font-size:x-large;" href="index.html"><b>Bunt</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="login.php">Iniciar sesion</a>
            <a class="nav-item nav-link" href="#">Nosotros</a>
        </div>
    </div>
</nav>

<body class="body_registro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="margin-top: 2%;" class="mb-5 mb-md-5"  >
                    <div class="jumbotron" style="background-color:#ffffff7d;">
                        <div class="row">
                            <div class="col-md-6 " style="border-right: 1px solid white;">
								<h1 class="animated bounceInLeft slow-3s ">Crea tu cuenta!</h1>
								<br>
                                <div class="panel panel-danger">
									<div class="panel panel-body">
										<form id="frmRegistro">
										<div class="form-row">
										<div class="form-group col-md-6">
										<label>Correo</label>
										<input type="text" class="form-control input-sm" id="correo" name="">
										</div>
										<div class="form-group col-md-6">
										<label>Usuario</label>
										<input type="text" class="form-control input-sm" id="usuario" name="">
										</div>
										</div>
										<div class="form-row">
										<div class="form-group col-md-6">
										<label>Nombre</label>
										<input type="text" class="form-control input-sm" id="nombre" name="">
										</div>
										<div class="form-group col-md-6">
										<label>Apellidos</label>
										<input type="text" class="form-control input-sm" id="apellido" name="">
										</div>
										</div>	
										<div class="form-row">
										<div class="form-group col-md-6">
										<label>Password</label>
										<input type="password" class="form-control input-sm" id="password" name="">
										</div>
										<div class="form-group col-md-6">
										<label>Confirma</label>
										<input type="password" class="form-control input-sm" id="password2" name="" placeholder="Repite el Password">
										</div>
										</div>
										<label>Codigo</label>
										<input type="text" class="form-control input-sm" id="codigo" name="" placeholder="codigo(opcional)">
										<p></p>
										<span class="btn btn-outline-info " id="registrarNuevo" style="float: right; margin-top: 6%">Registrar</span>
										</form>
									</div>
								</div>
                            </div>
                            <div class="col-md-6 d-none d-sm-block ">
                                <h1 class="animated pulse slow-3s delay-2s ">Registrate!</h1>
                                <img src="recursos/imagenes/imagen_plataforma.png " alt=" Bunt " style="width: inherit;" class="animated zoomIn slow-3s ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<div class="fixed-bottom ">
    <div class="text-center py-2 " style="background-color: #fffafa69; ">© 2020 Copyright:Carlos Serrano, Pamela Gutierrez
    </div>
</div>
</html>
<link rel="stylesheet" href="dependencias\bootstrap\bootstrap-4.4.1\dist\css\bootstrap.css">
<link rel="stylesheet" href="dependencias\js\alertifyjs\css\themes\default.css">
<link rel="stylesheet" href="dependencias\js\alertifyjs\css\alertify.css">

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>