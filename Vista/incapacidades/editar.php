<?php
    require '../../ModeloControlador/database.php';
    
    $db = new Database();
    $con = $db->conectar();
    
    $NumIncapacidad = $_GET['NumIncapacidad'];
    
    $query = $con->prepare("SELECT * FROM incapacidad WHERE NumIncapacidad = :NumIncapacidad");
    $query->execute(['NumIncapacidad' => $NumIncapacidad]);
    $num = $query->rowCount();
    if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
    } else {
    header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Editar</title>
        
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
                       <h4>Editar</h4>
                      </div>
                   <div class="card-body">
                       <form class="row g-2" action="../../ModeloControlador/modeloControllerIncapacidades.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                           <input type="hidden" id="NumIncapacidad" name="NumIncapacidad" value="<?php echo $NumIncapacidad; ?>" readonly/>
                            <div class="col-md-2">
                            <label for="NumEmpleado" class="form-label" style="font-weight: bold;">#No. Empleado : </label>
                            <input class="form-control" style="box-shadow: none;" type="number" id="NumEmpleado" name="NumEmpleado" placeholder="NumEmpleado" value="<?php echo $row['NumEmpleado']; ?>" readonly/>
                            </div>
                           <div class="col-md-2">
                            <label for="Folio" class="form-label" style="font-weight: bold;">Folio de Incapacidad : </label>
                            <input class="form-control" style="box-shadow: none;" type="text" id="Folio" name="Folio" maxlength="6" pattern="[a-zA-Z0-9]{6}" title="El folio debe ser asignado en el ISSTE" placeholder="Folio" required value="<?php echo $row['Folio']; ?>"/>
                           </div>
                            <div class="col-md-2">
                            <label for="FechaExpedicion" class="form-label" style="font-weight: bold;">Fecha de Expedicion : </label>
                            <input class="form-control" style="box-shadow: none;" type="date" id="FechaExpedicion" name="FechaExpedicion" min="2022-01-01" max="2090-12-31" value="<?php echo $row['FechaExpedicion']; ?>"/>
                            </div>
                            <div class="col-md-2">
                            <label for="DiasIncapacidad" class="form-label" style="font-weight: bold;">Dias de Incapacidad : </label>
                            <input class="form-control" style="box-shadow: none;" type="number" id="DiasIncapacidad" name="DiasIncapacidad" placeholder="Dias de Incapacidad" min="0" pattern="[0-9]" value="<?php echo $row['DiasIncapacidad']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="PeriodoInicio" class="form-label" style="font-weight: bold;">Periodo de Inicio : </label>
                            <input class="form-control" style="box-shadow: none;" type="date" id="PeriodoInicio" name="PeriodoInicio" min="2022-01-01" max="2090-12-31" value="<?php echo $row['PeriodoInicio']; ?>"/>
                            </div>
                            <div class="col-md-2">
                            <label for="PeriodoFinal" class="form-label" style="font-weight: bold;">Periodo de Fin : </label>
                            <input class="form-control" style="box-shadow: none;" type="date" id="PeriodoFinal" name="PeriodoFinal" min="2022-01-01" max="2090-12-31" value="<?php echo $row['PeriodoFinal']; ?>"/>
                            </div>
                            <div class="col-md-3">
                            <label for="Diagnostico" class="form-label" style="font-weight: bold;">Diagnostico : </label>
                            <input class="form-control" style="box-shadow: none;" type="text" id="Diagnostico" name="Diagnostico" placeholder="Diagnostico"  minlength="4" maxlength="50" pattern="[A-Za-zÀ-ÿ ]{4,50}" title="Ejemplo: Fiebre, Tos, etc..." required value="<?php echo $row['Diagnostico']; ?>"/>
                            </div>
                            <div class="col-md-4">
                            <label for="NombreMedico" class="form-label" style="font-weight: bold;">Medico que expide : </label>
                            <input class="form-control" style="box-shadow: none;" type="text" id="NombreMedico" name="NombreMedico" placeholder="Nombre del Medico"  minlength="4" maxlength="40" pattern="[A-Za-zÀ-ÿ ]{4,40}" title="Ejemplo: Juan Nadie o José María, puedes usar acentos y espacios" value="<?php echo $row['NombreMedico']; ?>" required/>
                            </div>
                            <div class="col-md-1">
                            <label for="Licencias" class="form-label" style="font-weight: bold;">Licencias : </label>
                            <input class="form-control" style="box-shadow: none;" type="number" id="Licencias" name="Licencias" placeholder="Licencias" value="<?php echo $row['Licencias']; ?>" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="ControlSuel" class="form-label" style="font-weight: bold;">Control de sueldo : </label>
                            <input class="form-control" style="box-shadow: none;" type="text" style="text-transform:capitalize;" id="ControlSuel" name="ControlSuel" placeholder="Control de sueldo" value="completo" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="LimitesInca" class="form-label" style="font-weight: bold;">Limite de incapacidad : </label>
                            <input class="form-control" style="box-shadow: none;" type="number" style="text-transform:capitalize;" id="LimitesInca" name="LimitesInca" value="<?php echo $row['LimitesInca']; ?>" min="0" readonly/>
                            </div>
                            <div class="col-md-4">
                            <label for="StatusIn" class="form-label" style="font-weight: bold;">Status: </label>
                            <br>
                            <div class="form-check">
                                <input  class="form-check-input" id="StatusIn" style="background-color: green; box-shadow: none;" type="radio" name="StatusIn" value="Activo" checked/>Activo<br>
                                <input  class="form-check-input" id="StatusIn" style="background-color: #ff3333; box-shadow: none;" type="radio" name="StatusIn" value="Inactivo"/>Inactivo<br>
                            </div>
                            </div>
                            <div class="card-footer text-muted">
                            <div class="col-md-12">
                                <a class="btn btn-secondary" onclick="return confirm('¿Desea salir del editar?')" href="index.php"><span><i class="icon icon-Salir"></i></span> Cancelar</a>
                                <button type="submit" onclick="return confirm('¿Desea guardar los datos?')" class="btn btn-success"><span><i class="icon icon-Guardar"></i></span> Guardar</button>
                                <button type="reset" class="btn btn-warning" onclick="return confirm('¿Desea reestablecer los datos?')"><span><i class="icon icon-Reset"></i></span> Reestablecer</button>
                                <a class="btn btn-primary" onclick="return confirm('¿Desea salir del editar?')" href="../../index.php"><span><i class="icon icon-Inicio"></i></span> Volver al Inicio</a>
                            </div>
                            </div>
                           </form>
                       <script lang="javascript" type="text/javascript">
                           // -- Validador de Form/Submit (INSERT) --//
                           try 
                           {
                               function validarFormulario()
                               {
                                   var expNombreMedico = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expDiagnostico = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expFolio =  /^[0-9a-zA-Z0-9]+$/g;
                                   
                                   var NombreMedico = document.getElementById("NombreMedico");
                                   var Diagnostico = document.getElementById("Diagnostico");
                                   var Nivel = document.getElementById("Nivel");
                                   var Folio = document.getElementById("Folio");
                                   
                                   if (!expNombreMedico.exec(NombreMedico.value)) 
                                   {
                                       NombreMedico.focus();
                                       return false;
                                   }
                                   
                                   if (!expDiagnostico.exec(Diagnostico.value)) 
                                   {
                                       Diagnostico.focus();
                                       return false;
                                   }                        
                                   
                                   if (!expFolio.exec(Folio.value)) 
                                   {
                                       Folio.focus();
                                       return false;
                                   }
                                          
                                  
                                  return true;
                               }
                               
                               window.onload = function()
                               {
                                   var Formulario = document.getElementById("Formulario");
                                   Formulario.onsubmit = validarFormulario();
                               }
                       </script>
                 </div>
            </div>
                </div>
    </main>
    </body>
</html>
