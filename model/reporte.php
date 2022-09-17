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
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->Cell(70,10,'Reporte de usuarios',0,0,'C');
    $this->Cell(-70,20,'Huevos Jireth',0,0,'C');
    setlocale(LC_TIME, "");
        date_default_timezone_set('America/Bogota');
        $date_du_jour = utf8_encode(strftime('%d/%m/%Y/%H:%M'));
        $this->Cell(200,10, $date_du_jour,0,0,'C');
    // Salto de línea
    $this->Ln(30);
    $this->setFillColor(255, 158, 74); 
    $this->Cell(65, 10, 'Nombre', 1, 0, 'C', 1);
    $this->Cell(75, 10, 'Correo', 1, 0, 'C', 1);
    $this->Cell(50, 10, 'idRol', 1, 1, 'C', 1);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    
    $this->SetFillColor(255,140,0);
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

$consulta2 = "SELECT COUNT(*) total FROM usuarios WHERE idRol !='1'";
$resultado2 = mysqli_query($conx, $consulta2);
$conteo = mysqli_fetch_assoc($resultado2);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

foreach ($conx -> query($consulta) as $row){
    
    $pdf->Cell(65, 10, utf8_decode($row['Nombre']), 1, 0, 'C', 0);
    $pdf->Cell(75, 10, $row['Correo'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, $row['idRol'], 1, 1, 'C', 0);
}

$pdf->Ln(30);
$pdf->Cell(0, 10, 'Cantidad de clientes Total:', 0, 1, 'B', 0);
$pdf->Cell(0, 10, $conteo ['total'], 0, 1, 'b', 0); 

$pdf->Output();
?>

