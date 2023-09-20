<?php

 $mysqli = new mysqli("localhost", "root", "", "bdProyecto");
 
 try 
 {
    $columns = ['NumEmpleado', 'Foto', 'Nombre', 'Edad', 'FechaIngreso', 'Puesto', 'PuestoFuncional', 'TurnoArea', 'CorreoInstitu', 'TelOficina', 'Ext', 'StatusEm', 'Antiguedad'];
    $table = "empleado";
    
    $busqueda = $mysqli->real_escape_string($_POST['busqueda']) ?? null;
 }
 
catch (PDOExceptionException $e) 
{
    echo 'Error de busqueda' .$e->getMessage();
    exit();
}

