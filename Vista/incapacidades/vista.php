<?php
    require '../../ModeloControlador/database.php';
    
    $db = new Database();
    $con = $db->conectar();
    
    $NumIncapacidad = $_GET['NumIncapacidad'];
    
    $query = $con->prepare("SELECT * FROM incapacidad INNER JOIN empleado WHERE NumIncapacidad = :NumIncapacidad");
    $query->execute(['NumIncapacidad' => $NumIncapacidad]);
    $num = $query->rowCount();
    if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Visualizador de Datos</title>
        
        <link type="text/css" rel="stylesheet" href="../../Resource/css/estilos.css"><link rel="icon" href="../../Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" href="../../Resource/assets/icon/fonts.css">
        <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
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
             <div class="row py-3">
                    <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                          <h4><span><i class="icon icon-IngresarEmpleado"></i></span>   Visualizador de Datos de Incapacidad del Empleado</h4>
                      </div>
                   <div class="card-body">
                      <form class="row g-2" action="../../ModeloControlador/modeloControllerEmpleado.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                          <input type="hidden" id="NumIncapacidad" name="NumIncapacidad" value="<?php echo $NumIncapacidad; ?>" readonly/>
                            <br>
                                <h4>Datos de Incapacidad</h4>
                                <br>
                                <div class="form-group col-md-2">
                                <label for="Foto" class="form-label" style="font-weight: bold;">Foto del Empleado: </label>
                                <input class="form-control" style="box-shadow: none;" class="img-thumbnail" type="image" accept="image/*" id="Foto" name="Foto" src="../../Resource/assets/imagenes/fotoEmpleados/<?php echo $row['Foto']; ?>" readonly/>
                                <output id="Foto" style="margin-top: 0;"></output>
                                </div>
                                <div class="col-md-2">
                                <label for="NumEmpleado" class="form-label" style="font-weight: bold;">#No. Empleado : </label>
                                <input class="form-control" type="number" id="NumEmpleado" name="NumEmpleado" min="0" value="<?php echo $row['NumEmpleado']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="Nombre" class="form-label" style="font-weight: bold;">Nombre o Nombres : </label>
                                <input class="form-control" type="text" id="Nombre" name="Nombre"  value="<?php echo $row['Nombre']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="Appat" class="form-label" style="font-weight: bold;">Apellido Paterno : </label>
                                <input class="form-control" type="text" id="Appat" name="Appat"  value="<?php echo $row['Appat']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="Apmat" class="form-label" style="font-weight: bold;">Apellido Materno : </label>
                                <input class="form-control" type="text" id="Apmat" name="Apmat" value="<?php echo $row['Apmat']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="RFC" class="form-label" style="font-weight: bold;">RFC : </label>
                                <input class="form-control" type="text" id="RFC" name="RFC" value="<?php echo $row['RFC']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="FechaIngreso" class="form-label" style="font-weight: bold;">Fecha de Ingreso : </label>
                                <input class="form-control" type="date" id="FechaIngreso" value="<?php echo $row['FechaIngreso']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="Folio" class="form-label" style="font-weight: bold;">Folio de Incapacidad : </label>
                                <input class="form-control" type="text" id="Folio" name="Folio" value="<?php echo $row['Folio']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="FechaExpedicion" class="form-label" style="font-weight: bold;">Fecha de Expedicion : </label>
                                <input class="form-control" type="date" id="FechaExpedicion" name="FechaExpedicion" value="<?php echo $row['FechaExpedicion']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="DiasIncapacidad" class="form-label" style="font-weight: bold;">Dias de Incapacidad : </label>
                                <input class="form-control" type="number" id="DiasIncapacidad" name="DiasIncapacidad" value="<?php echo $row['DiasIncapacidad']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="PeriodoInicio" class="form-label" style="font-weight: bold;">Periodo de Inicio : </label>
                                <input class="form-control" type="date" id="PeriodoInicio" name="PeriodoInicio" value="<?php echo $row['PeriodoInicio']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="PeriodoFinal" class="form-label" style="font-weight: bold;">Periodo de Fin : </label>
                                <input class="form-control" type="date" id="PeriodoFinal" name="PeriodoFinal" value="<?php echo $row['PeriodoFinal']; ?>" readonly/>
                                </div>
                                <div class="col-md-3">
                                <label for="Diagnostico" class="form-label" style="font-weight: bold;">Diagnostico : </label>
                                <input class="form-control" type="text" id="Diagnostico" name="Diagnostico" value="<?php echo $row['Diagnostico']; ?>" readonly/>
                                </div>
                                <div class="col-md-4">
                                <label for="NombreMedico" class="form-label" style="font-weight: bold;">Medico que expide : </label>
                                <input class="form-control" type="text" id="NombreMedico" name="NombreMedico"value="<?php echo $row['NombreMedico']; ?>" readonly/>
                                </div>
                                <div class="col-md-1">
                                <label for="Licencias" class="form-label" style="font-weight: bold;">Licencias : </label>
                                <input class="form-control" type="number" id="Licencias" name="Licencias" value="<?php echo $row['Licencias']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="StatusIn" class="form-label" style="font-weight: bold;">Status de incapacidad : </label>
                                <input class="form-control" type="text" id="StatusIn" name="StatusIn" value="<?php echo $row['StatusIn']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="ControlSuel" class="form-label" style="font-weight: bold;">Control del Sueldo : </label>
                                <input class="form-control" type="text" id="ControlSuel" name="ControlSuel" value="<?php echo $row['ControlSuel']; ?>" readonly/>
                                </div>
                                <div class="col-md-2">
                                <label for="LimitesInca" class="form-label" style="font-weight: bold;">Limite de la Incapacidad : </label>
                                <input class="form-control" type="text" id="LimitesInca" name="LimitesInca" value="<?php echo $row['LimitesInca']; ?>" readonly/>
                                </div>
                                <div class="col-md-12">
                                <label for="ProgresoInca" class="form-label" style="font-weight: bold;">Progreso de la Incapacidad : </label>
                               
                                </div>
                            <br><br>
                            <hr>
                            <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php"><span><i class="icon icon-Salir"></i></span> Salir de la visualizacion</a>
                            <button type="button" class="btn btn-danger"><span><i class="icon icon-PDF"></i></span> Generar Reporte</button>
                            <button type="button" class="btn btn-success"><span><i class="icon icon-Excel"></i></span> Generar Reporte</button> 
                            <a class="btn btn-secondary" href="../../index.php"><span><i class="icon icon-Inicio"></i></span> Volver al Inicio</a>
                        </form>
                    </div>
                   </div>
                  </div>
               </div>
          </main>
    </body>
</html>
