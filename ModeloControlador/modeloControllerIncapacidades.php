<?php
        require_once 'database.php';
        
        $db = new Database();
        $con = $db->conectar();
        
        $correcto = false;
        
        try 
        {
          if (isset($_POST['NumIncapacidad'])) {
            
            $NumIncapacidad = $_POST['NumIncapacidad'];
            $Folio = $_POST['Folio'];
            $FechaExpedicion = $_POST['FechaExpedicion'];
            $DiasIncapacidad = $_POST['DiasIncapacidad'];
            $PeriodoInicio = $_POST['PeriodoInicio'];
            $PeriodoFinal = $_POST['PeriodoFinal'];
            $Diagnostico = $_POST['Diagnostico'];
            $NombreMedico = $_POST['NombreMedico'];
            $Licencias = $_POST['Licencias'];
            
            $StatusIn = $_POST['StatusIn'];
            if ($_REQUEST['StatusIn'] == "Activo") {
            //echo $_REQUEST ['Nombre'];
            }
    
            if ($_REQUEST['StatusIn'] == "Inactivo") {
            //echo $_REQUEST ['Nombre'];
            }
            
            $ControlSuel = $_POST['ControlSuel'];
            $LimitesInca = $_POST['LimitesInca'];
            
            $query = $con->prepare("UPDATE incapacidad SET Folio=?, FechaExpedicion=?, DiasIncapacidad=?, PeriodoInicio=?, PeriodoFinal=?, Diagnostico=?, NombreMedico=?, Licencias=?, StatusIn=?, ControlSuel=?, LimitesInca=? WHERE NumIncapacidad=?");
            $resultado = $query->execute(array($Folio, $FechaExpedicion, $DiasIncapacidad, $PeriodoInicio, $PeriodoFinal, $Diagnostico, $NombreMedico, $Licencias, $StatusIn, $ControlSuel, $LimitesInca, $NumIncapacidad));
         
           if ($resultado) {
           $correcto = true;
              
            }

} else {
    
    $NumEmpleado = $_POST['NumEmpleado'];
    $Folio = $_POST['Folio'];
    $FechaExpedicion = $_POST['FechaExpedicion'];
    $DiasIncapacidad = $_POST['DiasIncapacidad'];
    $PeriodoInicio = $_POST['PeriodoInicio'];
    $PeriodoFinal = $_POST['PeriodoFinal'];
    $Diagnostico = $_POST['Diagnostico'];
    $NombreMedico = $_POST['NombreMedico'];
    $Licencias = $_POST['Licencias'];
    $StatusIn = $_POST['StatusIn'];
    if ($_REQUEST['StatusIn'] == "Activo") {
        //echo $_REQUEST ['Status']. "";
    }
    
    $ControlSuel = $_POST['ControlSuel'];
    $LimitesInca = $_POST['LimitesInca'];

    $query = $con->prepare("INSERT INTO incapacidad (NumEmpleado, Folio, FechaExpedicion, DiasIncapacidad, PeriodoInicio, PeriodoFinal, Diagnostico, NombreMedico, Licencias, StatusIn, ControlSuel, LimitesInca) VALUES (:NumEmpleado, :Folio, :FechaExpedicion, :DiasIncapacidad, :PeriodoInicio, :PeriodoFinal, :Diagnostico, :NombreMedico, :Licencias + 1, :StatusIn, :ControlSuel, :LimitesInca)");
    $resultado = $query->execute(array('NumEmpleado' => $NumEmpleado, 'Folio' => $Folio, 'FechaExpedicion' => $FechaExpedicion, 'DiasIncapacidad' => $DiasIncapacidad, 'PeriodoInicio' => $PeriodoInicio, 'PeriodoFinal' => $PeriodoFinal, 'Diagnostico' => $Diagnostico, 'NombreMedico' => $NombreMedico, 'Licencias' => $Licencias, 'StatusIn' => $StatusIn, 'ControlSuel' => $ControlSuel, 'LimitesInca' => $LimitesInca));
    

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
        
        <title>Registro de Incapacidad</title>
        
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
                        <h3><span><i class="icon icon-Guardar"></i></span>  Registro Guardado de Incapacidades</h3>
                        </div>
                            <div class="card-body">
                                <?php
                                    echo "No. Empleado: ";
                                    echo $_POST['NumEmpleado'];
                                    echo "<br>";
                                    echo "Folio de Incapacidad: ";
                                    echo $_POST['Folio'];
                                    echo "<br>";
                                    echo "Fecha de Expedicion: ";
                                    echo $_POST['FechaExpedicion'];
                                    echo "<br>";
                                    echo "Dias de Incapacidad: ";
                                    echo $_POST['DiasIncapacidad'];
                                    echo "<br>";
                                    echo "Periodo de Incapacidad: ";
                                    echo "Periodo Inicio: "; echo '&nbsp;'; echo $_POST['PeriodoInicio']; echo '&nbsp;'; echo "Periodo Final: "; echo '&nbsp;'; echo $_POST['PeriodoFinal'];
                                    echo "<br>";
                                    echo "Diagnostico: ";
                                    echo $_POST['Diagnostico'];
                                    echo "<br>";
                                    echo "Medico que expide: ";
                                    echo $_POST['NombreMedico'];
                                    echo "<br>";
                                    echo "Registro de Licencias: ";
                                    echo $_POST['Licencias'];
                                    echo "<br>";
                                    echo "Status de la incapacidad: ";
                                    echo $_POST['StatusIn'];
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
                    <a class="btn btn-primary" style="box-shadow: none;" href="../Vista/incapacidades/index.php"><span><i class="icon icon-Salir"></i></span>  Regresar a Incapacidades</a>
                </div>
        </div>
                            </div>
            </div>
                </div>
               </div>    
    </main>
    </body>
</html>
