<?php
require('../fpdf/fpdf.php');

try 
{

class PDF extends FPDF
{

function Header()
{
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(200);
    // Título
    $this->Cell(100,10, utf8_decode('Reporte de Ingresos Generales'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
    $this->Cell(35, 10, '#No. de Empleado', 1, 0, 'C', 0);
    $this->Cell(40, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Apellido Paterno', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Apellido Materno', 1, 0, 'C', 0);
    $this->Cell(15, 10,  'Edad', 1, 0, 'C', 0);
    $this->Cell(45, 10,  'Fecha de Ingreso', 1, 0, 'C', 0);
    $this->Cell(80, 10,  'Puesto', 1, 0, 'C', 0);
    $this->Cell(90, 10,  'Puesto Funcional', 1, 0, 'C', 0);
    $this->Cell(50, 10,  'Turno - Area', 1, 0, 'C', 0);
    $this->Cell(80, 10,  'Correo Institucional', 1, 0, 'C', 0);
    $this->Cell(35, 10,  'Telefono Oficina', 1, 0, 'C', 0);
    $this->Cell(20, 10,  'Ext', 1, 0, 'C', 0);
    $this->Cell(35, 10, utf8_decode('Antigüedad Laboral'), 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}    

$mysqli = new mysqli("localhost", "root", "", "bdProyecto");

$consulta = "SELECT * From empleado INNER JOIN personales WHERE empleado.NumEmpleado = personales.NumEmpleado ORDER BY empleado.NumEmpleado ASC";
$resul = $mysqli->query($consulta);

$pdf = new PDF('L','mm', array(300,620));

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
while ($row = $resul->fetch_assoc()) {
    $pdf->Cell(35, 10, $row['NumEmpleado'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['Nombre'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Appat'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Apmat'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row['Edad'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['FechaIngreso'], 1, 0, 'C', 0);
    $pdf->Cell(80, 10, $row['Puesto'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $row['PuestoFuncional'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, $row['TurnoArea'], 1, 0, 'C', 0);
    $pdf->Cell(80, 10, $row['CorreoInstitu'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['TelOficina'], 1, 0, 'C', 0);   
    $pdf->Cell(20, 10, $row['Ext'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Antiguedad'], 1, 1, 'C', 0);
    
    
}

$pdf->Output();
}

catch (PDOException $e) 
{
    echo 'Error de generar PDF' .$e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reporte PDF</title>
    </head>
    <body>
        
    </body>
</html>