<?php
     require_once 'ModeloControlador/database.php';
     
     $db = new Database();
     $con = $db->conectar();
     
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home</title>
        <link rel="icon" href="Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" type="text/css" href="Resource/assets/icon/fonts.css"><link rel="stylesheet" type="text/css" href="Resource/css/estilos.css">
        <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
                  <h5 id="title-menu" class="offcanvas-title"><span><i class="icon icon-Inicio"></i></span>Inicio</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                 </div>
                 <div class="offcanvas-body">
                     <ul id="menu">
                     <li>
                         <a href="index.php"><span><i class="icon icon-Inicio"></i></span>Inicio</a>
                     </li>
		     <li>	
                         <a><span><i class="icon icon-Empleados"></i></span>Empleados</a>
                         <ul style="list-style: none;" class="submenu">
                             <li><a href="Vista/empleados/insertar.php"><span><i class="icon icon-AgregarEm"></i></span>Agregar</a></li>
                             <li><a href="Vista/empleados/index.php"><span><i class="icon icon-Consultar"></i></span>Consultar</a></li>
                            </ul>
                      </li>
                      
                     <li>
                        <a><span><i class="icon icon-Incapacidad"></i></span>Incapacidades</a>
		            <ul style="list-style: none;" class="submenu">
                                <li><a href="Vista/incapacidades/insertar.php"><span><i class="icon icon-AgregarEm"></i></span>Agendar una nueva incapacidad</a></li>
                                <li><a href="Vista/incapacidades/index.php"><span><i class="icon icon-Consultar"></i></span>Consultar incapacidades</a></li>
                            </ul>
                        </li>
                    </ul>
                 </div>
                </div>
               </div>
		</nav>
	</header>
    <br><br><br><br><br><br>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Ingresos Generales</h2>
                
                <br>
                <form class="d-flex" action="#" method="POST">
                    <div class="col-md-8">
                    <label for="Buscar" class="form-label">Buscador de Empleado (No.Empleado, Nombre) : </label>
                    <input type="text" style="box-shadow: none;" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar">
                    </div>
                    
                  </form>
                <br><br>
                <a style="box-shadow: none;" role="button" href="ModeloControlador/Librerias/plantillasPDF/Plantilla-Inicio.php" target="_blank" rel="noopener noreferrer" class="btn btn-danger"><span><i class="icon icon-PDF"></i></span> Generar Reporte en PDF</a>
                <a style="box-shadow: none;" role="button" href="ModeloControlador/Librerias/plantillasExcel/Plantilla-Inicio.php" class="btn btn-success"><span><i class="icon icon-Excel"></i></span> Generar Reporte en Excel</a>
                <br><br>
                </div>
                </div>
        <div class="col-12">
        <table class="table">
            <thead>
                            <tr>
                                <th scope="col" style="text-align: center; padding: 10px;">No. Prog</th>
                                <th scope="col" style="text-align: center; padding: 10px;" class="table-active">#No. Empleado</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Foto</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Nombre Completo</th>
                                <th scope="col" style="text-align: center; padding: 10px;" >Edad</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Fecha de Ingreso</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Puesto</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Puesto Funcional</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Turno - Area</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Correo Institucional</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Telefono Oficina</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Ext</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Status</th>
                                <th scope="col" style="text-align: center; padding: 10px;">Antigüedad Laboral</th>
                                <th colspan="3" style="text-align: center; padding: 20px;" class="table-active">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="content">
                           
                        </tbody>
        </table>
            </div>
    </main>
         
     </body>
</html>
            
        