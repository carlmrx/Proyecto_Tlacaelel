<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="estilos/estilo.css">
<link rel="stylesheet" href="estilos/animate.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <?php require_once "scripts.php"; ?>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" style="font-size:x-large;" href="index.html"><b>Bunt</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

            <a class="nav-item nav-link" href="registro.php">Registrarse</a>
            <a class="nav-item nav-link" href="#">Nosotros</a>
        </div>
    </div>
</nav>

<body class="body_loguin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mt-lg-0">
                <div style="margin-top: 10%;">
                    <div class="jumbotron " style="background-color:rgba(0, 0, 0, 0.49); color: seashell;">
                        <div class="row">
                            <div class="col-md-6 d-none d-sm-block " style="border-right: 1px solid white;font-size: x-large;">
                                <h2 class="animated  bounceInLeft ">Hola denuevo!</h2>
                                <br>
                                <p>Inicia sesion para poder comenzar.</p>
                                <ul>
                                    <li class="animated  bounceInDown delay-1s">Registra mas rapido</li>
                                    <li class="animated  bounceInDown delay-2s">Analiza la informacion</li>
                                    <li class="animated  bounceInDown delay-3s">Mejora el proceso</li>
                                </ul>
                            </div>
                                <div class="col-md-6">
                                <div class="panel panel-body">
                                <p></p>
                                <label style="font-size: xx-large">Usuario</label>
                                <input type="text" pattern="[A-Za-z0-9_-@.]{4,40}" id="usuario" class="form-control input-sm" name="">
                                <label style="font-size: xx-large">Password</label>
                                <input type="password" pattern="[A-Za-z0-9_-@.]{4,40}" id="password" class="form-control input-sm" name="">
                                <p></p>
                                <span class="btn btn-outline-danger" id="entrarSistema" style="float: right;margin-top: 4%">Entrar</span>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
   
</body>
<div class="fixed-bottom">
    <div class="text-center py-2" style="background-color: #fffafa69;">© 2020 Copyright:Carlos Serrano, Pamela Gutierrez
    </div>
</div>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="bitacoras/bitacoras.php";
							}else{
								alertify.alert("Fallo al entrar :(");
							}
						}
					});
		});	
	});
</script>