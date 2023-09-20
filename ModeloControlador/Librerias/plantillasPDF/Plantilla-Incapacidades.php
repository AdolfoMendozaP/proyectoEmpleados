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
    $this->Cell(100,10, utf8_decode('Reporte de Incapacidades'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
    $this->Cell(35, 10, '#No. de Empleado', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Apellido Paterno', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Apellido Materno', 1, 0, 'C', 0);
    $this->Cell(35, 10,  'RFC', 1, 0, 'C', 0);
    $this->Cell(30, 10,  'Fecha de Ingreso', 1, 0, 'C', 0);
    $this->Cell(35, 10, utf8_decode('Antigüedad Laboral'), 1, 0, 'C', 0);
    $this->Cell(55, 10, 'Folio de Incapacidad', 1, 0, 'C', 0);
    $this->Cell(65, 10, 'Fecha de Expedicion', 1, 0, 'C', 0);
    $this->Cell(60, 10, 'Dias de Incapacidad', 1, 0, 'C', 0);
    $this->Cell(30, 10,  'Periodo Inicio', 1, 0, 'C', 0);
    $this->Cell(30, 10,  'Periodo Final', 1, 0, 'C', 0);
    $this->Cell(75, 10, 'Diagnostico', 1, 0, 'C', 0);
    $this->Cell(60, 10, 'Medico que expide', 1, 0, 'C', 0);
    $this->Cell(45, 10, 'Registro de Licencias', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Status de la incapacidad', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Control del Sueldo', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Limite de la Incapacidad', 1, 1, 'C', 0);
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

$consulta = "SELECT NumIncapacidad, empleado.NumEmpleado, Foto, Nombre, Appat, Apmat, RFC, FechaIngreso, Antiguedad, Folio, FechaExpedicion, DiasIncapacidad, PeriodoInicio, PeriodoFinal, Diagnostico, NombreMedico, Licencias, incapacidad.StatusIn, ProgresoInca, ControlSuel, LimitesInca FROM incapacidad INNER JOIN empleado WHERE empleado.NumEmpleado = incapacidad.NumEmpleado ORDER BY empleado.NumEmpleado ASC";
$resul = $mysqli->query($consulta);

$pdf = new PDF('L','mm', array(300,790));

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
while ($row = $resul->fetch_assoc()) {
    $pdf->Cell(35, 10, $row['NumEmpleado'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['Nombre'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Appat'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Apmat'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['RFC'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['FechaIngreso'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Antiguedad'], 1, 0, 'C', 0);
    $pdf->Cell(55, 10, $row['Folio'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row['FechaExpedicion'], 1, 0, 'C', 0);
    $pdf->Cell(60, 10, $row['DiasIncapacidad'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['PeriodoInicio'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['PeriodoFinal'], 1, 0, 'C', 0);
    $pdf->Cell(75, 10, $row['Diagnostico'], 1, 0, 'C', 0);
    $pdf->Cell(60, 10, $row['NombreMedico'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['Licencias'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['StatusIn'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['ControlSuel'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['LimitesInca'], 1, 1, 'C', 0);    
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
        <title></title>
    </head>
    <body>
        
    </body>
</html>
