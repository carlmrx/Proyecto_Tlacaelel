
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Registro</h2>
		<table class="table  table-condensed table-bordered">
		<caption>
			<button class="btn" data-toggle="modal" style="background-color: #6d24e394;color:white" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
			<br><br>
		</caption>
			<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Email</td>
				<td>Telefono</td>
				<td>Aceptar</td>
				<td>Eliminar</td>
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,no_cuenta, nombre, carrera, correo
						from mytable where id='$idp'";
					}else{
						$sql="SELECT id,nombre,apellido,email,telefono 
						from t_persona";
					}
				}else{
					$sql="SELECT id,nombre,apellido,email,telefono 
						from t_persona";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td>
					<button class="btn  btn-info glyphicon glyphicon-ok" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>