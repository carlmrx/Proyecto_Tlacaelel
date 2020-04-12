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
                <div style="margin-top: 3%;" class="mb-5 mb-lg-4">
                    <div class="jumbotron" style="background-color:#ffffff7d;">
                        <div class="row">
                            <div class="col-md-6 " style="border-right: 1px solid white;">
                                <h2 class="animated bounceInLeft slow-3s ">Crea tu cuenta!</h2>
                                <form id="frmRegistro">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Correo</label>
                                            <input type="email" class="form-control" id="correo" name="correo" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Usuario</label>
                                            <input type="text" class="form-control" id="usuario" name="usuario" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control" id="contraseña1" name="contraseña2" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Confirmacion</label>
                                            <input type="password" class="form-control" id="contraseña2" name="contraseña2" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Codigo</label>
                                            <input type="text" class="form-control" id="codigo" placeholder="codigo especia (opcional)" name="codigo">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                          Check me out
                                        </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-danger" id="botonRegistro" name="botonRegistro">Registrar</button>
                                </form>
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
<script type="text/javascript">
$(document).ready(function(){
    $('#botonRegistro').click(function(){
        if($('#correo').val()==""){
            alertify.alert("Falta el correo");
            return false;
        }else if($('#usuario').val()==""){
            alertify.alert("Falta el usuario");
            return false;
        }else if($('#nombre').val()==""){
            alertify.alert("Falta el nombre");
            return false;
        }else if($('#apellidos').val()==""){
            alertify.alert("Faltan los apellidos");
            return false;
        }else if($('#contraseña1').val()==""){
            alertify.alert("Falta la contraseña");
            return false;
        }
        cadena="correo=" + $('#correo').val() +
            "&usuario=" + $('#usuario').val() +
            "&nombre=" + $('#nombre').val() +
            "&apellidos=" + $('#apellidos').val() +
            "&contraseña=" + $('#contraseña1').val() +
            "&codigo=" + $('#codigo').val();

            $.ajax({
                type:"POST",
                url:"php/registro_usuario.php",
                data:cadena,
                success:function(r){
                    if(r==2){
                        alertify.alert("Usuario o correo ya registrado");
                    }
                   else if(r==1){
                        $('#frmRegistro')[0].reset();
                        window.location="exito.php";
                    }else{
                        alertify.error("fallo al agregar");
                    }
                }
            });
    });
});
</script>