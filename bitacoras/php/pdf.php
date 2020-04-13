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
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'ESTADO',1,0,'C',1);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(70,6,'MUNICIPIO',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $result->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(20,6,$row['apellido'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['email']),1,1,'C');
	}
	$pdf->Output();
?>
?>