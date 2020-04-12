<?php
require_once "conexion_usuarios.php";
$conexion=conexion();
#variables
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$contraseña=$_POST['contraseña'];
$codigo=$_POST['codigo'];

if( repetido($usuario,$correo,$conexion)==1){
echo 2;
}else{
        $sql="INSERT INTO `registro`(`correo`, `usuario`, `nombre`, `apellidos`, `contraseña`, `codigo`) 
        VALUES ('$correo','$usuario','$nombre','$apellidos','$contraseña','$codigo')";
        echo $result=mysqli_query($conexion,$sql);
}
        function repetido($user,$correo,$conexion){
                $sql="SELECT * FROM `registro` WHERE `usuario`='$user' or `correo`='$correo'";
                $result=mysqli_query($conexion,$sql);
                if(mysqli_num_rows($result)>0){
                        return 1;
                }else{
                        return 0;
                }
        }
?>