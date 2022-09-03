<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/Logo.png',10,2,45,0,'PNG');    
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de usuarios',0,0,'C');
    // Salto de línea
    $this->Ln(30);
    $this->Cell(65, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(75, 10, 'Correo', 1, 0, 'C', 0);
    $this->Cell(50, 10, 'idRol', 1, 1, 'C', 0);
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
include ('conexion.php');
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conx, $consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

foreach ($conx -> query($consulta) as $row){
    
    $pdf->Cell(65, 10, $row['Nombre'], 1, 0, 'C', 0);
    $pdf->Cell(75, 10, $row['Correo'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, $row['idRol'], 1, 1, 'C', 0);
}
$pdf->Output();
?>