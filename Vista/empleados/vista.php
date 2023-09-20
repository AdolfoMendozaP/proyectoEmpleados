<?php
    require '../../ModeloControlador/database.php';
    
    $db = new Database();
    $con = $db->conectar();
    
    $NumEmpleado = $_GET['NumEmpleado'];
    
    $query = $con->prepare("SELECT * FROM empleado WHERE NumEmpleado = :NumEmpleado");
    $query->execute(['NumEmpleado' => $NumEmpleado]);
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
        
        <title>Vista</title>
        
        <link type="text/css" rel="stylesheet" href="../../Resource/css/estilos.css"><link rel="icon" href="../../Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" href="../../Resource/assets/icon/fonts.css">
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
             <div class="row py-3">
                    <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                          <h4><span><i class="icon icon-IngresarEmpleado"></i></span>   Visualizador Datos Empleado</h4>
                      </div>
                   <div class="card-body">
                      <form class="row g-2" action="../../ModeloControlador/modeloControllerEmpleado.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <br>
                        <h4>Datos Laborales</h4>
                        <br>
                        <div class="form-group col-md-2">
                        <label for="Foto" class="form-label" style="font-weight: bold;">Foto del Empleado: </label>
                        <input class="form-control" style="box-shadow: none;" class="img-thumbnail" type="image" accept="image/*" id="Foto" name="Foto" src="../../Resource/assets/imagenes/fotoEmpleados/<?php echo $row['Foto']; ?>" readonly/>
                        <output id="Foto" style="margin-top: 0;"></output>
                        </div>
                        <div class="col-md-2">
                        <label for="NumEmpleado" class="form-label" style="font-weight: bold;">No. Empleado: </label>
                        <input class="form-control" style="box-shadow: none;" type="number" id="NumEmpleado" name="NumEmpleado" min="0" value="<?php echo $row['NumEmpleado']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="Nombre" class="form-label" style="font-weight: bold;">Nombre o Nombres: </label>
                        <input class="form-control" style="text-transform:capitalize; box-shadow: none;" type="text"  id="Nombre" name="Nombre"  value="<?php echo $row['Nombre']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="Appat" class="form-label" style="font-weight: bold;">Apellido Paterno: </label>
                        <input class="form-control" style="text-transform:capitalize; box-shadow: none;" type="text"  id="Appat" name="Appat"  value="<?php echo $row['Appat']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="Apmat" class="form-label" style="font-weight: bold;">Apellido Materno: </label>
                        <input class="form-control"  style="text-transform:capitalize; box-shadow: none;" type="text"  id="Apmat" name="Apmat" value="<?php echo $row['Apmat']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="RFC" class="form-label" style="font-weight: bold;">RFC: </label>
                        <input class="form-control"  style="text-transform:uppercase; box-shadow: none;" type="text"  id="RFC" name="RFC" value="<?php echo $row['RFC']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="CURP" class="form-label" style="font-weight: bold;">CURP: </label>
                        <input class="form-control" style="text-transform:uppercase; box-shadow: none;" type="text"  id="CURP" name="CURP" value="<?php echo $row['CURP']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="CUIP" class="form-label" style="font-weight: bold;">CUIP: </label>
                        <input class="form-control" style="text-transform:uppercase; box-shadow: none;" type="text"  id="CUIP" name="CUIP" value="<?php echo $row['CUIP']; ?>" readonly/>
                        </div>
                        <div class="col-md-1">
                        <label for="Nivel" class="form-label" style="font-weight: bold;">Nivel: </label>
                        <input class="form-control" style="text-transform:uppercase; box-shadow: none;" type="text" id="Nivel" name="Nivel" value="<?php echo $row['Nivel']; ?>" readonly/>
                        </div>
                        <div class="col-md-3">
                        <label for="Codigo" class="form-label" style="font-weight: bold;">Codigo Presupuestal: </label>
                        <input class="form-control" style=" text-transform:uppercase; box-shadow: none;" type="text" id="Codigo" name="Codigo" value="<?php echo $row['Codigo']; ?>" readonly/>   
                        </div>
                        <div class="col-md-4">
                        <label for="Puesto" class="form-label" style="font-weight: bold;">Puesto: </label>
                        <input class="form-control" style="box-shadow: none;" type="text" id="Puesto" name="Puesto" value="<?php echo $row['Puesto']; ?>" readonly/>
                        </div>
                        <div class="col-md-4">
                        <label for="PuestoFuncional" class="form-label" style="font-weight: bold;">Puesto Funcional: </label>
                        <input class="form-control" style="box-shadow: none;" type="text" id="PuestoFuncional" name="PuestoFuncional" value="<?php echo $row['PuestoFuncional']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="FechaIngreso" class="form-label" style="font-weight: bold;">Fecha de Ingreso: </label>
                        <input class="form-control" style="box-shadow: none;" type="date" id="FechaIngreso" value="<?php echo $row['FechaIngreso']; ?>" name="FechaIngreso" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="Antiguedad" class="form-label" style="font-weight: bold;">Antigüedad: </label>
                        <input class="form-control" style="box-shadow: none;" type="text" id="Antiguedad" value="<?php echo $row['Antiguedad']; ?>" name="Antiguedad" readonly/>
                        </div>
                        <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
                        <div class="col-md-2">
                        <label for="FechaPro" class="form-label" style="font-weight: bold;">Fecha de Promocion: </label>
                        <input class="form-control" style="box-shadow: none;" type="date" id="FechaPro" value="<?php echo $row['FechaPro']; ?>" name="FechaPro" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="StatusEm" class="form-label" style="font-weight: bold;">Status: </label>
                        <input class="form-control" style="text-transform:uppercase; box-shadow: none;" type="text" id="StatusEm" value="<?php echo $row['StatusEm']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="FechaBaja" class="form-label" style="font-weight: bold;">Fecha de Baja: </label>
                        <input class="form-control" style="box-shadow: none;" type="date" id="FechaIngreso" value="<?php echo $row['FechaBaja']; ?>" name="FechaBaja" readonly/>
                        </div>
                        <div class="col-md-4">
                        <label for="MotivoBaja" class="form-label" style="font-weight: bold;">Motivo de Baja: </label>
                        <input class="form-control" style="text-transform:capitalize; box-shadow: none;" type="text" id="MotivoBaja" value="<?php echo $row['MotivoBaja']; ?>" name="MotivoBaja" readonly/>
                        </div>
                        <div class="card-footer text-muted">
                        <div class="col-md-12">
                        <a class="btn btn-primary" style="box-shadow: none;" onclick="return confirm('¿Desea salir de la visualizacion?')" href="../../index.php"><span><i class="icon icon-Inicio"></i></span> Volver al Inicio</a>
                        <a class="btn btn-secondary" style="box-shadow: none;" href="index.php"><span><i class="icon icon-Salir"></i></span> Salir de la visualizacion</a>
                        <a style="box-shadow: none;" class="btn btn-danger" onclick="return confirm('Generado el Reporte, ¿Desea Continuar?')" href="#"><span><i class="icon icon-PDF"></i></span> Generar Reporte</a>
                        </div>
                        </div>
                    </form>
                   </div>
                  </div>
                 </div>
                </div>
             </main>
           </body>
</html>
