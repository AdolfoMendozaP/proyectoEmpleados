<?php
    require 'ModeloControlador/database.php';
    
    $db = new Database();
    $con = $db->conectar();
    
    $NumEmpleado = $_GET['NumEmpleado'];
    
    $query = $con->prepare("SELECT * FROM empleado INNER JOIN personales WHERE empleado.NumEmpleado = :NumEmpleado");
    $query->execute(['NumEmpleado' => $NumEmpleado]);
    $num = $query->rowCount();
    if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html
<html>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Vista</title>
        
        <link type="text/css" rel="stylesheet" href="Resource/css/estilos.css"><link rel="icon" href="Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" href="Resource/assets/icon/fonts.css">
        <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
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
                          <h4><span><i class="icon icon-IngresarEmpleado"></i></span>   Visualizador Datos Generales</h4>
                      </div>
                   <div class="card-body">
                      <form class="row g-2" method="POST" enctype="multipart/form-data" autocomplete="off">
                                                        <br>
                        <h4>Datos Laborales</h4>
                        <br>
                        <div class="form-group col-md-2">
                        <label for="Foto" class="form-label" style="font-weight: bold;">Foto del Empleado: </label>
                        <input class="form-control" style="box-shadow: none;" class="img-thumbnail" type="image" accept="image/*" id="Foto" name="Foto" src="Resource/assets/imagenes/fotoEmpleados/<?php echo $row['Foto']; ?>" readonly/>
                        <output id="Foto" style="margin-top: 0;"></output>
                        </div>
                        <div class="col-md-2">
                        <label for="NumEmpleado" class="form-label" style="font-weight: bold;">No. Empleado: </label>
                        <input class="form-control" type="number" id="NumEmpleado" name="NumEmpleado" min="0" value="<?php echo $row['NumEmpleado']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="Nombre" class="form-label" style="font-weight: bold;">Nombre o Nombres: </label>
                        <input class="form-control" type="text" style="text-transform:capitalize;" id="Nombre" name="Nombre"  value="<?php echo $row['Nombre']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="Appat" class="form-label" style="font-weight: bold;">Apellido Paterno: </label>
                        <input class="form-control" type="text" style="text-transform:capitalize;" id="Appat" name="Appat"  value="<?php echo $row['Appat']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="Apmat" class="form-label" style="font-weight: bold;">Apellido Materno: </label>
                        <input class="form-control" type="text" style="text-transform:capitalize;" id="Apmat" name="Apmat" value="<?php echo $row['Apmat']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="RFC" class="form-label" style="font-weight: bold;">RFC: </label>
                        <input class="form-control" type="text" style="text-transform:uppercase;" id="RFC" name="RFC" value="<?php echo $row['RFC']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="CURP" class="form-label" style="font-weight: bold;">CURP: </label>
                        <input class="form-control" type="text" style="text-transform:uppercase;" id="CURP" name="CURP" value="<?php echo $row['CURP']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="CUIP" class="form-label" style="font-weight: bold;">CUIP: </label>
                        <input class="form-control" type="text" style="text-transform:uppercase;" id="CUIP" name="CUIP" value="<?php echo $row['CUIP']; ?>" readonly/>
                        </div>
                        <div class="col-md-1">
                        <label for="Nivel" class="form-label" style="font-weight: bold;">Nivel: </label>
                        <input class="form-control" type="text" style="text-transform:uppercase;" id="Nivel" name="Nivel" value="<?php echo $row['Nivel']; ?>" readonly/>
                        </div>
                        <div class="col-md-3">
                        <label for="Codigo" class="form-label" style="font-weight: bold;">Codigo Presupuestal: </label>
                        <input class="form-control" type="text" style="text-transform:uppercase;" id="Codigo" name="Codigo" value="<?php echo $row['Codigo']; ?>" readonly/>   
                        </div>
                        <div class="col-md-4">
                        <label for="Puesto" class="form-label" style="font-weight: bold;">Puesto: </label>
                        <input class="form-control" type="text" id="Puesto" name="Puesto" value="<?php echo $row['Puesto']; ?>" readonly/>
                        </div>
                        <div class="col-md-4">
                        <label for="PuestoFuncional" class="form-label" style="font-weight: bold;">Puesto Funcional: </label>
                        <input class="form-control" type="text" id="PuestoFuncional" name="PuestoFuncional" value="<?php echo $row['PuestoFuncional']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="FechaIngreso" class="form-label" style="font-weight: bold;">Fecha de Ingreso: </label>
                        <input class="form-control" type="date" id="FechaIngreso" value="<?php echo $row['FechaIngreso']; ?>" name="FechaIngreso" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="Antiguedad" class="form-label" style="font-weight: bold;">Antigüedad: </label>
                        <input class="form-control" type="number" id="FechaIngreso" value="<?php echo $row['Antiguedad']; ?>" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="StatusEm" class="form-label" style="font-weight: bold;">Status: </label>
                        <input class="form-control" type="text" id="StatusEm" value="<?php echo $row['StatusEm']; ?>" name="StatusEm" readonly/>
                        </div>
                        <div class="col-md-2">
                        <label for="FechaBaja" class="form-label" style="font-weight: bold;">Fecha de Baja: </label>
                        <input class="form-control" type="date" id="FechaIngreso" value="<?php echo $row['FechaBaja']; ?>" name="FechaBaja" readonly/>
                        </div>
                        <div class="col-md-4">
                        <label for="MotivoBaja" class="form-label" style="font-weight: bold;">Motivo de Baja: </label>
                        <input class="form-control" type="text" id="MotivoBaja" value="<?php echo $row['MotivoBaja']; ?>" name="MotivoBaja" readonly/>
                        </div>
                                                        <br>
                            <h4>Datos Personales</h4>
                            <br>
                            <div class="col-md-1">
                           <label for="Edad" class="form-label" style="font-weight: bold;">Edad: </label>
                           <input class="form-control" type="number" id="Edad" name="Edad" placeholder="Edad" value="<?php echo $row['Edad']; ?>" readonly/>
                           </div>
                           <div class="col-md-2">
                            <label for="FechaNa" class="form-label" style="font-weight: bold;">Fecha de Nacimiento: </label>
                            <input class="form-control" type="date" id="FechaNa" name="FechaNa" min="1950-01-01" max="2090-12-31" value="<?php echo $row['FechaNa']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="Escolaridad" class="form-label" style="font-weight: bold;">Escolaridad: </label>
                            <input class="form-control" type="text" style="text-transform:capitalize;" id="Escolaridad" name="Escolaridad" value="<?php echo $row['Escolaridad']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="Especialidad" class="form-label" style="font-weight: bold;">Especialidad: </label>
                            <input class="form-control" type="text" style="text-transform:capitalize;" id="Especialidad" name="Especialidad" value="<?php echo $row['Especialidad']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="Estado" class="form-label" style="font-weight: bold;">Estado: </label>
                            <input class="form-control" type="text" style="text-transform:capitalize;" id="Estado" name="Estado" value="<?php echo $row['Estado']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="Municipio" class="form-label" style="font-weight: bold;">Municipio: </label>
                            <input class="form-control" type="text" style="text-transform:capitalize;" id="Municipio" name="Municipio" value="<?php echo $row['Municipio']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="EstadoCivil" class="form-label" style="font-weight: bold;">Estado Civil: </label>
                            <input class="form-control" type="text" id="EstadoCivil" name="EstadoCivil" value="<?php echo $row['EstadoCivil']; ?>" readonly/>
                            </div>
                            <div class="col-md-auto">
                            <label for="NumDepEco" class="form-label" style="font-weight: bold;">No. Dependientes economicos: </label>
                            <input class="form-control" type="number" id="NumDepEco" name="NumDepEco" value="<?php echo $row['NumDepEco']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="Sexo" class="form-label" style="font-weight: bold;">Sexo: </label>
                            <input class="form-control" type="text" id="Sexo" style="text-transform:capitalize;" name="Sexo" value="<?php echo $row['Sexo']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="TipoSangre" class="form-label" style="font-weight: bold;">Tipo de Sangre: </label>
                            <input class="form-control" type="text" id="TipoSangre" style="text-transform:uppercase;" name="TipoSangre" value="<?php echo $row['TipoSangre']; ?>" readonly/>
                            </div>
                            <div class="col-md-3">
                            <label for="Calle" class="form-label" style="font-weight: bold;">Calle: </label>
                            <input class="form-control" type="text" id="Calle" style="text-transform:capitalize;" name="Calle" value="<?php echo $row['Calle']; ?>" readonly/>
                            </div>
                            <div class="col-md-1">
                            <label for="Numero" class="form-label" style="font-weight: bold;">Numero: </label>
                            <input class="form-control" type="text" id="Numero" style="text-transform:uppercase;" name="Numero" value="<?php echo $row['Numero']; ?>" readonly/>
                            </div>
                            <div class="col-md-3">
                            <label for="Colonia" class="form-label" style="font-weight: bold;">Colonia: </label>
                            <input class="form-control" type="text" id="Colonia" style="text-transform:capitalize;" name="Colonia" value="<?php echo $row['Colonia']; ?>" readonly/>
                            </div>
                            <div class="col-md-1">
                            <label for="CP" class="form-label" style="font-weight: bold;">CP: </label>
                            <input class="form-control" type="text" id="CP" name="CP" value="<?php echo $row['CP']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="Ciudad" class="form-label" style="font-weight: bold;">Ciudad: </label>
                            <input class="form-control" type="text" id="Ciudad" name="Ciudad" style="text-transform:capitalize;" value="<?php echo $row['Ciudad']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="TipoHabitacion" class="form-label" style="font-weight: bold;">Tipo de Habitacion: </label>
                            <input class="form-control" type="text" id="TipoHabitacion" name="TipoHabitacion" style="text-transform:capitalize;" value="<?php echo $row['TipoHabitacion']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="TelParticular" class="form-label" style="font-weight: bold;">Telefono Particular: </label>
                            <input class="form-control" type="tel" id="TelParticular" name="TelParticular" value="<?php echo $row['TelParticular']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="TelOficina" class="form-label" style="font-weight: bold;">Telefono Oficina: </label>
                            <input class="form-control" type="tel" id="TelOficina" name="TelOficina" value="<?php echo $row['TelOficina']; ?>" readonly/>
                            </div>
                            <div class="col-md-1">
                            <label for="Ext" class="form-label" style="font-weight: bold;">Ext: </label>
                            <input class="form-control" type="tel" id="Ext" name="Ext" value="<?php echo $row['Ext']; ?>" readonly/>
                            </div> 
                            <div class="col-md-2">
                            <label for="TelCelular" class="form-label" style="font-weight: bold;">Telefono Celular: </label>
                            <input class="form-control" type="tel" id="TelCelular" name="TelCelular" value="<?php echo $row['TelCelular']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="TelEmergencia" class="form-label" style="font-weight: bold;">Telefono Emergencia: </label>
                            <input class="form-control" type="tel" id="TelEmergencia" name="TelEmergencia" value="<?php echo $row['TelEmergencia']; ?>" readonly/>
                            </div>
                            <div class="col-md-4">
                            <label for="Caso" class="form-label" style="font-weight: bold;">En caso de emergencia avisar a: </label>
                            <input class="form-control" type="text" style="text-transform:capitalize;" id="Caso" name="Caso" value="<?php echo $row['Caso']; ?>" readonly/>
                            </div>
                            <div class="col-md-3">
                            <label for="CorreoPart" class="form-label" style="font-weight: bold;">Correo Particular: </label>
                            <input class="form-control" type="email" id="CorreoPart" name="CorreoPart" value="<?php echo $row['CorreoPart']; ?>" readonly/>
                            </div>
                            <div class="col-md-3">
                            <label for="CorreoInstitu" class="form-label" style="font-weight: bold;">Correo Institucional: </label>
                            <input class="form-control" type="email" id="CorreoInstitu" name="CorreoInstitu" value="<?php echo $row['CorreoInstitu']; ?>" readonly/>
                            </div>
                            <div class="col-md-6">
                            <label for="Observaciones" class="form-label" style="font-weight: bold;">Observaciones: </label>
                            <input class="form-control" type="text" id="Observaciones" style="text-transform:lowercase;" name="Observaciones" value="<?php echo $row['Observaciones']; ?>" readonly/>
                            </div><br>
                            <hr>
                            <div class="col-md-12">
                             <a class="btn btn-secondary" href="index.php"><span><i class="icon icon-Salir"></i></span> Salir de la visualizacion</a>
                             <button type="button" class="btn btn-danger"><span><i class="icon icon-PDF"></i></span> Generar Reporte</button>
                             <button type="button" class="btn btn-success"><span><i class="icon icon-Excel"></i></span> Generar Reporte</button> 
                            </div>
                      </form>
                    </div>
                   </div>
                  </div>
               </div>
          </main>
    </body>
</html>
