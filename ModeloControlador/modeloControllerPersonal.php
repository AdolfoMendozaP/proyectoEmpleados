<?php
//--CONEXION DE LA BASE DE DATOS - PDO--//
        require_once 'database.php';
        
        $db = new Database();
        $con = $db->conectar();
        
        $correcto = false;
        
        try {
            //--ACTUALIZAR DATOS - UPDATE--//
            if (isset($_POST['NumPersonal'])) {
            
         $NumPersonal = $_POST['NumPersonal'];
         $Edad = $_POST['Edad'];
         $FechaNa = $_POST['FechaNa'];
         
         //--Escolaridad - UPDATE--//
         $Escolaridad = $_POST['Escolaridad'];
         switch ($_REQUEST['Escolaridad'])
         {
       case 'Primaria':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Secundaria':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Preparatoria':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Bachilerato':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Bachillerato':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Bachillertato':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Carrera Comercial':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Carrera Tecnica':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Tecnico/a':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'TSU':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Licenciatura':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Ingenieria':
       //echo $_REQUEST['Escolaridad'];
       break;
    }
         $Especialidad = $_POST['Especialidad'];
         $Estado = $_POST['Estado'];
         $Municipio = $_POST['Municipio'];
         $EstadoCivil = $_POST['EstadoCivil'];
         switch ($_REQUEST['EstadoCivil'])
         {
       case 'Soltero/a':
       //echo $_REQUEST['EstadoCivil'];
       break;
   
       case 'Casado/a':
       //echo $_REQUEST['EstadoCivil'];
       break;
        }
         $NumDepEco = $_POST['NumDepEco'];
         $Sexo = $_POST['Sexo'];
         $TipoSangre = $_POST['TipoSangre'];
         $Calle = $_POST['Calle'];
         $Numero = $_POST['Numero'];
         $Colonia = $_POST['Colonia'];
         $CP = $_POST['CP'];
         $Ciudad = $_POST['Ciudad'];
         $TipoHabitacion = $_POST['TipoHabitacion'];
         switch ($_REQUEST['TipoHabitacion'])
         {
       case 'CREDITO HIPOTECARIO':
       //echo $_REQUEST['TipoHabitacion'];
       break;
   
       case 'FAMILIAR':
       //echo $_REQUEST['TipoHabitacion'];
       break;
   
       case 'PRESTADA':
       //echo $_REQUEST['TipoHabitacion'];
       break;
   
       case 'PROPIA':
       //echo $_REQUEST['TipoHabitacion'];
       break;
   
       case 'RENTADA':
       //echo $_REQUEST['TipoHabitacion'];
       break;
         }
         $TelParticular = $_POST['TelParticular'];
         $TelOficina = $_POST['TelOficina'];
         $Ext = $_POST['Ext'];
         $TelCelular = $_POST['TelCelular'];
         $TelEmergencia = $_POST['TelEmergencia'];
         $Caso = $_POST['Caso'];
         $CorreoPart = $_POST['CorreoPart'];
         $CorreoInstitu = $_POST['CorreoInstitu'];
         $Observaciones = $_POST['Observaciones'];
         
         $query = $con->prepare("UPDATE personales SET Edad=?, FechaNa=?, Escolaridad=?, Especialidad=?, Estado=?, Municipio=?, EstadoCivil=?, NumDepEco=?, Sexo=?, TipoSangre=?, Calle=?, Numero=?, Colonia=?, CP=?, Ciudad=?, TipoHabitacion=?, TelParticular=?, TelOficina=?, Ext=?, TelCelular=?, TelEmergencia=?, Caso=?, CorreoPart=?, CorreoInstitu=?, Observaciones=? WHERE NumPersonal=?");
         $resultado = $query->execute(array($Edad, $FechaNa, $Escolaridad, $Especialidad, $Estado, $Municipio, $EstadoCivil, $NumDepEco, $Sexo, $TipoSangre, $Calle, $Numero, $Colonia, $CP, $Ciudad, $TipoHabitacion, $TelParticular, $TelOficina, $Ext, $TelCelular, $TelEmergencia, $Caso, $CorreoPart, $CorreoInstitu, $Observaciones, $NumPersonal));
         
         
        if ($resultado) {
        $correcto = true;
    }

    
} else {
    
    $NumEmpleado = $_POST['NumEmpleado'];
    $Edad = $_POST['Edad'];
    $FechaNa = $_POST['FechaNa'];
    $Escolaridad = $_POST['Escolaridad'];
    switch ($_REQUEST['Escolaridad'])
    {
       case 'Primaria':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Secundaria':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Preparatoria':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Bachilerato':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Bachillerato':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Bachillertato':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Carrera Comercial':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Carrera Tecnica':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Tecnico/a':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'TSU':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Licenciatura':
       //echo $_REQUEST['Escolaridad'];
       break;
   
       case 'Ingenieria':
       //echo $_REQUEST['Escolaridad'];
       break;
    }
    $Especialidad = $_POST['Especialidad'];
    $Estado = $_POST['Estado'];
    $Municipio = $_POST['Municipio'];
    $EstadoCivil = $_POST['EstadoCivil'];
    switch ($_REQUEST['EstadoCivil'])
    {
       case 'Soltero/a':
       //echo $_REQUEST['EstadoCivil'];
       break;
   
       case 'Casado/a':
       //echo $_REQUEST['EstadoCivil'];
       break;
    }
    
    $NumDepEco = $_POST['NumDepEco'];
    $Sexo = $_POST['Sexo'];
    switch ($_REQUEST['Sexo'])
    {
       case 'Masculino':
       //echo $_REQUEST['Sexo'];
       break;
   
       case 'Femenino':
       //echo $_REQUEST['Sexo'];
       break;
    }
    
    $TipoSangre = $_POST['TipoSangre'];
    $Calle = $_POST['Calle'];
    $Numero = $_POST['Numero'];
    $Colonia = $_POST['Colonia'];
    $CP = $_POST['CP'];
    $Ciudad = $_POST['Ciudad'];
    
    $TipoHabitacion = $_POST['TipoHabitacion'];
    switch ($_REQUEST['TipoHabitacion'])
    {
       case 'CREDITO HIPOTECARIO':
       //echo $_REQUEST['TipoHabitacion'];
       break;
   
       case 'FAMILIAR':
       //echo $_REQUEST['TipoHabitacion'];
       break;
   
       case 'PRESTADA':
       //echo $_REQUEST['TipoHabitacion'];
       break;
   
       case 'PROPIA':
       //echo $_REQUEST['TipoHabitacion'];
       break;
   
       case 'RENTADA':
       //echo $_REQUEST['TipoHabitacion'];
       break;
    }
    
    $TelParticular = $_POST['TelParticular'];
    $TelOficina = $_POST['TelOficina'];
    $Ext = $_POST['Ext'];
    $TelCelular = $_POST['TelCelular'];
    $TelEmergencia = $_POST['TelEmergencia'];
    $Caso = $_POST['Caso'];
    $CorreoPart = $_POST['CorreoPart'];
    $CorreoInstitu = $_POST['CorreoInstitu'];
    $Observaciones = $_POST['Observaciones'];
    
  
    $query = $con->prepare("INSERT INTO personales (NumEmpleado, Edad, FechaNa, Escolaridad, Especialidad, Estado, Municipio, EstadoCivil, NumDepEco, Sexo, TipoSangre, Calle, Numero, Colonia, CP, Ciudad, TipoHabitacion, TelParticular, TelOficina, Ext, TelCelular, TelEmergencia, Caso, CorreoPart, CorreoInstitu, Observaciones) VALUES (:NumEmpleado, :Edad, :FechaNa, :Escolaridad, :Especialidad, :Estado, :Municipio, :EstadoCivil, :NumDepEco, :Sexo, :TipoSangre, :Calle, :Numero, :Colonia, :CP, :Ciudad, :TipoHabitacion, :TelParticular, :TelOficina, :Ext, :TelCelular, :TelEmergencia, :Caso, :CorreoPart, :CorreoInstitu, :Observaciones)");
    $resultado = $query->execute(array('NumEmpleado' => $NumEmpleado, 'Edad' => $Edad, 'FechaNa' => $FechaNa, 'Escolaridad' => $Escolaridad, 'Especialidad' => $Especialidad, 'Estado' => $Estado, 'Municipio' => $Municipio, 'EstadoCivil' => $EstadoCivil, 'NumDepEco' => $NumDepEco, 'Sexo' => $Sexo, 'TipoSangre' => $TipoSangre, 'Calle' => $Calle, 'Numero' => $Numero, 'Colonia' => $Colonia, 'CP' => $CP, 'Ciudad' => $Ciudad, 'TipoHabitacion' => $TipoHabitacion, 'TelParticular' => $TelParticular, 'TelOficina' => $TelOficina, 'Ext' => $Ext, 'TelCelular' => $TelCelular, 'TelEmergencia' => $TelEmergencia, 'Caso' => $Caso, 'CorreoPart' => $CorreoPart, 'CorreoInstitu' => $CorreoInstitu, 'Observaciones' => $Observaciones));

    if ($resultado) {
        $correcto = true;
        
    }
}
     } 
            
            catch (Exception $e) 
     {
            echo 'Error de actualizar o ingresar datos al servidor' .$e->getMessage();
            exit(); 
     }
        
        
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Registro</title>
        
        <link type="text/css" rel="stylesheet" href="../Resource/css/estilos.css"><link rel="icon" href="../Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" href="../Resource/assets/icon/fonts.css">
        <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </head>
    <body class="py-3">
        <header>
            <section id="banner">
                <h2>Centro Estatal de Prevención y Reinserción Social de León Gto</h2>
            </section>
        </header>
        <br><br><br><br><br>
        <main class="container">
             <div class="p-3 rounded">
               <div class="row">
                <div class="col">
                    
                    <?php if ($correcto) { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                     <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                     </symbol>
                     <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                     <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                     </symbol>
                     <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                     <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                     </symbol>
                    </svg>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                         &nbsp;  Los datos se guardaron y se actualizaron correctamente
                    </div>
                    <div class="card">
                        <div class="card-header">
                        <h3><span><i class="icon icon-Guardar"></i></span>  Registro Guardado de Datos Personales</h3>
                        </div>
                        <div class="card-body">
                            <?php
                                  echo "<b>Datos ingresados y/o actualizados en el servidor</b>";
                                  echo "<br>";echo "<br>";
                                  echo "No. de Empleado: ";
                                  echo $_POST['NumEmpleado'];
                                  echo "<br>";
                                  echo "Edad: ";
                                  echo $_POST['Edad'];
                                  echo "<br>";
                                  echo "Fecha de Nacimiento: ";
                                  echo $_POST['FechaNa'];
                                  echo "<br>";
                                  echo "Escolaridad: ";
                                  echo $_POST['Escolaridad'];
                                  echo "<br>";
                                  echo "Especialidad: ";
                                  echo $_POST['Especialidad'];
                                  echo "<br>";
                                  echo "Estado: ";
                                  echo $_POST['Estado'];
                                  echo "<br>";
                                  echo "Municipio: ";
                                  echo $_POST['Municipio'];
                                  echo "<br>";
                                  echo "Estado Civil: ";
                                  echo $_POST['EstadoCivil'];
                                  echo "<br>";
                                  echo "No. Dependientes economicos: ";
                                  echo $_POST['NumDepEco'];
                                  echo "<br>";
                                  echo "Sexo: ";
                                  echo $_POST['Sexo'];
                                  echo "<br>";
                                  echo "Tipo de Sangre: ";
                                  echo $_POST['TipoSangre'];
                                  echo "<br>";
                                  echo "Domicilio: ";
                                  echo $_POST['Calle']; echo '&nbsp;'; echo $_POST['Numero']; echo '&nbsp;'; echo $_POST['Colonia'];
                                  echo "<br>";
                                  echo "Codigo Postal: ";
                                  echo $_POST['CP'];
                                  echo "<br>";
                                  echo "Ciudad de Residencia: ";
                                  echo $_POST['Ciudad'];
                                  echo "<br>";
                                  echo "Tipo de Habitacion: ";
                                  echo $_POST['TipoHabitacion'];
                                  echo "<br>";
                                  echo "Telefono Particular: ";
                                  echo $_POST['TelParticular'];
                                  echo "<br>";
                                  echo "Telefono de Oficina: ";
                                  echo $_POST['TelOficina'];
                                  echo "<br>";
                                  echo "Ext: ";
                                  echo $_POST['Ext'];
                                  echo "<br>";
                                  echo "Telefono de Celular: ";
                                  echo $_POST['TelCelular'];
                                  echo "<br>";
                                  echo "Telefono de Emergencia: ";
                                  echo $_POST['TelEmergencia'];
                                  echo "<br>";
                                  echo "En caso de emergencia avisar a: ";
                                  echo $_POST['Caso'];
                                  echo "<br>";
                                  echo "Correo Particular: ";
                                  echo $_POST['CorreoPart'];
                                  echo "<br>";
                                  echo "Correo Institucional: ";
                                  echo $_POST['CorreoInstitu'];
                                  echo "<br>";
                                  echo "Observaciones: ";
                                  echo $_POST['Observaciones'];
                                  echo "<br>";
                                  echo "<br>";
                                  echo "<b>Horario del Registro: </b>";
                                  date_default_timezone_set('America/Mexico_City');
                                  echo date("d/m/y h:i:s");
                            ?>
                        </div>
                    <?php } else { ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                         &nbsp;  Los datos no se guardaron correctamente
                    </div>
                      <div class="card">
                        <div class="card-header">
                        <h3><span><i class="icon icon-Error"></i></span> Error al Guardar</h3>
                        </div>
                        <div class="card-body">
                            <?php
                                echo "No se almaceno los datos al servidor";
                            ?>
                        </div>
                         
                    <?php }  ?>
                
            
                <div class="card-footer">
                    <a class="btn btn-outline-primary" style="box-shadow: none;" href="../Vista/personal/index.php"><span><i class="icon icon-Salir"></i></span>  Regresar al Ingresos Laborales</a>
                 </div>
               </div>
                </div>
               </div>
             </div>
             </div>
    </main>
    </body>
</html>