<?php
//--CONEXION DE LA BASE DE DATOS - PDO--//
        require_once 'database.php';
        
        $db = new Database();
        $con = $db->conectar();
        
        $correcto = false;
        
try 
{
//--ACTUALIZAR DATOS - UPDATE--//
if (isset($_POST['NumEmpleado'])) {
        
    $NumEmpleado = htmlentities($_POST['NumEmpleado']);
    $Nivel = htmlentities($_POST['Nivel']);
    $Nombre = htmlentities($_POST['Nombre']);
    $Appat = htmlentities($_POST['Appat']);
    $Apmat = htmlentities($_POST['Apmat']);
    $RFC = htmlentities($_POST['RFC']);
    $CUIP = htmlentities($_POST['CUIP']);
    $CURP = htmlentities($_POST['CURP']);
    
//--PUESTO Ó DENOMINACION - UPDATE--//
    $Puesto = htmlentities($_POST['Puesto']);
    switch ($_REQUEST['Puesto'])
    {
        case 'ALMACENISTA II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ALMACENISTA III':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ARCHIVISTA V':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ASISTENTE/A ADMINISTRATIVO/A II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ASISTENTE/A ADMINISTRATIVO/A IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE RECURSOS HUMANOS II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE TALLER II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE TALLER III':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE TALLER IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE TIENDA II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR EDUCATIVO/A II':
        //echo $_REQUEST['Puesto'];
        break;
    
    
        case 'DESARROLLADOR/A EDUCATIVO/A IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'DESARROLLADOR/A LABORAL IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'DIRECTOR/A DE AREA B':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'ENLACE DE CONTROL VEHICULAR IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ENLACE DE RECURSOS FINANCIEROS IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ENLACE DE RECURSOS HUMANOS IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ENLACE DE SERVICIOS GENERALES IV':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'ESPECIALISTA ADMINISTRATIVO/A C':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'ESPECIALISTA JURIDICO/A V':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ESPECIALISTA JURIDICO/A VI':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ESPECIALISTA JURIDICO/A VII':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'ESPECIALISTA TECNICO/A D':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ESPECIALISTA TECNICO/A E':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'INSTRUCTOR/A DEPORTIVO/A IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'INTENDENTE/A II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A DE DEPARTAMENTO A':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A DE DEPARTAMENTO B':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A DE DEPARTAMENTO D':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A DE UNIDAD A':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A MEDICO/A':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'MENSAJERO/A III':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'OFICIAL DE GUARDIAS':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'OPERADOR/A ADMINISTRATIVO/A A':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'OPERADOR/A ADMINISTRATIVO/A B':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'OPERADOR/A DE SERVICIOS B':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'OPERADOR/A TECNICO/A A':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'OPERADOR/A TECNICO/A B':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'POLICIA CUSTODIO/A':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'PROFESIONAL ESPECIALIZADO/A B':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'SUBOFICIAL DE GUARDIA':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'TECNICO/A DE MANTENIMIENTO IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'TECNICO/A DE MANTENIMIENTO V':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'TRABAJADOR/A SOCIAL':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'TRABAJADOR/A SOCIAL III':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'TRABAJADOR/A SOCIAL IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'SIN PUESTO POR BAJA':
        //echo $_REQUEST['Puesto'];
        break;
    
    }
    
    //--NOMBRE DEL PUESTO FUNCIONAL REAL (PERFILES TIPO) EN EL CENTRO - UPDATE--//
    $PuestoFuncional = htmlentities($_POST['PuestoFuncional']);
    switch ($_REQUEST['PuestoFuncional'])
    {
        case 'ALMACENISTA III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ARCHIVISTA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ASISTENTE ADMINISTRATIVO I':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ASISTENTE ADMINISTRATIVO II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE ALMACEN II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE MANTENIMIENTO II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE RECURSOS HUMANOS':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE RECURSOS HUMANOS II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE TIENDA II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE TIENDA III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR EDUCATIVO II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'CHOFER III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DE RECURSOS FINANCIEROS IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DE RECURSOS HUMANOS':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'COORDINADOR DE SEGURIDAD':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DE SERVICIOS GENERALES':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DEL AREA MEDICA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DEPORTIVO IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'COORDINADOR EDUCATIVO IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'COORDINADOR LABORAL IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'CRIMINOLOGO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'DENTISTA CIRUJANO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'DIRECTOR DEL CENTRO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ENCARGADO/A DE ALMACEN III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ENCARGADO/A DE CONTROL VEHICULAR IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ENFERMERA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ESPECIALISTA JURIDICO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'ESPECIALISTA JURIDICO V':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'ESPECIALISTA JURIDICO VI':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'ESPECIALISTA JURIDICO VII':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'FOTOGRAFO DACTILOSCOPISTA III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'GUARDIA DE SEGURIDAD PENITENCIARIA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'INSTRUCTOR DEPORTIVO IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'INTENDENTE':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'INTENDENTE/A III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'JEFE DE SEGURIDAD PENITENCIARIA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE DE TALLER':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE INFORMATICA VI':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE MANTENIMIENTO IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE MANTENIMIENTO V':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE SEGURIDAD PENITENCIARIA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE TALLER III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE TALLER IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'MEDICO GENERAL':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'PSICOLOGO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'RESPONSABLE DE ALMACEN':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SECRETARIA DE OFICINA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SUBDIRECTOR JURIDICO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SUBDIRECTOR TECNICO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SUBDIRECTOR/A ADMINISTRATIVO/A X':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'TRABAJADOR SOCIAL':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SIN PUESTO POR BAJA':
        //echo $_REQUEST['Puesto'];
        break;
    
    }
    
    $Codigo = htmlentities($_POST['Codigo']);
    $FechaIngreso = htmlentities($_POST['FechaIngreso']);
    
    
    $Antiguedad = htmlentities($_POST['Antiguedad']);
    
    //--TURNO-AREA - UPDATE--//
    $TurnoArea = htmlentities($_POST['TurnoArea']);
    switch ($_REQUEST['TurnoArea']) 
    {
        case 'ADMINISTRATIVO':
        //echo $_REQUEST['TurnoArea'];
        break;
        
        case 'DIRECCION':
        //echo $_REQUEST['TurnoArea'];
        break;
        
        case 'JURIDICO':
        //echo $_REQUEST['TurnoArea'];
        break;
        
        case 'SEG. HORARIO ADMVO':
        //echo $_REQUEST['TurnoArea'];
        break;
        
        case 'SEG. TURNO 1':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'TECNICO':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'TURNO 1':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'TURNO 2':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'TURNO 3':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'SIN TURNO':
        //echo $_REQUEST['TurnoArea'];
        break;

    }
    
    //--Status de Trabajador - UPDATE--//
    $StatusEm = htmlentities($_POST['StatusEm']);
    if ($_REQUEST['StatusEm'] == "Activo") {
        //echo $_REQUEST ['Nombre']. "Esta dando de alta en el sistema";
    }
    
    if ($_REQUEST['StatusEm'] == "Baja") {
        //echo $_REQUEST ['Nombre']. "Esta dando de baja en el sistema";
    }
    
    $FechaBaja = htmlentities($_POST['FechaBaja']);
    $MotivoBaja = htmlentities($_POST['MotivoBaja']);
    $FechaPro = htmlentities($_POST['FechaPro']);
    
    //--Modelo empleado - UPDATE--//
    $query = $con->prepare("UPDATE empleado SET Nivel=?, Nombre=?, Appat=?, Apmat=?, RFC=?, CUIP=?, CURP=?, Puesto=?, PuestoFuncional=?, Codigo=?, FechaIngreso=?, Antiguedad=?, TurnoArea=?, StatusEm=?, FechaBaja=?, MotivoBaja=?, FechaPro=? WHERE NumEmpleado=?");
    $resultado = $query->execute(array($Nivel, $Nombre, $Appat, $Apmat, $RFC, $CUIP, $CURP, $Puesto, $PuestoFuncional, $Codigo, $FechaIngreso, $Antiguedad, $TurnoArea, $StatusEm, $FechaBaja, $MotivoBaja, $FechaPro, $NumEmpleado));

    //--Foto empleado - UPDATE--//
    $Foto = $_FILES['Foto']["name"];
    $Fecha = new DateTime();
    $nombreArchivo=($Foto!="")?$Fecha->getTimestamp()."_".$_FILES['Foto']["name"]:"imagen.jpg";
    $tmpFoto = $_FILES['Foto']["name"];
    
    if ($tmpFoto!="") {
        move_uploaded_file($tmpFoto, "../fotoEmpleados/imagenes/" .$nombreArchivo);
    }
    
    $query = $con->prepare("UPDATE empleado SET Foto=? WHERE NumEmpleado=?");
    $resultado = $query->execute(array($Foto, $NumEmpleado));
    
    
    if ($resultado) {
        $correcto = true;
    }
   
    //--INSERTAR DATOS - INSERT--//
} else {
    $Nivel = htmlentities($_POST['Nivel']);
    $Nombre = htmlentities($_POST['Nombre']);
    $Appat = htmlentities($_POST['Appat']);
    $Apmat = htmlentities($_POST['Apmat']);
    $RFC = htmlentities($_POST['RFC']);
    $CUIP = htmlentities($_POST['CUIP']);
    $CURP = htmlentities($_POST['CURP']);
    
    //--PUESTO Ó DENOMINACION - INSERT--//
    $Puesto = htmlentities($_POST['Puesto']);
    switch ($_REQUEST['Puesto'])
    {
        case 'ALMACENISTA II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ALMACENISTA III':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ARCHIVISTA V':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ASISTENTE/A ADMINISTRATIVO/A II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ASISTENTE/A ADMINISTRATIVO/A IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE RECURSOS HUMANOS II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE TALLER II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE TALLER III':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE TALLER IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR DE TIENDA II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'AUXILIAR EDUCATIVO/A II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'DESARROLLADOR/A EDUCATIVO/A IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'DESARROLLADOR/A LABORAL IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'DIRECTOR/A DE AREA B':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'ENLACE DE CONTROL VEHICULAR IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ENLACE DE RECURSOS FINANCIEROS IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ENLACE DE RECURSOS HUMANOS IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ENLACE DE SERVICIOS GENERALES IV':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'ESPECIALISTA ADMINISTRATIVO/A C':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'ESPECIALISTA JURIDICO/A V':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ESPECIALISTA JURIDICO/A VI':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ESPECIALISTA JURIDICO/A VII':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'ESPECIALISTA TECNICO/A D':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'ESPECIALISTA TECNICO/A E':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'INSTRUCTOR/A DEPORTIVO/A IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'INTENDENTE/A II':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A DE DEPARTAMENTO A':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A DE DEPARTAMENTO B':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A DE DEPARTAMENTO D':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A DE UNIDAD A':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'JEFE/A MEDICO/A':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'MENSAJERO/A III':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'OFICIAL DE GUARDIAS':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'OPERADOR/A ADMINISTRATIVO/A A':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'OPERADOR/A ADMINISTRATIVO/A B':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'OPERADOR/A DE SERVICIOS B':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'OPERADOR/A TECNICO/A A':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'OPERADOR/A TECNICO/A B':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'POLICIA CUSTODIO/A':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'PROFESIONAL ESPECIALIZADO/A B':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'SUBOFICIAL DE GUARDIA':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'TECNICO/A DE MANTENIMIENTO IV':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'TECNICO/A DE MANTENIMIENTO V':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'TRABAJADOR/A SOCIAL':
        //echo $_REQUEST['Puesto'];
        break;
        
        case 'TRABAJADOR/A SOCIAL III':
        //echo $_REQUEST['Puesto'];
        break;
    
        case 'TRABAJADOR/A SOCIAL IV':
        //echo $_REQUEST['Puesto'];
        break;
    
    }
    
    //--NOMBRE DEL PUESTO FUNCIONAL REAL (PERFILES TIPO) EN EL CENTRO - INSERT--//
    $PuestoFuncional = htmlentities($_POST['PuestoFuncional']);
    switch ($_REQUEST['PuestoFuncional'])
    {
        
        case 'ALMACENISTA III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ARCHIVISTA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ASISTENTE ADMINISTRATIVO I':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ASISTENTE ADMINISTRATIVO II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE ALMACEN II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE MANTENIMIENTO II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE RECURSOS HUMANOS':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE RECURSOS HUMANOS II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE TIENDA II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR DE TIENDA III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'AUXILIAR EDUCATIVO II':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'CHOFER III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DE RECURSOS FINANCIEROS IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DE RECURSOS HUMANOS':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'COORDINADOR DE SEGURIDAD':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DE SERVICIOS GENERALES':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DEL AREA MEDICA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'COORDINADOR DEPORTIVO IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'COORDINADOR EDUCATIVO IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'COORDINADOR LABORAL IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'CRIMINOLOGO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'DENTISTA CIRUJANO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'DIRECTOR DEL CENTRO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ENCARGADO/A DE ALMACEN III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ENCARGADO/A DE CONTROL VEHICULAR IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ENFERMERA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'ESPECIALISTA JURIDICO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'ESPECIALISTA JURIDICO V':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'ESPECIALISTA JURIDICO VI':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'ESPECIALISTA JURIDICO VII':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'FOTOGRAFO DACTILOSCOPISTA III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'GUARDIA DE SEGURIDAD PENITENCIARIA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'INSTRUCTOR DEPORTIVO IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'INTENDENTE':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'INTENDENTE/A III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'JEFE DE SEGURIDAD PENITENCIARIA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE DE TALLER':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE INFORMATICA VI':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE MANTENIMIENTO IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE MANTENIMIENTO V':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE SEGURIDAD PENITENCIARIA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE TALLER III':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'JEFE/A DE TALLER IV':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'MEDICO GENERAL':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'PSICOLOGO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'RESPONSABLE DE ALMACEN':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SECRETARIA DE OFICINA':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SUBDIRECTOR JURIDICO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SUBDIRECTOR TECNICO':
        //echo $_REQUEST['PuestoFuncional'];
        break;
    
        case 'SUBDIRECTOR/A ADMINISTRATIVO/A X':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
        case 'TRABAJADOR SOCIAL':
        //echo $_REQUEST['PuestoFuncional'];
        break;
        
    }
    
    $Codigo = htmlentities($_POST['Codigo']);
    $FechaIngreso = htmlentities($_POST['FechaIngreso']);
    $FechaPro = htmlentities($_POST['FechaPro']);
    $Antiguedad = htmlentities($_POST['Antiguedad']);
    
    //--TURNO-AREA - INSERT--//
    $TurnoArea = htmlentities($_POST['TurnoArea']);
    switch ($_REQUEST['TurnoArea']) 
    {
        case 'ADMINISTRATIVO':
        //echo $_REQUEST['TurnoArea'];
        break;
        
        case 'DIRECCION':
        //echo $_REQUEST['TurnoArea'];
        break;
        
        case 'JURIDICO':
        //echo $_REQUEST['TurnoArea'];
        break;
        
        case 'SEG. HORARIO ADMVO':
        //echo $_REQUEST['TurnoArea'];
        break;
        
        case 'SEG. TURNO 1':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'TECNICO':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'TURNO 1':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'TURNO 2':
        //echo $_REQUEST['TurnoArea'];
        break;
    
        case 'TURNO 3':
        //echo $_REQUEST['TurnoArea'];
        break;

    }
    
    //--Status del trabajador - INSERT--//
    $StatusEm = htmlentities($_POST['StatusEm']);
    if ($_REQUEST['StatusEm'] == "Activo") {
        //echo $_REQUEST ['Nombre']. "Esta dando de alta en el sistema";
    }
    
    //--Sin Motivo - INSERT--//
    $FechaBaja = htmlentities($_POST['FechaBaja']);
    $MotivoBaja = htmlentities($_POST['MotivoBaja']);
    
    //--Foto - INSERT--//
    $Foto = $_FILES['Foto']["name"];
    $Fecha = new DateTime();
    $nombreArchivo=($Foto!="")?$Fecha->getTimestamp()."_".$_FILES['Foto']["name"]:"imagen.jpg";
    $tmpFoto = $_FILES['Foto']["name"];
    
    if ($tmpFoto!="") {
        move_uploaded_file($tmpFoto, ".../fotoEmpleados/imagenes/" .$nombreArchivo);
    }
    
    //--Modelo empleado - INSERT--//
    $query = $con->prepare("INSERT INTO empleado (Nivel, Foto, Nombre, Appat, Apmat, RFC, CUIP, CURP, Puesto, PuestoFuncional, Codigo, FechaIngreso, Antiguedad, TurnoArea, StatusEm, FechaBaja, MotivoBaja, FechaPro) VALUES (:Nivel, :Foto, :Nombre, :Appat, :Apmat, :RFC, :CUIP, :CURP, :Puesto, :PuestoFuncional, :Codigo, :FechaIngreso, :Antiguedad, :TurnoArea, :StatusEm, :FechaBaja, :MotivoBaja, :FechaPro)");
    $resultado = $query->execute(array('Nivel' => $Nivel, 'Foto' => $Foto, 'Nombre' => $Nombre, 'Appat' => $Appat, 'Apmat' => $Apmat, 'RFC' => $RFC, 'CUIP' => $CUIP, 'CURP' => $CURP, 'Puesto' => $Puesto, 'PuestoFuncional' => $PuestoFuncional, 'Codigo' => $Codigo, 'FechaIngreso' => $FechaIngreso, 'Antiguedad' => $Antiguedad,'TurnoArea' => $TurnoArea, 'StatusEm' => $StatusEm, 'FechaBaja' => $FechaBaja, 'MotivoBaja' => $MotivoBaja, 'FechaPro' => $FechaPro));

    if ($resultado) {
        $correcto = true;
        
    }
  }
} 

