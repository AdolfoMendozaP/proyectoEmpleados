<?php
$mysqli = new mysqli("localhost", "root", "", "bdProyecto");

$incapacidades = "SELECT NumIncapacidad, empleado.NumEmpleado, Foto, Nombre, Appat, Apmat, RFC, FechaIngreso, Antiguedad, Folio, FechaExpedicion, DiasIncapacidad, PeriodoInicio, PeriodoFinal, Diagnostico, NombreMedico, Licencias, incapacidad.StatusIn, ProgresoInca, ControlSuel, LimitesInca FROM incapacidad INNER JOIN empleado WHERE empleado.NumEmpleado = incapacidad.NumEmpleado ORDER BY empleado.NumEmpleado ASC";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=incapacidades.xls");
?>
<table>
    <caption>Datos Laborales</caption>
    <tr>
        <th>#No. Empleado</th>
        <th>Nombre Completo</th>
        <th>RFC</th>
        <th>Fecha de Ingreso</th>
        <th>Antigüedad Laboral</th>
        <th>Folio de Incapacidad</th>
        <th>Fecha de Expedicion</th>
        <th>Dias de Incapacidad</th>
        <th>Periodo de Incapacidad</th>
        <th>Diagnostico</th>
        <th>Medico que expide</th>
        <th>Registro de Licencias</th>
        <th>Status de la incapacidad</th>
        <th>Control del Sueldo</th>
        <th>Limite de la Incapacidad</th>
    </tr>
    <?php 
      $resul = mysqli_query($mysqli, $incapacidades);
      while ($row = mysqli_fetch_assoc($resul)) {?>
    <tr>
        <td><?php echo $row['NumEmpleado'];?></td>
        <td><?php echo $row['Appat'];?> <?php echo $row['Apmat'];?> <?php echo $row['Nombre'];?></td>
        <td><?php echo $row['RFC'];?></td>
        <td><?php echo $row['FechaIngreso'];?></td>
        <td><?php echo $row['Antiguedad'];?></td>
        <td><?php echo $row['Folio'];?></td>
        <td><?php echo $row['FechaExpedicion'];?></td>
        <td><?php echo $row['DiasIncapacidad'];?></td>
        <td><?php echo $row['PeriodoInicio'];?> <?php echo $row['PeriodoFinal'];?></td>
        <td><?php echo $row['Diagnostico'];?></td>
        <td><?php echo $row['NombreMedico'];?></td>
        <td><?php echo $row['Licencias'];?></td>
        <td><?php echo $row['StatusIn'];?></td>
        <td><?php echo $row['ControlSuel'];?></td>
        <td><?php echo $row['LimitesInca'];?></td>
    </tr>
     <?php } mysqli_free_result($resul);?>
    
    
</table>