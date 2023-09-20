<?php
$mysqli = new mysqli("localhost", "root", "", "bdProyecto");

$personal = "SELECT empleado.NumEmpleado, NumPersonal, Foto, Nombre, Appat, Apmat, Edad, FechaNa, Escolaridad, Especialidad, Estado, Municipio, EstadoCivil, NumDepEco, Sexo, TipoSangre, Calle, Numero, Colonia, CP, Ciudad, TipoHabitacion, TelParticular, TelOficina, Ext, TelCelular, TelEmergencia, Caso, CorreoPart, CorreoInstitu, Observaciones From personales INNER JOIN empleado WHERE empleado.NumEmpleado = personales.NumEmpleado ORDER BY empleado.NumEmpleado ASC";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-personales.xls");
?>
<table>
    <caption>Datos Personales</caption>
    <tr>
        <th>No. Prog</th>
        <th>#No. Empleado</th>
        <th>Nombre Completo</th>
        <th>Edad</th>
        <th>Fecha de Nacimiento</th>
        <th>Escolaridad</th>
        <th>Especialidad</th>
        <th>Estado y Municipio</th>
        <th>Estado Civil</th>
        <th>No. Dependientes economicos</th>
        <th>Sexo</th>
        <th>Tipo de Sangre</th>
        <th>Domicilio</th>
        <th>Ciudad de Residencia</th>
        <th>Tipo de Habitacion</th>
        <th>Telefono Particular</th>
        <th>Telefono Oficina</th>
        <th>Ext</th>
        <th>Telefono Celular</th>
        <th>Telefono Emergencia</th>
        <th>En caso de emergencia avisar a</th>
        <th>Correo Particular</th>
        <th>Correo Institucional</th>
        <th>Observaciones</th>
    </tr>
    <?php 
      $resul = mysqli_query($mysqli, $personal);
      while ($row = mysqli_fetch_assoc($resul)) {?>
    <tr>
                                <td><?php echo $row['NumPersonal'];?></td>
                                <td><?php echo $row['NumEmpleado'];?></td>
                                <td><?php echo $row['Appat'];?> <?php echo $row['Apmat'];?> <?php echo $row['Nombre'];?></td>
                                <td><?php echo $row['Edad'];?></td>
                                <td><?php echo $row['FechaNa'];?></td>
                                <td><?php echo $row['Escolaridad'];?></td>
                                <td><?php echo $row['Especialidad'];?></td>
                                <td><?php echo $row['Estado'];?> <?php echo $row['Municipio'];?></td>
                                <td><?php echo $row['EstadoCivil'];?></td>
                                <td><?php echo $row['NumDepEco'];?></td>
                                <td><?php echo $row['Sexo'];?></td>
                                <td><?php echo $row['TipoSangre'];?></td>
                                <td><?php echo $row['Calle'];?> <?php echo $row['Numero'];?> <?php echo $row['Colonia'];?> <?php echo $row['CP'];?></td>
                                <td><?php echo $row['Ciudad'];?></td>
                                <td><?php echo $row['TipoHabitacion'];?></td>
                                <td><?php echo $row['TelParticular'];?></td>
                                <td><?php echo $row['TelOficina'];?></td>
                                <td><?php echo $row['Ext'];?></td>
                                <td><?php echo $row['TelCelular'];?></td>
                                <td><?php echo $row['TelEmergencia'];?></td>
                                <td><?php echo $row['Caso'];?></td>
                                <td><?php echo $row['CorreoPart'];?></td>
                                <td><?php echo $row['CorreoInstitu'];?></td>
                                <td><?php echo $row['Observaciones'];?></td>
    </tr>
     <?php } mysqli_free_result($resul);?>
    
    
</table>
