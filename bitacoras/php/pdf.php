<?php
include 'plantilla.php';
            $servidor="localhost";
			$usuario="root";
			$password="";
			$bd="pruebas";
			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

$sql="SELECT id,nombre,apellido,email,telefono from t_persona";
$result=mysqli_query($conexion,$sql);
$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(21, 170, 234);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'Nombre',1,0,'C',1);
	$pdf->Cell(50,6,'Apellido',1,0,'C',1);
	$pdf->Cell(20,6,'telefono',1,0,'C',1);
	$pdf->Cell(70,6,'Correo',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $result->fetch_assoc())
	{
		$pdf->Cell(40,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(50,6,$row['apellido'],1,0,'C');
		$pdf->Cell(20,6,$row['telefono'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['email']),1,1,'C');

		
	}
	
	$pdf->Output();
	$sql="TRUNCATE TABLE t_persona";
	$result=mysqli_query($conexion,$sql);

?>
?>