<?php
require_once "php/conexion.php";
$conexion=conexion();

$consulta = "select min(fecha)from t_persona";//fecha inicial
$result1=mysqli_query($conexion,$consulta);//fecha inicial
while($mostrar=mysqli_fetch_array($result1)){
    $fecha1 = $mostrar['min(fecha)'];
   
}
$consulta2 = "select max(fecha)from t_persona";//fecha inicial
$result2=mysqli_query($conexion,$consulta2);//fecha inicial
while($mostrar=mysqli_fetch_array($result2)){
    $fecha2 =$mostrar['max(fecha)'];
   
}

#echo "las fechas son ",$fecha1," y la de fin es ",$fecha2," terminaste la bitacora en =";
$fecha1 = new DateTime($fecha1);//fecha inicial
$fecha2 = new DateTime($fecha2);//fecha de cierre

$intervalo = $fecha1->diff($fecha2);

#echo $intervalo->format(' %H horas %i minutos %s segundos');//00 años 0 meses 0 días 08 horas 0 minutos 0 segundos

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Comparativa de tiempo</title>
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

    <body class="body_tiempo">
    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="font-size:x-large;color: black" href="../index.html"><b>Bunt</b></a>
                    <a style="margin-top: 7px;font-size: 20px;line-height: 48px;letter-spacing: 0.045em;font-weight: 400;color:#70767b" href="../php/salir.php" role="button">salir</a>
                    <a style="margin-top: 7px;font-size: 20px;line-height: 48px;letter-spacing: 0.045em;font-weight: 400;color:#bfcf3c" href="tiempo.php" role="button">tiempo</a>

                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <h1>Rendimiento!</h1>
                <br>
                <div class="col-md-6 text-center">
                    <h3>Metodo tradicional 🙄  </h3>
                    <h5>Normalmente al hacer el registro el personal tarda entre 1 hora a 1 hora y media</h5>
                    <div class="rectangulo " style="margin-left: auto;margin-right: auto;margin-top: 10%;margin-bottom: 10%;">
                        <h2 style="margin-top: 33px">1 hora</h2>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <h2>Con Bunt! 😀  </h2>
                    <h5>Mientras que nuestra forma mejora esto y se toma almenos</h5>
                    <div class="rectangulo  " style="margin-left: auto;margin-right: auto;margin-top: 10%;margin-bottom: 10%;">
                        <h2 style="margin-top: 33px"><?php echo $intervalo->format(' %i minutos');?></h2>
                </div>
            </div>

        </div>

    </body>
    <div class="navbar-fixed-bottom">
        <div class="text-center py-2" style="background-color: #fffafa69;">© 2020 Copyright:Carlos Serrano, Pamela Gutierrez
        </div>
    </div>

    </html>
<style>
    .rectangulo {
     width: 250px; 
     height: 100px; 
     border: 3px solid white;
     background: #cd07ff63;
     border-radius: 15px;
}
</style>