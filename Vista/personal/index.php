<?php
     require_once '../../ModeloControlador/database.php';
     
     $db = new Database();
     $con = $db->conectar();
     
     $comando = $con->prepare("SELECT empleado.NumEmpleado, NumPersonal, Foto, Nombre, Appat, Apmat, Edad, FechaNa, Escolaridad, Especialidad, Estado, Municipio, EstadoCivil, NumDepEco, Sexo, TipoSangre, Calle, Numero, Colonia, CP, Ciudad, TipoHabitacion, TelParticular, TelOficina, Ext, TelCelular, TelEmergencia, Caso, CorreoPart, CorreoInstitu, Observaciones From personales INNER JOIN empleado WHERE empleado.NumEmpleado = personales.NumEmpleado ORDER BY empleado.NumEmpleado ASC");
     $comando->execute();
     $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Consultar datos personales</title>
         
        <link type="text/css" rel="stylesheet" href="../../Resource/css/estilos.css"><link rel="icon" href="../../Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" href="../../Resource/assets/icon/fonts.css">
        <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
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
                  <h5 id="title-menu" class="offcanvas-title"><span><i class="icon icon-Empleados"></i></span>Empleados</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                 </div>
                 <div class="offcanvas-body">
                     <ul id="menu">
                     <li>
                         <a href="../../index.php"><span><i class="icon icon-Inicio"></i></span>Inicio</a>
                     </li>
		     <li>	
                         <a><span><i class="icon icon-Empleados"></i></span>Empleados</a>
                      </li>
                      <ul style="list-style: none;" class="submenu">
                          <li><a href="../empleados/insertar.php"><span><i class="icon icon-AgregarEm"></i></span>Agregar</a></li>
                          <li><a href="../empleados/index.php"><span><i class="icon icon-Consultar"></i></span>Consultar</a></li>
                      </ul>
                     <li>
                        <a><span><i class="icon icon-Incapacidad"></i></span>Incapacidades</a>
		            <ul style="list-style: none;" class="submenu">
                                <li><a href="../incapacidades/insertar.php"><span><i class="icon icon-AgregarEm"></i></span>Agendar una nueva incapacidad</a></li>
			        <li><a href="../incapacidades/index.php"><span><i class="icon icon-Consultar"></i></span>Consultar incapacidades</a></li>
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
            <br>
            <div class="row">
                <div class="col-12">
                  <h2 style="text-align: center;">Ingresos Personales</h2>
                  <br>
                  <div class="col-md-2">
                      <label for="Buscar" class="form-label">Buscador de Empleado (Nombre o Apellidos) : </label>
                      <form class="d-flex" action="../../ModeloControlador/motorBusqueda/buscadorPersonal.php" method="POST" id="Formulario" name="Formulario" autocomplete="off">
                  <input class="form-control" style="box-shadow: none;" type="text" name="busqueda" id="busqueda"  placeholder="Buscar Empleados . . ." minlength="4" maxlength="50" pattern="[a-zA-ZÀ-ÿ ]{4,50}" title="Solo puedes buscar Nombre y Apellidos. Ejemplo: Juan Nadie o José María, puedes usar acentos y espacios" required>
                  <?php
                  if (isset($_POST['busqueda'])) 
                      {
                           $mysqli = new mysqli("localhost", "root", "", "bdProyecto");
                           require_once '../../ModeloControlador/motorBusqueda/buscadorPersonal.php';
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
                  <a class="btn btn-primary" style="box-shadow: none;" role="button" href="insertar.php"><span><i class="icon icon-Agregar"></i></span> Agregar Dato Personal </a>
                  <a  class="btn btn-info" style="box-shadow: none;" role="button" href="../empleados/index.php"><span><i class="icon icon-DatosLa"></i></span> Datos laborales </a>
                  <a  class="btn btn-outline-info" style="box-shadow: none;" role="button"><span><i class="icon icon-DatosPe"></i></span> Datos personales </a>
                  <a style="box-shadow: none;" role="button" href="../../ModeloControlador/Librerias/plantillasPDF/Plantilla-Personal.php" target="_blank" rel="noopener noreferrer" class="btn btn-danger"><span><i class="icon icon-PDF"></i></span> Generar Reporte en PDF</a>
                  <a style="box-shadow: none;" role="button" href="../../ModeloControlador/Librerias/plantillasExcel/Plantilla-Personal.php" class="btn btn-success"><span><i class="icon icon-Excel"></i></span> Generar Reporte en Excel</a>
                  </div>
                </div>
                
            </div>
            <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center; padding: 10px;">No. Prog</th>
                                <th scope="col" style="text-align: center; padding: 10px;" class="table-active">#No. Empleado</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Foto</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Nombre Completo</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Edad</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Fecha de Nacimiento</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Escolaridad</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Especialidad</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Estado y Municipio</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Estado Civil</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >No. Dependientes economicos</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Sexo</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Tipo de Sangre</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Domicilio</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Ciudad de Residencia</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Tipo de Habitacion</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Telefono Particular</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Telefono Oficina</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Ext</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Telefono Celular</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Telefono Emergencia</th>
                                <th scope="col" style="text-align: center; padding: 10px;">En caso de emergencia avisar a</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Correo Particular</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Correo Institucional</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Observaciones</th>
                                <th colspan="3" style="text-align: center; padding: 20px;" class="table-active">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $row){ ?>
                            <tr>
                                <td scope="row" style="text-align: center;"><?php echo $row['NumPersonal'];?></td>
                                <td scope="row" class="table-active"><?php echo $row['NumEmpleado'];?></td>
                                <td scope="row"><img class="img-thumbnail" width="100px" src="../../Resource/assets/imagenes/fotoEmpleados/<?php echo $row['Foto'];?>"/></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Appat'];?> <?php echo $row['Apmat'];?> <?php echo $row['Nombre'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['Edad'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['FechaNa'];?></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Escolaridad'];?></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Especialidad'];?></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Estado'];?> <?php echo $row['Municipio'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['EstadoCivil'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['NumDepEco'];?></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Sexo'];?></td>
                                <td scope="row" style="text-transform:uppercase; text-align: center;"><?php echo $row['TipoSangre'];?></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Calle'];?> <?php echo $row['Numero'];?> <?php echo $row['Colonia'];?> <?php echo $row['CP'];?></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Ciudad'];?></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['TipoHabitacion'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['TelParticular'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['TelOficina'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['Ext'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['TelCelular'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['TelEmergencia'];?></td>
                                <td scope="row" style="text-transform:capitalize; text-align: center;"><?php echo $row['Caso'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['CorreoPart'];?></td>
                                <td scope="row" style="text-align: center;"><?php echo $row['CorreoInstitu'];?></td>
                                <td scope="row" style="text-transform:lowercase; text-align: center;"><?php echo $row['Observaciones'];?></td>
                                <td scope="row" class="table-active"><a href="vista.php?NumPersonal=<?php echo $row['NumPersonal'];?>" style="box-shadow: none;" title="Visualizar Campo" class="btn btn-secondary"><span><i class="icon icon-Ver"></i></span></a></td>
                                <td scope="row" class="table-active"><a href="editar.php?NumPersonal=<?php echo $row['NumPersonal'];?>" class="btn btn-success" style="box-shadow: none;" title="Editar Campo"><span><i class="icon icon-Editar"></i></span></a></td>
                                <td scope="row" class="table-active"><a onclick="return confirm('¿Desea Eliminar El Dato?')" href="eliminar.php?NumPersonal=<?php echo $row['NumPersonal'];?>" title="Eliminar Campo" style="box-shadow: none;" class="btn btn-danger"><span><i class="icon icon-Eliminar"></i></span></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
        </main>
    </body>
</html>
