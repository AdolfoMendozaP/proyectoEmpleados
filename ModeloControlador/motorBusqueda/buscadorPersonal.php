<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Resultados de Busqueda</title>
         
        <link type="text/css" rel="stylesheet" href="../../Resource/css/estilos.css"><link rel="icon" href="../../Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" href="../../Resource/assets/icon/fonts.css">
        <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <noscript><p>Sin Soporte de Scripts</p></noscript>
    </head>
    <body class="py-3">
        <header>
            <section id="banner">
                <h2>Centro Estatal de Prevención y Reinserción Social de León Gto</h2>
            </section>
        </header>
        <br><br><br><br><br>
        <main class="container-fluid">
            <div class="row py-3">
                <div class="col-12">
                       <div class="card" style="width: 100%;">
                         <div class="card-header">
                             <h4><span><i class="icon icon-Buscar"></i></span>   Resultados de busqueda</h4>
                         </div>
                         <div class="card-body">
                          <?php
                                  $mysqli = new mysqli("localhost", "root", "", "bdProyecto");
                         try 
                          {
                              $busqueda = $_POST['busqueda'];
                              $query = "SELECT DISTINCT * FROM personales INNER JOIN empleado WHERE empleado.Nombre LIKE '%$busqueda%' OR empleado.Appat LIKE '%$busqueda%' OR empleado.Apmat LIKE '%$busqueda%'";
                              $consulta = $mysqli->query($query);
                              if ($consulta->num_rows>=1) 
                              {
                                  echo "<table>
                                      <thead>
                                      <tr>
                                      <th>No. Prog</th>
                                      <th>#No. Empleado</th>
                                      <th>Nombre Completo</th>
                                
                                      </tr>
                                      </thead>
                                       <tbody>";
                                  while ($row = $consulta->fetch_array(MYSQLI_ASSOC)) 
                                  {
                                      echo "<tr>
                                          <td>".$row['NoProg']."</td>
                                          <td>".$row['NumEmpleado']."</td>
                                          <td>".$row['Nombre']."".$row['Appat']."".$row['Apmat']."</td>
                                          
                                          
                                          </tr>";    
                                  }
                                  
                                  echo "</tbody>
                                 </table>";
                              }
                               else 
                                   {
                                      echo "No hemos encontrado";
                                   }
                          } 
                          
                          catch (PDOException $e) 
                          {
                           echo 'Error de busqueda' .$e->getMessage();
                           exit();
                          }                  
                          ?>
                        </div>
                        <div class="card-footer text-muted">
                           <div class="col-md-12">
                               <a class="btn btn-primary" style="box-shadow: none;" href="../../index.php"><span><i class="icon icon-Inicio"></i></span> Volver al Inicio</a>
                               <a class="btn btn-secondary" style="box-shadow: none;" href="../../Vista/personal/index.php"><span><i class="icon icon-Empleados"></i></span> Volver a Ingresos Personales</a>
                               <a style="box-shadow: none;" role="button" href="" class="btn btn-danger"><span><i class="icon icon-PDF"></i></span> Generar Reporte en PDF</a>
                               <a style="box-shadow: none;" role="button" href="" target="_blank" rel="noopener noreferrer" class="btn btn-success"><span><i class="icon icon-Excel"></i></span> Generar Reporte en Excel</a>
                           </div>
                        </div>
                       </div>
                     </div>
                </div>
        </main>
    </body>
</html>
