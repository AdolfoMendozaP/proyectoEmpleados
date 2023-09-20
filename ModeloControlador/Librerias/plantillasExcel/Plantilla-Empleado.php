<?php
$mysqli = new mysqli("localhost", "root", "", "bdProyecto");

$empleado = "SELECT * FROM empleado WHERE NumEmpleado ORDER BY NumEmpleado ASC";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-laborales.xls");
?>
<table>
    <caption>Datos Laborales</caption>
    <tr>
        <th>#No. Empleado</th>
        <th>Nivel</th>
        <th>Nombre Completo</th>
        <th>RFC</th>
        <th>CUIP</th>
        <th>CURP</th>
        <th>Puesto</th>
        <th>Puesto Funcional</th>
        <th>Codigo Presupuestal</th>
        <th>Fecha de Ingreso</th>
        <th>Antigüedad Laboral</th>
        <th>Fecha de Promocion</th>
        <th>Turno - Area</th>
        <th>Status</th>
        <th>Fecha de Baja</th>
        <th>Motivo de Baja</th>
    </tr>
    <?php 
      $resul = mysqli_query($mysqli, $empleado);
      while ($row = mysqli_fetch_assoc($resul)) {?>
    <tr>
        <td><?php echo $row['NumEmpleado'];?></td>
        <td><?php echo $row['Nivel'];?></td>
        <td><?php echo $row['Appat'];?> <?php echo $row['Apmat'];?> <?php echo $row['Nombre'];?></td>
        <td><?php echo $row['RFC'];?></td>
        <td><?php echo $row['CUIP'];?></td>
        <td><?php echo $row['CURP'];?></td>
        <td><?php echo $row['Puesto'];?></td>
        <td><?php echo $row['PuestoFuncional'];?></td>
        <td><?php echo $row['Codigo'];?></td>
        <td><?php echo $row['FechaIngreso'];?></td>
        <td><?php echo $row['Antiguedad'];?></td>
        <td><?php echo $row['FechaPro'];?></td>
        <td><?php echo $row['TurnoArea'];?></td>
        <td><?php echo $row['StatusEm'];?></td>
        <td><?php echo $row['FechaBaja'];?></td>
        <td><?php echo $row['MotivoBaja'];?></td>
    </tr>
     <?php } mysqli_free_result($resul);?>
    
    
</table>