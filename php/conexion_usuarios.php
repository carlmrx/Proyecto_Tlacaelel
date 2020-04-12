<?php
#conexion col la base de datos de usuarios registro/registro/busqueda

function conexion(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "usuarios";

    return $conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
}

?>
