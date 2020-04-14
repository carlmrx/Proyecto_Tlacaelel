<?php
include 'plantilla.php';
$servidor="localhost";
$usuario="root";
$password="";
$bd="pruebas";
$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

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

echo "las fechas son ",$fecha1," y la de fin es ",$fecha2," terminaste la bitacora en =";
$fecha1 = new DateTime($fecha1);//fecha inicial
$fecha2 = new DateTime($fecha2);//fecha de cierre

$intervalo = $fecha1->diff($fecha2);

echo $intervalo->format('%Y años %m meses %d days %H horas %i minutos 
%s segundos');//00 años 0 meses 0 días 08 horas 0 minutos 0 segundos



?>