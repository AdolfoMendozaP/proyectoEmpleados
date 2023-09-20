<?php
     require_once '../../ModeloControlador/database.php';
     
     $db = new Database();
     $con = $db->conectar();
           
     $comando = $con->prepare("SELECT NumIncapacidad, empleado.NumEmpleado, Foto, Nombre, Appat, Apmat, RFC, FechaIngreso, Antiguedad, Folio, FechaExpedicion, DiasIncapacidad, PeriodoInicio, PeriodoFinal, Diagnostico, NombreMedico, Licencias, incapacidad.StatusIn, ProgresoInca, ControlSuel, LimitesInca FROM incapacidad INNER JOIN empleado WHERE empleado.NumEmpleado = incapacidad.NumEmpleado ORDER BY empleado.NumEmpleado ASC");
     $comando->execute();
     $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Consultar incapacidades</title>
         
        <link type="text/css" rel="stylesheet" href="../../Resource/css/estilos.css"><link rel="icon" href="../../Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" href="../../Resource/assets/icon/fonts.css">
        <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script><script language="javascript" type="text/javascript" src="../../Resource/js/push.min.js"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <header>
            <button id="btnmenu" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"><span id="button-menu"><i class="icon icon-Menu"></i></span></button>
            <nav id="navigation" class="navbar bg-light fixed-top">
                <div class="container-fluid">
                  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
                 <div class="offcanvas-header">
                  <h5 id="title-menu" class="offcanvas-title"><span><i class="icon icon-Incapacidad"></i></span>Incapacidades</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                 </div>
                 <div class="offcanvas-body">
                     <ul id="menu">
                     <li>
                         <a href="../../index.php"><span><i class="icon icon-Inicio"></i></span>Inicio</a>
                     </li>
		     <li>	
                         <a><span><i class="icon icon-Empleados"></i></span>Empleados</a>
                         <ul style="list-style: none;" class="submenu">
                             <li><a href="../empleados/insertar.php"><span><i class="icon icon-AgregarEm"></i></span>Agregar</a></li>
                             <li><a href="../empleados/index.php"><span><i class="icon icon-Consultar"></i></span>Consultar</a></li>
                            </ul>
                      </li>
                      
                     <li>
                        <a><span><i class="icon icon-Incapacidad"></i></span>Incapacidades</a>
		            <ul style="list-style: none;" class="submenu">
                                <li><a href="insertar.php"><span><i class="icon icon-AgregarEm"></i></span>Agendar una nueva incapacidad</a></li>
                                <li><a href="index.php"><span><i class="icon icon-Consultar"></i></span>Consultar incapacidades</a></li>
                            </ul>
                        </li>
                    </ul>
                 </div>
                </div>
               </div>
		</nav>
            
	</header>
        <br><br><br><br>
        <main class="container-fluid">
             <div class="row py-3">
                <div class="col-12">
                  <h2 style="text-align: center;">Incapacidades</h2>
                  <br>
                  <div class="col-md-2">
                      <label for="Buscar" class="form-label">Buscador de Empleado (Nombre o Apellidos) : </label>
                      <form class="d-flex" action="../../ModeloControlador/motorBusqueda/buscadorIncapacidades.php" method="POST" id="Formulario" name="Formulario" autocomplete="off">
                  <input class="form-control" style="box-shadow: none;" type="text" name="busqueda" id="busqueda"  placeholder="Buscar Empleados . . ." minlength="4" maxlength="50" pattern="[a-zA-ZÀ-ÿ ]{4,50}" title="Solo puedes buscar Nombre y Apellidos. Ejemplo: Juan Nadie o José María, puedes usar acentos y espacios" required>
                  <?php
                  if (isset($_POST['busqueda'])) 
                      {
                           $mysqli = new mysqli("localhost", "root", "", "bdProyecto");
                           require_once '../../ModeloControlador/motorBusqueda/buscadorIncapacidades.php';
                      }
                  ?>
                  <button class="btn btn-success" style="box-shadow: none;" type="submit" name="buscar" value="buscar" title="buscar campo"><span><i class="icon icon-Buscar"></i></span></button>      
                  </form>
                      <script lang="javascript" type="text/javascript">
                          try 
                          {
                              function validarBuscador()
                              {
                                  var expBusqueda = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                  var Busqueda = document.getElementById("busqueda");
                                  
                                  if (!expBusqueda.exec(Busqueda.value)) 
                                  {
                                      Busqueda.focus();
                                      return false;                                      
                                  }
                                  
                                  return true;
                              }
                              
                              window.onload = function()
                               {
                                   var Formulario = document.getElementById("Formulario");
                                   Formulario.onsubmit = validarFormulario();
                               }
                          }
                          
                          catch (e) {}
                      </script>
                  </div>
                  <br> <br>
                  <div class="col-md-12" >
                  <a class="btn btn-primary" style="box-shadow: none;" href="insertar.php"><span><i class="icon icon-Agregar"></i></span> Agendar una incapacidad </a>
                  <a class="btn btn-secondary" style="box-shadow: none;" href="../control/index.php"><span><i class="icon icon-Gestor"></i></span> Control de Empleados</a>
                  <a style="box-shadow: none;" role="button" href="../../ModeloControlador/Librerias/plantillasPDF/Plantilla-Incapacidades.php" target="_blank" rel="noopener noreferrer" class="btn btn-danger"><span><i class="icon icon-PDF"></i></span> Generar Reporte en PDF</a>
                  <a style="box-shadow: none;" role="button" href="../../ModeloControlador/Librerias/plantillasExcel/Plantilla-Incapacidades.php" class="btn btn-success"><span><i class="icon icon-Excel"></i></span> Generar Reporte en Excel</a>
                  </div>
                </div>
                
            </div>
            <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center; padding: 10px;">No. Prog</th>
                                <th scope="col" style="text-align: center; padding: 10px;" class="table-active">#No. Empleado</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Foto</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Nombre Completo</th>
                                <th scope="col" style="text-align: center; padding: 10px;">RFC</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Fecha de Ingreso</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Antigüedad Laboral</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Folio de Incapacidad</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Fecha de Expedicion</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Dias de Incapacidad</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Periodo de Incapacidad</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Diagnostico</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Medico que expide</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Registro de Licencias</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Status de la incapacidad</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Progreso Restante</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Control del Sueldo</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Limite de la Incapacidad</th>
                                <th colspan="5" style="text-align: center; padding: 20px;"class="table-active">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $row){ ?>
                            <tr>
                                <td scope="row" style="text-align: center;"><?php echo $row['NumIncapacidad'];?></td>
                                <td scope="row" class="table-active" style="text-align: center;"><?php echo $row['NumEmpleado'];?></td>
                                <td scope="row"><img class="img-thumbnail" width="100px" src="../../Resource/assets/imagenes/fotoEmpleados/<?php echo $row['Foto'];?>"/></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Appat'];?> <?php echo $row['Apmat'];?> <?php echo $row['Nombre'];?></td>
                                <td scope="row" style="text-transform:uppercase; text-align: center;"><?php echo $row['RFC'];?></td>
                                <td scope="row" style="text-align: center; padding: 10px;"><?php echo $row['FechaIngreso'];?></td>
                                <td scope="row" style="text-align: center; padding: 10px;"><?php echo $row['Antiguedad'];?></td>
                                <td scope="row" style="text-transform:uppercase; text-align: center;"><?php echo $row['Folio'];?></td>
                                <td scope="row" style="text-align: center; padding: 10px;"><?php echo $row['FechaExpedicion'];?></td>
                                <td scope="row" style="text-align: center; padding: 10px;"><?php echo $row['DiasIncapacidad'];?></td>
                                <td scope="row" style="text-align: center; padding: 10px;"><?php echo $row['PeriodoInicio'];?> <?php echo $row['PeriodoFinal'];?></td>
                                <td scope="row" style="text-transform:capitalize;" style="text-align: center;"><?php echo $row['Diagnostico'];?></td>
                                <td scope="row" style="text-transform:capitalize;" style="text-align: center;"><?php echo $row['NombreMedico'];?></td>
                                <td scope="row" style="text-align: center; padding: 10px;"><?php echo $row['Licencias'];?></td>
                                <td scope="row" style="text-transform:uppercase; text-align: center;"><?php echo $row['StatusIn'];?></td>
                                <td scope="row" style="text-align: center; padding: 10px;"><?php echo $row['ProgresoInca'];?></td>
                                <td scope="row" style="text-transform:uppercase; text-align: center;"><?php echo $row['ControlSuel'];?></td>
                                <td scope="row" style="text-align: center; padding: 10px;"><?php echo $row['LimitesInca'];?></td>
                                <td scope="row" class="table-active"><a class="btn btn-secondary" href="vista.php?NumIncapacidad=<?php echo $row['NumIncapacidad'];?>" style="box-shadow: none;" title="Visualizar Campo"><span><i class="icon icon-Ver"></i></span></a></td>
                                <td scope="row" class="table-active"><a href="editar.php?NumIncapacidad=<?php echo $row['NumIncapacidad'];?>" class="btn btn-success" style="box-shadow: none;" title="Editar Campo"><span><i class="icon icon-Editar"></i></span></a></td>
                                <td scope="row" class="table-active"><a onclick="return confirm('¿Desea Eliminar El Dato?')" href="eliminar.php?NumIncapacidad=<?php echo $row['NumIncapacidad'];?>" title="Eliminar Campo" class="btn btn-danger"><span><i class="icon icon-Eliminar"></i></span></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        
    </body>
</html>