catch (PDOException $e) {
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
        
        <title>Registro</title>
        
        <link type="text/css" rel="stylesheet" href="../Resource/css/estilos.css"><link rel="icon" href="../Resource/assets/imagenes/Logos/icono.gif"><link rel="stylesheet" href="../Resource/assets/icon/fonts.css">
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
                        <h3><span><i class="icon icon-Guardar"></i></span>  Registro Guardado de Datos Laborales</h3>
                        </div>
                        <div class="card-body">
                            <?php
                                  echo "<b>Datos ingresados y/o actualizados en el servidor</b>";
                                  echo "<br>";echo "<br>";
                                  echo "Nombre Completo: ";
                                  echo $_POST['Appat']; echo '&nbsp;'; echo $_POST['Apmat']; echo '&nbsp;'; echo $_POST['Nombre'];
                                  echo "<br>";
                                  echo "RFC: ";
                                  echo $_POST['RFC'];
                                  echo "<br>";
                                  echo "CUIP: ";
                                  echo $_POST['CUIP'];
                                  echo "<br>";
                                  echo "CURP: ";
                                  echo $_POST['CURP'];
                                  echo "<br>";
                                  echo "Nivel: ";
                                  echo $_POST['Nivel'];
                                  echo "<br>";
                                  echo "Codigo Presupuestal: ";
                                  echo $_POST['Codigo'];
                                  echo "<br>";
                                  echo "Puesto: ";
                                  echo $_POST['Puesto'];
                                  echo "<br>";
                                  echo "Puesto Funcional: ";
                                  echo $_POST['PuestoFuncional'];
                                  echo "<br>";
                                  echo "Fecha de Ingreso: ";
                                  echo $_POST['FechaIngreso'];
                                  echo "<br>";
                                  echo "Fecha de Promocion: ";
                                  echo $_POST['FechaPro'];
                                  echo "<br>";
                                  echo "Antigüedad: ";
                                  echo $_POST['Antiguedad'];
                                  echo "<br>";
                                  echo "Turno - Area: ";
                                  echo $_POST['TurnoArea'];
                                  echo "<br>";
                                  echo "Status: ";
                                  echo $_POST['StatusEm'];
                                  echo "<br>";
                                  echo "Fecha de Baja: ";
                                  echo $_POST['FechaBaja'];
                                  echo "<br>";
                                  echo "Motivo de Baja: ";
                                  echo $_POST['MotivoBaja'];
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
                    <a class="btn btn-outline-primary" style="box-shadow: none;" onclick="return confirm('¡Aun no esta el registro completo! ¿Realmente quieres salir?')" href="../Vista/empleados/index.php"><span><i class="icon icon-Salir"></i></span>  Regresar al Ingresos Laborales</a>
                    <a class="btn btn-success" style="box-shadow: none;" href="../Vista/personal/insertar.php"><span><i class="icon icon-Agregar"></i></span>  Agregar Datos Personales</a>
                 </div>
               </div>
                </div>
               </div>
             </div>
             </div>
    </main>
    </body>
</html>
