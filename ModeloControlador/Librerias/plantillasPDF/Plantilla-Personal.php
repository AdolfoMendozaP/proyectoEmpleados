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
    $this->Cell(100,10, utf8_decode('Reporte de datos Personales'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
    
    $this->Cell(35, 10, '#No. de Empleado', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Apellido Paterno', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Apellido Materno', 1, 0, 'C', 0);
    $this->Cell(35, 10,  'Edad', 1, 0, 'C', 0);
    $this->Cell(45, 10,  'Fecha de Nacimiento', 1, 0, 'C', 0);
    $this->Cell(55, 10,  'Escolaridad', 1, 0, 'C', 0);
    $this->Cell(55, 10,  'Especialidad', 1, 0, 'C', 0);
    $this->Cell(65, 10,  'Estado', 1, 0, 'C', 0);
    $this->Cell(60, 10,  'Municipio', 1, 0, 'C', 0);
    $this->Cell(30, 10,  'Estado Civil', 1, 0, 'C', 0);
    $this->Cell(35, 10,  'No. Dependientes economicos', 1, 0, 'C', 0);
    $this->Cell(30, 10,  'Sexo', 1, 0, 'C', 0);
    $this->Cell(35, 10,  'Tipo de Sangre', 1, 0, 'C', 0);
    $this->Cell(20, 10,  'Calle', 1, 0, 'C', 0);
    $this->Cell(30, 10,  'Numero', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Colonia', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'CP', 1, 0, 'C', 0);
    $this->Cell(20, 10,  'Ciudad de Residencia', 1, 0, 'C', 0);
    $this->Cell(30, 10,  'Tipo de Habitacion', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Telefono Particular', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Telefono Oficina', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Ext', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Telefono Celular', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Telefono Emergencia', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'En caso de emergencia avisar a', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Correo Particular', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Correo Institucional', 1, 0, 'C', 0);
    $this->Cell(40, 10,  'Observaciones', 1, 1, 'C', 0);
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

$consulta = "SELECT empleado.NumEmpleado, NumPersonal, Foto, Nombre, Appat, Apmat, Edad, FechaNa, Escolaridad, Especialidad, Estado, Municipio, EstadoCivil, NumDepEco, Sexo, TipoSangre, Calle, Numero, Colonia, CP, Ciudad, TipoHabitacion, TelParticular, TelOficina, Ext, TelCelular, TelEmergencia, Caso, CorreoPart, CorreoInstitu, Observaciones From personales INNER JOIN empleado WHERE empleado.NumEmpleado = personales.NumEmpleado ORDER BY empleado.NumEmpleado ASC";
$resul = $mysqli->query($consulta);

$pdf = new PDF('L','mm', array(300,1135));

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
while ($row = $resul->fetch_assoc()) {
    $pdf->Cell(35, 10, $row['NumEmpleado'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['Nombre'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Appat'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Apmat'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Edad'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['FechaNa'], 1, 0, 'C', 0);
    $pdf->Cell(55, 10, $row['Escolaridad'], 1, 0, 'C', 0);
    $pdf->Cell(55, 10, $row['Especialidad'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row['Estado'], 1, 0, 'C', 0);
    $pdf->Cell(60, 10, $row['Municipio'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['EstadoCivil'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['NumDepEco'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['Sexo'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['TipoSangre'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['Calle'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['Numero'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['Colonia'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['CP'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['Ciudad'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['TipoHabitacion'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['TelParticular'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['TelOficina'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['Ext'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['TelCelular'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['TelEmergencia'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['Caso'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['CorreoPart'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['CorreoInstitu'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['Observaciones'], 1, 1, 'C', 0);    
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
