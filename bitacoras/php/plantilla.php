<?php
require '../librerias/fpdf/fpdf.php';


class PDF extends FPDF{
        function Header(){
            $this->Image('../images/bunt.png', 8, 8, 40 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Bitacoras unitec',0,0,'C');
			$this->Ln(20);
			$this->SetFont('Arial','i',10);

        }
        function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}	
}
?>