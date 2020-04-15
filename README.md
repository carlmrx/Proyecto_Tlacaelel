# Proyecto_Tlacaelel
Proyecto de control de bitácoras unitec
video https://youtu.be/snHstjtlQG0
este proyecto es ta desarollado para mejorar el servicio y optimizar los procesos de registro de los almnos en una escuela
ya que este proceso se pierde mucho tiempo en registrar los datos a mano y despues pasandolos a maquina.
-------------------------------------------------------------------------------------------------------------
especificaciones:
PHP Version 7.4.3
base de datos en mysql 7.4.3 (phpmyadmin)
html5
css
java script / jquery-3.4.1
----------------------------------------------------------------------------------------------------------------
!importante importar las bases de datos que se encuentran el la carpeta bases de datos pruebas y pruebas2 son importantes para el funcionamiento y registro de datos 
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
1) primera parte
index->incluye la pagina de inicio y barra de navegacion para registrarse o acceder a la plataforma 
carpetas:
php->contiene los codigos funcionales php los cuales son:-------------
conexion_usuarios -> para conectarte a la base de datos usuario y asi permitir funcionar registro,loguin ysalir
login -> permite consultar al usuario y la contraseña para iniciar sesion
registro ->registra los usuarios
salir ->permite cerrar sesion
estilos->contiene la hoja de estilos y animaciones:------------------------
animate->hoja de estilo de animaciones obtenidas de https://daneden.github.io/animate.css/
estilo -> incluye todos los estilos de cada pagina como fondos de pantalla ,fuente de letra o color de texto
dependencias-> incluye los recursos que se utilizaron para maquetarlos estilos o animaciones -----------------------
boostrap -> boostrap vercion 4.4 framework de estilos obtenido de https://getbootstrap.com/
js -> java script que permite ver las animaciones de alertas usamos alertify 1.13.1 obtenido de https://alertifyjs.com/
base de datos->contiene los respaldos de las bases de datos las cuales se deven importar a phpmyadmin---------------------------
pruebas->tabla ficticia de alumnos para auto rellenado y tabla para generara la bitacora
pruebas2->tabla para el registro y consulta de los usuarios y estos puedadn ingresar a la plataforma
2) segunda parte 
bitacoras->la estructura y funcionalidad de el sistema de creacion de bitacoras--------------------------------
bitacoras.php -> pagina principal que se mostrara al iniciar sesion (comando $_SESSION['user'] para validar que se inicio sesion ) si no se a iniciado no abrira esta y mandara al index
des de esta pagina (bitacoras.php) se envian las instrucciones por medio de js para realizar registrar,actualizar,eliminar,cerrar sesion,imprimir y ver el tiempo que te tardaste en hace la vitacora
bitacoras->DESDE BITACORAS.PHP SE ENVIA LA INFORMACION Y SE EJECURTA EN LOS SIGUIENTES ARCHIVOS----------------
actualizardatos->actualiza los datos de el registro.
agregardatos->agrega un registro a la bitacora
conexion->establece la conexion a la tabla ficticia y a la tabla para hacer el registro
carrarsesio->termina la sesion de la persona y manda al index.
eliminardatos->elimina un registro seleccionado de la tabla
pdf->imprime e pdf de la bitacora creada obtenida de http://www.fpdf.org/ se uso la vercion v1.82 (07/12/2019)
platilla->da formato al pdf
tiempo->saca la diferiencia de tiempo entre el primer registro y el ultimo para determinar cuanto tardaste
librerias-> incluye los recursos y framaworks para dar estilo,animaciones y funcionalidad----------------------------
alertyfyjs-> muestra mensajes animados
boostrap->framewok de estilos v3.4
fpdf->funcionalidad para imprimir pdf
select2->estilo y animaciones
jquery 3.2.1
js->funcion de java script para agregar, eliminar y guardar----------------------------------------------
images->logo que se imprime en el pdf----------------------------
componentes-> recursos para mostrar en la pagina bitacoras.php
tabla->madiante una consulta de todos los registros muestra todos los registros insertados en nuestra bitacora
buscador->realiza una consulta en la tabla ficticia que contiene registros como ejemplo y al seleccionarlo lo manda a la tabla para poder agregarlo
al seleccionar se obtiene el id se envia por medio de js a la tabla mostrandola por una consulta de id
bd->query para creatr nuestro registro de bitacora (no es importante ya esta en el bakup de PRUEBAS )


-----------------------------------------------------------------
serrano cruz juan carlos 15/04/2020 
referencias de diseño,estrucrura y programacion
https://www.youtube.com/channel/UCEJD8IkseO_6Cscby8DSU0A
http://facultad-autodidacta.blogspot.com/
------------------------------------------------
probado en 	XAMPP Version: 7.4.3
por si no sabes debes instalar xamp compatible con las especificaciones de arriba,  extrae los archivos y pegalos en C:\xampp\htdocs
una vez importadas la bases de datos 
bres tu navegador y pegas esta ruta : http://localhost/proyecto%20final/ 
listo--------
---------
  
