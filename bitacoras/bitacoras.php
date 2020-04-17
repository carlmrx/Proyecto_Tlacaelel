<?php
session_start();
if(isset($_SESSION['user'])){
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Tabla dinamica</title>
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
        <script src="librerias/jquery-3.2.1.min.js"></script>
        <script src="js/funciones.js"></script>
        <script src="librerias/bootstrap/js/bootstrap.js"></script>
        <script src="librerias/alertifyjs/alertify.js"></script>
        <script src="librerias/select2/js/select2.js"></script>
        <link rel="stylesheet" href="../estilos/estilo.css">
        <link rel="stylesheet" href="../estilos/animate.css">


    </head>

    <body class="body_bitacoras" style="color: black">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="font-size:x-large;color: black" href="../index.html"><b>Bunt</b></a>
                    <a style="margin-top: 7px;font-size: 20px;line-height: 48px;letter-spacing: 0.045em;font-weight: 400;color:#70767b" href="../php/salir.php" role="button">salir</a>
                    <a style="margin-top: 7px;font-size: 20px;line-height: 48px;letter-spacing: 0.045em;font-weight: 400;color:#bfcf3c" href="tiempo.php" role="button">tiempo</a>

                </div>
            </div>
        </nav>
        <div class="container jumbotron" style="background-color: rgba(15, 15, 15, 0.712);border-radius: 13px 13px 13px 13px;padding: 3%;color:white">
            <div id="buscador"></div>
            <div id="tabla"></div>
           
            
            <a class="btn " style="float: right;float: right;background-color: aliceblue;color: #322445f7;" href="../bitacoras/php/pdf.php" role="button">Imprimir</a>

        </div>
         <!-- Modal info de la bitacora -->


         <div class="modal fade" id="modalNuevoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content" style="background-color: rgba(15, 15, 15, 0.712);">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="color: blanchedalmond" id="myModalLabel">Informacion de la bitacora</h4>
                    </div>
                    <div class="modal-body" style="color: blanchedalmond">

                        <label>Id Empleado</label>
                        <input type="text" name="" id="nombre" class="form-control input-sm">
                        <label>Nombre</label>
                        <input type="text" name="" id="apellido" class="form-control input-sm">
                        <label>Departamento</label>
                        <input type="text" name="" id="email" class="form-control input-sm">
                        <label>Asunto</label>
                        <input type="text" name="" id="telefono" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="background-color: #ff0153b5;color:white" class="btn " data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal para registros nuevos -->


        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content" style="background-color: rgba(15, 15, 15, 0.712);">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="color: blanchedalmond" id="myModalLabel">Agrega nueva persona</h4>
                    </div>
                    <div class="modal-body" style="color: blanchedalmond">

                        <label>N.Cuenta</label>
                        <input type="text" name="" id="nombre" class="form-control input-sm">
                        <label>Nombre</label>
                        <input type="text" name="" id="apellido" class="form-control input-sm">
                        <label>Carrera</label>
                        <input type="text" name="" id="email" class="form-control input-sm">
                        <label>Correo</label>
                        <input type="text" name="" id="telefono" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="background-color: #ff0153b5;color:white" class="btn " data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para edicion de datos -->

        <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content" style="background-color: rgba(15, 15, 15, 0.712);">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="color: blanchedalmond" id="myModalLabel">Verificar datos</h4>
                    </div>
                    <div class="modal-body" style="color: blanchedalmond">
                        <label>N.Cuenta</label>
                        <input type="text" name="" id="nombreu" class="form-control input-sm">
                        <label>Nombre</label>
                        <input type="text" name="" id="apellidou" class="form-control input-sm">
                        <label>Carrera</label>
                        <input type="text" name="" id="emailu" class="form-control input-sm">
                        <label>Correo</label>
                        <input type="text" name="" id="telefonou" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Aceptar</button>

                    </div>
                </div>
            </div>
        </div> 
    </body>
    <div class="navbar-fixed-bottom">
        <div class="text-center py-2" style="background-color: #fffafa69;">© 2020 Copyright:Carlos Serrano, Pamela Gutierrez
        </div>
    </div>

    </html>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').load('componentes/tabla.php');
            $('#buscador').load('componentes/buscador.php');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#guardarnuevo').click(function() {

                nombre = $('#nombre').val();
                apellido = $('#apellido').val();
                email = $('#email').val();
                telefono = $('#telefono').val();
                agregardatos(nombre, apellido, email, telefono);
            });



            $('#actualizadatos').click(function() {
                actualizaDatos();
            });

        });
    </script>
    <?php
}else{
    header("location:../index.html");
}
?>