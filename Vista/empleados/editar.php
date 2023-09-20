<?php
    require_once '../../ModeloControlador/database.php';
    
    $db = new Database();
    $con = $db->conectar();
    
    try 
    {
       $NumEmpleado = $_GET['NumEmpleado'];
    
       $query = $con->prepare("SELECT * FROM empleado WHERE NumEmpleado = :NumEmpleado");
       $query->execute(['NumEmpleado' => $NumEmpleado]);
       $num = $query->rowCount();
       if ($num > 0) {
       $row = $query->fetch(PDO::FETCH_ASSOC);
       } else {
       header("Location: index.php");
       }    
    } 
    
    catch (PDOException $e) 
    {
          echo 'Error en actualizar los datos' .$e->getMessage();
          exit();
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
         <main class="container">
             <div class="row py-3">
                    <div class="col-12">
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
                    <div class="alert alert-secondary d-flex align-items-center" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div>
                      &nbsp; Actualiza los datos a las casillas correspondientes
                     </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                       <h4><span><i class="icon icon-IngresarEmpleado"></i></span>   Editar Datos del Empleado</h4>
                      </div>
                   <div class="card-body">
                      <form class="row g-2" action="../../ModeloControlador/modeloControllerEmpleado.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="col-md-2">
                        <label for="NumEmpleado" class="form-label" style="font-weight: bold;">#No. Empleado : </label>
                        <input class="form-control" type="number" style="box-shadow: none;" id="NumEmpleado" name="NumEmpleado" min="0" value="<?php echo $NumEmpleado; ?>" readonly/>
                        </div>
                            <div class="col-md-2">
                            <label for="Nombre" class="form-label" style="font-weight: bold;">Nombre o Nombres : </label>
                            <input class="form-control" type="text" style="box-shadow: none; text-transform:capitalize;" id="Nombre" name="Nombre" placeholder="Nombre" minlength="4" maxlength="40" pattern="[A-Za-zÀ-ÿ ]{4,40}" title="Ejemplo: Juan Nadie o José María, puedes usar acentos y espacios" value="<?php echo $row['Nombre']; ?>" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Appat" class="form-label" style="font-weight: bold;">Apellido Paterno : </label>
                            <input class="form-control" type="text" style="box-shadow: none; text-transform:capitalize;" id="Appat" name="Appat" placeholder="Apellido Paterno" minlength="4" maxlength="20" pattern="[A-Za-zÀ-ÿ]{4,20}" title="Ejemplo: López o Herrera, puedes usar acentos" value="<?php echo $row['Appat']; ?>" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Apmat" class="form-label" style="font-weight: bold;">Apellido Materno : </label>
                            <input class="form-control" type="text" style=" box-shadow: none; text-transform:capitalize;" id="Apmat" name="Apmat"  placeholder="Apellido Materno" minlength="4" maxlength="20" pattern="[A-Za-zÀ-ÿ]{4,20}" title="Ejemplo: Hernández o Castillos, puedes usar acentos" value="<?php echo $row['Apmat']; ?>" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="RFC" class="form-label" style="font-weight: bold;">RFC : </label>
                            <input class="form-control" type="text" style="box-shadow: none; text-transform:uppercase;" id="RFC" name="RFC" placeholder="RFC" minlength="13" maxlength="13" pattern="[A-Za-z0-9]{13}" title="El RFC debe llevar 13 caracteres. Ejemplo: ABCD123456XYZ" oninput="validarInputRFC(this)" value="<?php echo $row['RFC']; ?>" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="CURP" class="form-label" style="font-weight: bold;">CURP : </label>
                            <input class="form-control" type="text" style="box-shadow: none; text-transform:uppercase;" id="CURP" name="CURP" placeholder="CURP" minlength="18" maxlength="18" pattern="[A-Za-z0-9]{18}" title="El CURP debe llevar 18 caracteres. Ejemplo: ABCD123456XYZ12345" oninput="validarInputCurp(this)" value="<?php echo $row['CURP']; ?>" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="CUIP" class="form-label" style="font-weight: bold;">CUIP : </label>
                            <input class="form-control" type="text" style=" box-shadow: none; text-transform:uppercase;" id="CUIP" name="CUIP" placeholder="CUIP" minlength="19" maxlength="19" pattern="[A-Za-z0-9]{19}" title="El CURP debe llevar 18 caracteres. Ejemplo: ABCD123456XYZ123456" value="<?php echo $row['CUIP']; ?>" required/>
                            </div>
                            <div class="col-md-1">
                            <label for="Nivel" class="form-label" style="font-weight: bold;">Nivel : </label>
                            <input class="form-control" type="text" style="box-shadow: none; text-transform:uppercase;" id="Nivel" name="Nivel" placeholder="Nivel" maxlength="3" pattern="\d[a-z A-Z0-9]" title="Ejemplo: 1 o 4A, dependiendo de su area asignada" value="<?php echo $row['Nivel']; ?>" required/>
                            </div>
                            <div class="col-md-3">
                            <label for="Codigo" class="form-label" style="font-weight: bold;">Codigo Presupuestal : </label>
                            <input class="form-control" type="text" style="box-shadow: none; text-transform:uppercase;" id="Codigo" name="Codigo" value="<?php echo $row['Codigo']; ?>" readonly/>   
                            </div>
                            <div class="col-md-4">
                            <label for="Puesto" class="form-label" style="font-weight: bold;">Puesto : </label>
                            <select class="form-select" style="box-shadow: none;" value="<?php echo $row['Puesto']; ?>" name="Puesto" id="Puesto" required>
                            <option disabled selected value="">--- PUESTO Ó DENOMINACION ---</option>
                            <option value="ALMACENISTA II">ALMACENISTA II</option>
                            <option value="ALMACENISTA III">ALMACENISTA III</option>
                            <option value="ARCHIVISTA V">ARCHIVISTA V</option>
                            <option value="ASISTENTE/A ADMINISTRATIVO/A II">ASISTENTE/A ADMINISTRATIVO/A II</option>
                            <option value="ASISTENTE/A ADMINISTRATIVO/A IV">ASISTENTE/A ADMINISTRATIVO/A IV</option>
                            <option value="AUXILIAR DE RECURSOS HUMANOS II">AUXILIAR DE RECURSOS HUMANOS II</option>
                            <option value="AUXILIAR DE TALLER II">AUXILIAR DE TALLER II</option>
                            <option value="AUXILIAR DE TALLER III">AUXILIAR DE TALLER III</option>
                            <option value="AUXILIAR DE TALLER IV">AUXILIAR DE TALLER IV</option>
                            <option value="AUXILIAR DE TIENDA II">AUXILIAR DE TIENDA II</option>
                            <option value="AUXILIAR EDUCATIVO/A II">AUXILIAR EDUCATIVO/A II</option>
                            <option value="DESARROLLADOR/A EDUCATIVO/A IV">DESARROLLADOR/A EDUCATIVO/A IV</option>
                            <option value="DESARROLLADOR/A LABORAL IV">DESARROLLADOR/A LABORAL IV</option>
                            <option value="DIRECTOR/A DE AREA B">DIRECTOR/A DE AREA B</option>
                            <option value="ENLACE DE CONTROL VEHICULAR IV">ENLACE DE CONTROL VEHICULAR IV</option>
                            <option value="ENLACE DE RECURSOS FINANCIEROS IV">ENLACE DE RECURSOS FINANCIEROS IV</option>
                            <option value="ENLACE DE RECURSOS HUMANOS IV">ENLACE DE RECURSOS HUMANOS IV</option>
                            <option value="ENLACE DE SERVICIOS GENERALES IV">ENLACE DE SERVICIOS GENERALES IV</option>
                            <option value="ESPECIALISTA ADMINISTRATIVO/A C">ESPECIALISTA ADMINISTRATIVO/A C</option>
                            <option value="ESPECIALISTA JURIDICO/A V">ESPECIALISTA JURIDICO/A V</option>
                            <option value="ESPECIALISTA JURIDICO/A VI">ESPECIALISTA JURIDICO/A VI</option>
                            <option value="ESPECIALISTA JURIDICO/A VII">ESPECIALISTA JURIDICO/A VII</option>
                            <option value="ESPECIALISTA TECNICO/A D">ESPECIALISTA TECNICO/A D</option>
                            <option value="ESPECIALISTA TECNICO/A E">ESPECIALISTA TECNICO/A E</option>
                            <option value="INSTRUCTOR/A DEPORTIVO/A IV">INSTRUCTOR/A DEPORTIVO/A IV</option>
                            <option value="INTENDENTE/A II">INTENDENTE/A II</option>
                            <option value="JEFE/A DE DEPARTAMENTO A">JEFE/A DE DEPARTAMENTO A</option>
                            <option value="JEFE/A DE DEPARTAMENTO B">JEFE/A DE DEPARTAMENTO B</option>
                            <option value="JEFE/A DE DEPARTAMENTO D">JEFE/A DE DEPARTAMENTO D</option>
                            <option value="JEFE/A DE UNIDAD A">JEFE/A DE UNIDAD A</option>
                            <option value="JEFE/A MEDICO/A">JEFE/A MEDICO/A</option>
                            <option value="MENSAJERO/A III">MENSAJERO/A III</option>
                            <option value="OFICIAL DE GUARDIAS">OFICIAL DE GUARDIAS</option>
                            <option value="OPERADOR/A ADMINISTRATIVO/A A">OPERADOR/A ADMINISTRATIVO/A A</option>
                            <option value="OPERADOR/A ADMINISTRATIVO/A B">OPERADOR/A ADMINISTRATIVO/A B</option>
                            <option value="OPERADOR/A DE SERVICIOS B">OPERADOR/A DE SERVICIOS B</option>
                            <option value="OPERADOR/A TECNICO/A A">OPERADOR/A TECNICO/A A</option>
                            <option value="OPERADOR/A TECNICO/A B">OPERADOR/A TECNICO/A B</option>
                            <option value="POLICIA CUSTODIO/A">POLICIA CUSTODIO/A</option>
                            <option value="PROFESIONAL ESPECIALIZADO/A B">PROFESIONAL ESPECIALIZADO/A B</option>
                            <option value="SUBOFICIAL DE GUARDIA">SUBOFICIAL DE GUARDIA</option>
                            <option value="TECNICO/A DE MANTENIMIENTO IV">TECNICO/A DE MANTENIMIENTO IV</option>
                            <option value="TECNICO/A DE MANTENIMIENTO V">TECNICO/A DE MANTENIMIENTO V</option>
                            <option value="TRABAJADOR/A SOCIAL">ESPECIALISTA TECNICO/A E</option>
                            <option value="TRABAJADOR/A SOCIAL III">INSTRUCTOR/A DEPORTIVO/A IV</option>
                            <option value="TRABAJADOR/A SOCIAL IV">JEFE/A DE DEPARTAMENTO A</option>
                            <option value="SIN PUESTO POR BAJA">SIN PUESTO POR BAJA</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                            <label for="PuestoFuncional" class="form-label" style="font-weight: bold;">Puesto Funcional : </label>
                            <select class="form-select" style="box-shadow: none;" value="<?php echo $row['PuestoFuncional']; ?>" name="PuestoFuncional" id="PuestoFuncional" required>
                            <option disabled selected value=""> -- NOMBRE DEL PUESTO FUNCIONAL REAL (PERFILES TIPO) EN EL CENTRO -- </option>
                            <option value="ALMACENISTA III">ALMACENISTA III</option>
                            <option value="ARCHIVISTA">ARCHIVISTA</option>
                            <option value="ASISTENTE ADMINISTRATIVO I">ASISTENTE ADMINISTRATIVO I</option>
                            <option value="ASISTENTE ADMINISTRATIVO II">ASISTENTE ADMINISTRATIVO II</option>
                            <option value="AUXILIAR DE ALMACEN II">AUXILIAR DE ALMACEN II</option>
                            <option value="AUXILIAR DE MANTENIMIENTO II">AUXILIAR DE MANTENIMIENTO II</option>
                            <option value="AUXILIAR DE RECURSOS HUMANOS">AUXILIAR DE RECURSOS HUMANOS</option>
                            <option value="AUXILIAR DE RECURSOS HUMANOS II">AUXILIAR DE RECURSOS HUMANOS II</option>
                            <option value="AUXILIAR DE TIENDA II">AUXILIAR DE TIENDA II</option>
                            <option value="AUXILIAR DE TIENDA III">AUXILIAR DE TIENDA III</option>
                            <option value="AUXILIAR EDUCATIVO II">AUXILIAR EDUCATIVO II</option>
                            <option value="CHOFER III">CHOFER III</option>
                            <option value="COORDINADOR DE RECURSOS FINANCIEROS IV">COORDINADOR DE RECURSOS FINANCIEROS IV</option>
                            <option value="COORDINADOR DE RECURSOS HUMANOS">COORDINADOR DE RECURSOS HUMANOS</option>
                            <option value="COORDINADOR DE SEGURIDAD">COORDINADOR DE SEGURIDAD</option>
                            <option value="COORDINADOR DE SERVICIOS GENERALES">COORDINADOR DE SERVICIOS GENERALES</option>
                            <option value="COORDINADOR DEL AREA MEDICA">COORDINADOR DEL AREA MEDICA</option>
                            <option value="COORDINADOR DEPORTIVO IV">COORDINADOR DEPORTIVO IV</option>
                            <option value="COORDINADOR EDUCATIVO IV">COORDINADOR EDUCATIVO IV</option>
                            <option value="COORDINADOR LABORAL IV">COORDINADOR LABORAL IV</option>
                            <option value="CRIMINOLOGO">CRIMINOLOGO</option>
                            <option value="DENTISTA CIRUJANO">DENTISTA CIRUJANO</option>
                            <option value="DIRECTOR DEL CENTRO">DIRECTOR DEL CENTRO</option>
                            <option value="ENCARGADO/A DE ALMACEN III">ESPECIALISTA JURIDICO/A V</option>
                            <option value="ENCARGADO/A DE CONTROL VEHICULAR IV">ENCARGADO/A DE CONTROL VEHICULAR IV</option>
                            <option value="ENFERMERA">ENFERMERA</option>
                            <option value="ESPECIALISTA JURIDICO">ESPECIALISTA JURIDICO</option>
                            <option value="ESPECIALISTA JURIDICO V">ESPECIALISTA JURIDICO V</option>
                            <option value="ESPECIALISTA JURIDICO VI">ESPECIALISTA JURIDICO VI</option>
                            <option value="ESPECIALISTA JURIDICO VII">ESPECIALISTA JURIDICO VII</option>
                            <option value="FOTOGRAFO DACTILOSCOPISTA III">FOTOGRAFO DACTILOSCOPISTA III</option>
                            <option value="GUARDIA DE SEGURIDAD PENITENCIARIA">GUARDIA DE SEGURIDAD PENITENCIARIA</option>
                            <option value="INSTRUCTOR DEPORTIVO IV">INSTRUCTOR DEPORTIVO IV</option>
                            <option value="INTENDENTE">INTENDENTE</option>
                            <option value="INTENDENTE/A III">INTENDENTE/A III</option>
                            <option value="JEFE DE SEGURIDAD PENITENCIARIA">JEFE DE SEGURIDAD PENITENCIARIA</option>
                            <option value="JEFE DE TALLER">JEFE DE TALLER</option>
                            <option value="JEFE/A DE INFORMATICA VI">JEFE/A DE INFORMATICA VI</option>
                            <option value="JEFE/A DE MANTENIMIENTO IV">JEFE/A DE MANTENIMIENTO IV</option>
                            <option value="JEFE/A DE MANTENIMIENTO V">JEFE/A DE MANTENIMIENTO V</option>
                            <option value="JEFE/A DE SEGURIDAD PENITENCIARIA">JEFE/A DE SEGURIDAD PENITENCIARIA</option>
                            <option value="JEFE/A DE TALLER III">JEFE/A DE TALLER III</option>
                            <option value="JEFE/A DE TALLER IV">JEFE/A DE TALLER IV</option>
                            <option value="MEDICO GENERAL">MEDICO GENERAL</option>
                            <option value="PSICOLOGO">PSICOLOGO</option>
                            <option value="RESPONSABLE DE ALMACEN">RESPONSABLE DE ALMACEN</option>
                            <option value="SECRETARIA DE OFICINA">TECNICO/A DE MANTENIMIENTO V</option>
                            <option value="SUBDIRECTOR JURIDICO">SUBDIRECTOR JURIDICO</option>
                            <option value="SUBDIRECTOR TECNICO">SUBDIRECTOR TECNICO</option>
                            <option value="SUBDIRECTOR/A ADMINISTRATIVO/A X">SUBDIRECTOR/A ADMINISTRATIVO/A X</option>
                            <option value="TRABAJADOR SOCIAL">TRABAJADOR SOCIAL</option>
                            <option value="SIN PUESTO POR BAJA">SIN PUESTO POR BAJA</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                            <label for="FechaIngreso" class="form-label" style="font-weight: bold;">Fecha de Ingreso : </label>
                            <input class="form-control" style="box-shadow: none;" type="date" id="FechaIngreso" value="<?php echo $row['FechaIngreso']; ?>" name="FechaIngreso" min="1990-01-01" max="2090-12-31" required/>
                            </div>
                            <div class="col-md-3">
                            <label for="Antiguedad" class="form-label" style="font-weight: bold;">Antigüedad : </label>
                            <input class="form-control" style="box-shadow: none;" type="text" id="Antiguedad" name="Antiguedad" value="<?php echo $row['Antiguedad']; ?>" readonly equired/>
                            </div>
                            <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
                            <div class="col-md-2">
                            <label for="FechaPro" class="form-label" style="font-weight: bold;">Fecha de Promocion : </label>
                            <input class="form-control" style="box-shadow: none;" type="date" id="FechaPro" name="FechaPro" value="<?php echo $row['FechaPro']; ?>" min="1990-01-01" max="2090-12-31" autofocus required/>
                            </div>
                             <div class="col-md-3">
                            <label for="TurnoArea" class="form-label" style="font-weight: bold;">Turno - Area : </label>
                            <select class="form-select" style="box-shadow: none;" name="TurnoArea" id="TurnoArea" value="<?php echo $row['TurnoArea']; ?>" required autofocus>
                            <option disabled selected value=""> -- TURNO-AREA --</option>
                            <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                            <option value="DIRECCION">DIRECCION</option>
                            <option value="JURIDICO">JURIDICO</option>
                            <option value="SEG. HORARIO ADMVO">SEG. HORARIO ADMVO</option>
                            <option value="SEG. TURNO 1">SEG. TURNO 1</option>
                            <option value="TECNICO">TECNICO</option>
                            <option value="TURNO 1">TURNO 1</option>
                            <option value="TURNO 2">TURNO 2</option>
                            <option value="TURNO 3">TURNO 3</option>
                            <option value="SIN TURNO">SIN TURNO</option>
                            </select>
                            </div>
                            <div class="col-md-8">
                            <label for="Status" class="form-label" style="font-weight: bold;">Status : </label>
                            <div class="form-check">
                                <input class="form-check-input" style="box-shadow: none; background-color: green;" id="StatusEm" type="radio" name="StatusEm" value="Activo" checked/>Activo<br>
                                <input class="form-check-input" style="box-shadow: none; background-color: #ff3333;" id="StatusEm" type="radio" name="StatusEm" value="Baja"/>Baja<br>
                                <br>
                            </div>
                            </div>
                            <div class="col-md-2">
                            <label for="FechaBaja" class="form-label" style="font-weight: bold;">Fecha de Baja : </label>
                            <input class="form-control" style="box-shadow: none;" type="date" id="FechaIngreso" value="<?php echo $row['FechaBaja']; ?>" min="1990-01-01" max="2090-12-31" name="FechaBaja"/>
                            </div>
                            <div class="col-md-4">
                            <label for="MotivoBaja" class="form-label" style="font-weight: bold;">Motivo de Baja : </label>
                            <input class="form-control" type="text" id="MotivoBaja" style="text-transform:capitalize; box-shadow: none;" value="<?php echo $row['MotivoBaja']; ?>" minlength="4" maxlength="20" pattern="[A-Za-zÀ-ÿ ]{4,20}" name="MotivoBaja" placeholder="Motivo de Baja"/>
                            </div>
                            <br><br>
                            <br>
                            <div class="form-group col-md-13">
                            <label for="Foto" class="form-label" style="font-weight: bold;">Foto del Empleado* : </label>
                            <input class="form-control" style="box-shadow: none;" type="file" accept=".png, .jpg, .jpeg" id="Foto" name="Foto" value="<?php echo $row['Foto']; ?>" required/>
                            <div class="text-center">
                                <img class="rounded" src="../../Resource/assets/imagenes/fotoEmpleados/<?php echo $row['Foto']; ?>" width="250px" height="250px" id="FotoPreview" alt="">
                            </div>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                            <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
                            <div class="card-footer text-muted">
                            <div class="col-md-12">
                                <a class="btn btn-secondary" style="box-shadow: none;" onclick="return confirm('¿Desea salir del editar?')" href="index.php"><span><i class="icon icon-Salir"></i></span> Cancelar</a>
                                <button type="submit" style="box-shadow: none;" onclick="return confirm('¿Desea guardar los datos?')" class="btn btn-success"><span><i class="icon icon-Guardar"></i></span> Guardar</button>
                                <button type="reset" style="box-shadow: none;" class="btn btn-warning" onclick="return confirm('¿Desea reestablecer el formulario?')"><span><i class="icon icon-Reset"></i></span> Reestablecer</button>
                                <a class="btn btn-primary" style="box-shadow: none;" onclick="return confirm('¿Desea salir de ingresar?')" href="../../index.php"><span><i class="icon icon-Inicio"></i></span> Volver al Inicio</a>
                            </div>
                            </div>
                        
                        </form>
                 </div>
            </div>
                </div>
            </div>
    </main>
    </body>
    <script language="javascript" type="text/javascript">
        // -- Fecha de Hoy --//
        try 
        {
         window.onload = function ()
         {
            var fecha = new Date();
            var mes = fecha.getMonth()+1;
            var dia = fecha.getDate();
            var ano = fecha.getFullYear();
            
            if(dia<10)
            dia='0'+dia;
        
            if(mes<10)
            mes='0'+mes
        
            document.getElementById("FechaHoy").value = ano + "-" + mes + "-" + dia;
         }
        } 
        catch (e) {}
        
        //-- Validador de RFC --//
                            try 
                            {
                                function rfcValido(rfc, aceptarGenerico = true) 
                                {
                                const re = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
                                var   validado = rfc.match(re);

                                if (!validado)
                                return false;

                                const digitoVerificador = validado.pop(),
                                rfcSinDigito = validado.slice(1).join(''),
                                len = rfcSinDigito.length,
                                diccionario = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
                                indice = len + 1;
                        
                                var   suma,
                                      digitoEsperado;

                                if (len == 12) suma = 0
                                else suma = 481;
                                
                                for(var i=0; i<len; i++)
                                    suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
                                    digitoEsperado = 11 - suma % 11;
                                    
                                    if (digitoEsperado == 11) digitoEsperado = 0;
                                    else if (digitoEsperado == 10) digitoEsperado = "A";

    
                                    if ((digitoVerificador != digitoEsperado) && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
                                        return false;
                                    
                                    else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
                                  return false;
                                return rfcSinDigito + digitoVerificador;
                              }

                            function validarInputRFC(input) 
                             {
                                 var rfc = input.value.trim().toUpperCase(),
                                 resultadoR = document.getElementById("resultadoR"),
                                 valido;
        
                                 var rfcCorrecto = rfcValido(rfc);   
  
                                  if (rfcCorrecto) 
                                  {
    	                             valido = "Válido";
                                     resultadoR.classList.add("ok");
                                  } 
                                  
                                  else 
                                  {
    	                             valido = "No válido"
    	                             resultadoR.classList.remove("ok");
                                  }
        
                                   resultadoR.innerText = "*RFC: " + rfc 
                                                       + "\nFormato: " + valido;
                             }
                        } 
                            catch (err) 
                            {
                                document.getElementById("RFC").innerHTML = err.message;
                            }
                            
                            //-- Validador de CURP --//
                                try 
                                {
                                    function curpValida(curp)
                                    {
                                        var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
                                            validado = curp.match(re);
                                    
                                        if (!validado)
                                            return false;
                                        
                                        function digitoVerificador(curp17)
                                        {
                                            var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
                                                lngSuma = 0.0,
                                                lngDigito = 0.0;
                                            
                                            for (var i=0; i<17; i++)
                                                lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
                                            lngDigito = 10 - lngSuma % 10;
                                            if (lngDigito == 0) return 0;
                                            return lngDigito;
                                       } 
                                       
                                       if (validado[2] != digitoVerificador(validado[1])) 
    	                                  return false;
        
                                       return true;
                                   }
                                   
                                   function validarInputCurp(input)
                                   {
                                       var curp = input.value.toUpperCase(),
                                           resultadoC = document.getElementById("resultadoC"),
                                           valido = "No valido";
                                   
                                        if (curpValida(curp)) 
                                        {
                                             valido = "Válido";
                                             resultadoC.classList.add("ok");
                                        } 
                                        else 
                                        {
                                            resultadoC.classList.remove("ok");
                                        }
                                        
                                        resultadoC.innerText = "*CURP: " + curp + "\nFormato: " + valido;
                                   }
                                }
                                catch (err) 
                                {
                                    document.getElementById("CURP").innerHTML = err.message;
                                }
                            
                            // -- Validador de Form/Submit (UPDATE) --//
                           try 
                           {
                               function validarFormulario()
                               {
                                   var expNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expAppat = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expApmat = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expNivel = /\d[0-9a-zA-Z]/;
                                   var expCodigo =  /^[0-9.a-zA-Z0-9]+$/g;
                                   var expMotivoBaja = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   
                                   var Nombre = document.getElementById("Nombre");
                                   var Appat = document.getElementById("Appat");
                                   var Apmat = document.getElementById("Apmat");
                                   var Nivel = document.getElementById("Nivel");
                                   var Codigo = document.getElementById("Codigo");
                                   var MotivoBaja = document.getElementById("MotivoBaja");
                                   
                                   
                                   if (!expNombre.exec(Nombre.value)) 
                                   {
                                       Nombre.focus();
                                       return false;
                                   }
                                   
                                   if (!expAppat.exec(Appat.value)) 
                                   {
                                       Appat.focus();
                                       return false;
                                   }
                                   
                                   if (!expApmat.exec(Apmat.value)) 
                                   {
                                       Apmat.focus();
                                       return false;
                                   }
                                   
                                   if (!expNivel.exec(Nivel.value)) 
                                   {
                                       Nivel.focus();
                                       return false;
                                   }
                                   
                                   if (!expCodigo.exec(Codigo.value)) 
                                   {
                                       Codigo.focus();
                                       return false;
                                   }
                                   
                                   if (!expMotivoBaja.exec(MotivoBaja.value)) 
                                   {
                                       MotivoBaja.focus();
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
</html>
