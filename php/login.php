<?php
session_start();
require_once "conexion_usuarios.php";
$conexion=conexion();
#variables
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
#sql
$sql="SELECT * FROM `registro` WHERE `contraseña`='$contraseña' and `correo`='$correo'";
$result=mysqli_query($conexion,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['user']=$correo;
        echo 1;
    }else{
        echo 0;
    }
?>