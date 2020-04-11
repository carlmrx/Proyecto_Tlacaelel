create database usuarios;
create table(
    id int  NOT NULL AUTO_INCREMENT,
    correo varchar(40),
    usuario varchar(40),
    nombre varchar(40),
    apellidos varchar(40),
    contraseña varchar(40),
    codigo varchar(40)
);