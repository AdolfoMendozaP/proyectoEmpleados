<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Insertar Datos</title>
        
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
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                     <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div>
                      &nbsp;  Ingrese los datos a las casillas correspondientes
                     </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                       <h4><span><i class="icon icon-IngresarEmpleado"></i></span>   Ingresar Nuevo Dato Personal</h4>
                      </div>
                   <div class="card-body">
                       <form class="row g-2" action="../../ModeloControlador/modeloControllerPersonal.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                           <div class="col-md-2">
                           <label for="NumEmpleado" class="form-label" style="font-weight: bold;">#No. Empleado* : </label>
                           <input class="form-control" style="box-shadow: none;" type="number" id="NumEmpleado" name="NumEmpleado" min="0" minlength="1" maxlength="11" pattern="[0-9]{1}" title="Tiene que ser numero asignado de Guanuajuato" placeholder="#No. Empleado" required/>
                           </div>
                           <div class="col-md-3">
                           <label for="Edad" class="form-label" style="font-weight: bold;">Edad* : </label>
                           <input class="form-control" style="box-shadow: none;" type="text" id="Edad" name="Edad" value="0" placeholder="Edad" required readonly/>
                           </div>
                           <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
                           <div class="col-md-2">
                            <label for="FechaNa" class="form-label" style="font-weight: bold;">Fecha de Nacimiento* : </label>
                            <input class="form-control" style="box-shadow: none;" type="date" id="FechaNa" name="FechaNa" min="1950-01-01" max="2090-12-31" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="FechaHoy" class="form-label" style="font-weight: bold;">Hoy* : </label>
                            <input class="form-control" style="box-shadow: none;" type="date" id="FechaHoy" name="FechaHoy" min="1990-01-01" max="2090-12-31" readonly required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Escolaridad" class="form-label" style="font-weight: bold;">Escolaridad* : </label>
                            <select class="form-select" style="box-shadow: none;" name="Escolaridad" id="Escolaridad" required>
                            <option disabled selected value="">----</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Preparatoria">Preparatoria</option>
                            <option value="Bachilerato">Bachilerato</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="Bachillertato">Bachillertato</option>
                            <option value="Carrera Comercial">Carrera Comercial</option>
                            <option value="Carrera Tecnica">Carrera Tecnica</option>
                            <option value="Tecnico/a">Tecnico/a</option>
                            <option value="TSU">TSU</option>
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Ingenieria">Ingenieria</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                            <label for="Especialidad" class="form-label" style="font-weight: bold;">Especialidad* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform:capitalize;" type="text" id="Especialidad" name="Especialidad" placeholder="Especialidad" minlength="4" maxlength="40" pattern="[A-Za-zÀ-ÿ ]{4,40}"  required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Estado" class="form-label" style="font-weight: bold;">Estado* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform:capitalize;" type="text" id="Estado" name="Estado" placeholder="Estado" minlength="4" maxlength="20" pattern="[A-Za-zÀ-ÿ ]{4,20}"  required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Municipio" class="form-label" style="font-weight: bold;">Municipio* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform:capitalize;" type="text" id="Municipio" name="Municipio" placeholder="Municipio" minlength="4" maxlength="30" pattern="[A-Za-zÀ-ÿ ]{4,30}"  required/>
                            </div>
                            <div class="col-md-2">
                            <label for="EstadoCivil" class="form-label" style="font-weight: bold;">Estado Civil* : </label>
                            <select class="form-select" style="box-shadow: none;" name="EstadoCivil" id="EstadoCivil" required>
                            <option disabled selected value="">----</option>
                            <option value="Soltero/a">Soltero/a</option>
                            <option value="Casado/a">Casado/a</option>
                            </select>
                            </div>
                            <div class="col-md-auto">
                            <label for="NumDepEco" class="form-label" style="font-weight: bold;">No. Dependientes economicos* : </label>
                            <input class="form-control" style="box-shadow: none;" type="text" id="NumDepEco" name="NumDepEco" maxlength="2" pattern="[0-9]{1,2}" placeholder="No. Dependientes economicos" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Sexo" class="form-label" style="font-weight: bold;">Sexo* : </label>
                            <select class="form-select" style="box-shadow: none;" name="Sexo" id="Sexo" required>
                            <option disabled selected value="">----</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                            <label for="TipoSangre" class="form-label" style="font-weight: bold;">Tipo de Sangre* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform:uppercase;" type="text" id="TipoSangre" name="TipoSangre" minlength="2" maxlength="8" pattern="^[a-zA-Z0-9_.+- ]*${2-8}" placeholder="Tipo de Sangre" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Calle" class="form-label" style="font-weight: bold;">Calle* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform: capitalize;" type="text" id="Calle" name="Calle" placeholder="Calle" minlength="4" maxlength="50" pattern="[a-zA-Z0-9. ]{4-50}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Numero" class="form-label" style="font-weight: bold;">Numero* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform: uppercase;" type="text" id="Numero" name="Numero" placeholder="Numero" minlength="2" maxlength="20" pattern="^[a-zA-Z0-9_.+- ]*${2-20}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Colonia" class="form-label" style="font-weight: bold;">Colonia* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform:capitalize;" type="text" id="Colonia" style="" name="Colonia" placeholder="Colonia" minlength="4" maxlength="50" pattern="[A-Za-zÀ-ÿ ]{4,50}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="CP" class="form-label" style="font-weight: bold;">Codigo Postal* : </label>
                            <input class="form-control" style="box-shadow: none;" type="text" id="CP" name="CP" placeholder="CP" maxlength="5" pattern="[0-9]{5}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Ciudad" class="form-label" style="font-weight: bold;">Ciudad de Residencia* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform: capitalize;" type="text" id="Ciudad" style="text-transform:capitalize;" name="Ciudad" placeholder="Ciudad" minlength="4" maxlength="30" pattern="[A-Za-zÀ-ÿ ]{4,40}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="TipoHabitacion" class="form-label" style="font-weight: bold;">Tipo de Habitacion* : </label>
                            <select class="form-select" style="box-shadow: none;" name="TipoHabitacion" id="TipoHabitacion" required>
                            <option disabled selected value="">----</option>
                            <option value="CREDITO HIPOTECARIO">CREDITO HIPOTECARIO</option>
                            <option value="FAMILIAR">FAMILIAR</option>
                            <option value="PRESTADA">PRESTADA</option>
                            <option value="PROPIA">PROPIA</option>
                            <option value="RENTADA">RENTADA</option>
                            </select>
                            </div>
                            <div class="col-md-2">
                            <label for="TelParticular" class="form-label" style="font-weight: bold;">Telefono Particular* : </label>
                            <input class="form-control" style="box-shadow: none;" type="tel" id="TelParticular" name="TelParticular" placeholder="Telefono Particular" minlength="1" maxlength="10" pattern="[0-9]{1,10}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="TelOficina" class="form-label" style="font-weight: bold;">Telefono Oficina* : </label>
                            <input class="form-control" style="box-shadow: none;" type="tel" id="TelOficina" name="TelOficina" placeholder="Telefono Oficina" minlength="1" maxlength="10" pattern="[0-9]{1,10}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Ext" class="form-label" style="font-weight: bold;">Ext* : </label>
                            <input class="form-control" style="box-shadow: none;" type="tel" id="Ext" name="Ext" placeholder="Ext" minlength="1" maxlength="5" pattern="[0-9]{1,5}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="TelCelular" class="form-label" style="font-weight: bold;">Telefono Celular* : </label>
                            <input class="form-control" style="box-shadow: none;" type="tel" id="TelCelular" name="TelCelular" placeholder="TelCelular" minlength="1" maxlength="10" pattern="[0-9]{1,10}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="TelEmergencia" class="form-label" style="font-weight: bold;">Telefono Emergencia* : </label>
                            <input class="form-control" style="box-shadow: none;" type="tel" id="TelEmergencia" name="TelEmergencia" placeholder="Telefono Emergencia" minlength="1" maxlength="10" pattern="[0-9]{1,10}" required/>
                            </div>
                            <div class="col-md-4">
                            <label for="Caso" class="form-label" style="font-weight: bold;">En caso de emergencia avisar a* : </label>
                            <input class="form-control" style="box-shadow: none; text-transform:capitalize;" type="text" id="Caso" name="Caso" placeholder="Caso" minlength="4" maxlength="40" pattern="[A-Za-zÀ-ÿ ]{4,40}" title="Ejemplo: Tiene que ser el nombre de la persona que atendera el caso, puedes usar acentos y espacios" required/>
                            </div>
                            <div class="col-md-3">
                            <label for="CorreoPart" class="form-label" style="font-weight: bold;">Correo Particular* : </label>
                            <input class="form-control" style="box-shadow: none;" type="email" id="CorreoPart" name="CorreoPart" placeholder="Correo Particular" minlength="4" maxlength="50" pattern="^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}${4,50}" required/>
                            </div>
                            <div class="col-md-3">
                            <label for="CorreoInstitu" class="form-label" style="font-weight: bold;">Correo Institucional* : </label>
                            <input class="form-control" style="box-shadow: none;" type="email" id="CorreoInstitu" name="CorreoInstitu" placeholder="Correo Institucional" minlength="4" maxlength="50" pattern="^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}${4,50}" required/>
                            </div>
                            <div class="col-md-8">
                            <label for="Observaciones" class="form-label" style="font-weight: bold;">Observaciones* : </label>
                            <input class="form-control" type="text" style="box-shadow: none;" id="Observaciones" style="text-transform:lowercase;" name="Observaciones" minlength="4" maxlength="255" pattern="[0-9A-Za-zÀ-ÿ ]{4,255}" required/>
                            </div>
                            <script language="javascript" type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                            <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
                            <div class="card-footer text-muted">
                            <div class="col-md-12">
                                <a class="btn btn-secondary" style="box-shadow: none;" onclick="return confirm('¿Desea salir de ingresar?')" href="index.php"><span><i class="icon icon-Salir"></i></span> Cancelar</a>
                                <button type="submit" style="box-shadow: none;" onclick="return confirm('¿Desea guardar los datos?')" class="btn btn-success" id="validarCampos"><span><i class="icon icon-Guardar"></i></span> Guardar</button>
                                <button type="reset" style="box-shadow: none;" class="btn btn-warning" onclick="return confirm('¿Desea reestablecer el formulario?')"><span><i class="icon icon-Reset"></i></span> Reestablecer</button>
                                <a class="btn btn-primary" style="box-shadow: none;" onclick="return confirm('¿Desea salir de ingresar?')" href="../../index.php"><span><i class="icon icon-Inicio"></i></span> Volver al Inicio</a>
                            </div>
                            </div>
                            </form>
                       <script lang="javascript" type="text/javascript">
                           // -- Validador de Form/Submit (INSERT) --//
                           try 
                           {
                               function validarFormulario()
                               {
                                   var expEspecialidad = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expEstado = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expMunicipio = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expNumDepEco = /^[0-9]+$/;
                                   var expCalle = /^[A-za-z.a-zA-Z0-9]+$/g;
                                   var expColonia = /^[0-9.a-zA-Z0-9]+$/g;
                                   var expCiudad =  /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expCP = /^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$/;
                                   var expCaso = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expObservaciones = /^[0-9a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                                   var expTelParticular = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
                                   var expTelCelular = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
                                   var expTelOficina = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
                                   var expTelEmergencia = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
                                   var expExt = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
                                   var expCorreoPart = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                                   var expCorreoInstitu = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                                              
                                   var Especialidad = document.getElementById("Especialidad");
                                   var Estado = document.getElementById("Estado");
                                   var Municipio = document.getElementById("Municipio");
                                   var NumDepEco = document.getElementById("NumDepEco");
                                   var Calle = document.getElementById("Calle");
                                   var Colonia = document.getElementById("Colonia");
                                   var Ciudad = document.getElementById("Ciudad");
                                   var CP = document.getElementById("CP");
                                   var Observaciones = document.getElementById("Observaciones");
                                   var TelParticular = document.getElementById("TelParticular");
                                   var TelCelular = document.getElementById("TelCelular");
                                   var TelOficina = document.getElementById("TelOficina");
                                   var TelEmergencia = document.getElementById("TelEmergencia");
                                   var Ext = document.getElementById("Ext");
                                   var CorreoPart = document.getElementById("CorreoPart");
                                   var CorreoInstitu = document.getElementById("CorreoInstitu");
                                   
                                   

                                   if (!expEspecialidad.exec(Especialidad.value)) 
                                   {
                                       Especialidad.focus();
                                       return false;
                                   }
                                   
                                   if (!expEstado.exec(Estado.value)) 
                                   {
                                       Estado.focus();
                                       return false;
                                   }
                                   
                                   if (!expMunicipio.exec(Municipio.value)) 
                                   {
                                       Municipio.focus();
                                       return false;
                                   }
                                   
                                   if (!expNumDepEco.exec(NumDepEco.value)) 
                                   {
                                       NumDepEco.focus();
                                       return false;
                                   }
                                   
                                   if (!expCalle.exec(Calle.value)) 
                                   {
                                       Calle.focus();
                                       return false;
                                   }
                                   
                                   if (!expColonia.exec(Colonia.value)) 
                                   {
                                       Colonia.focus();
                                       return false;
                                   }
                                   
                                   if (!expCiudad.exec(Ciudad.value)) 
                                   {
                                       Ciudad.focus();
                                       return false;
                                   }
                                   
                                   if(!expCP.exec(CP.value))
                                   {
                                       CP.focus();
                                       return false;
                                   }
                                   
                                   if(!expCaso.exec(Caso.value))
                                   {
                                       Caso.focus();
                                       return false;
                                   }
                                   
                                   if(!expTelParticular.exec(TelParticular.value))
                                   {
                                       TelParticular.focus();
                                       return false;
                                   }
                                   
                                   if(!expTelCelular.exec(TelCelular.value))
                                   {
                                       TelCelular.focus();
                                       return false;
                                   }
                                   
                                   if(!expTelOficina.exec(TelOficina.value))
                                   {
                                       TelOficina.focus();
                                       return false;
                                   }
                                   
                                   if(!expTelEmergencia.exec(TelEmergencia.value))
                                   {
                                       TelEmergencia.focus();
                                       return false;
                                   }
                                   
                                   if(!expExt.exec(TelExt.value))
                                   {
                                       Ext.focus();
                                       return false;
                                   }
                                   
                                   if(!expCorreoPart.exec(CorreoPart.value))
                                   {
                                       CorreoPart.focus();
                                       return false;
                                   }
                                   
                                   if(!expCorreoInstitu.exec(CorreoInstitu.value))
                                   {
                                       CorreoInstitu.focus();
                                       return false;
                                   }
                                   
                                   
                                   if(!expObservaciones.exec(Observaciones.value))
                                   {
                                       Observaciones.focus();
                                       return false;
                                   }
                                   
                                  
                                  
                                  return true;
                               }
                               
                               window.onload = function()
                               {
                                   var Formulario = document.getElementById("Formulario");
                                   Formulario.onsubmit = validarFormulario();
                               }
                               
                               // -- Fecha de Hoy --//
                              try 
                              {
                                window.onload = function ()
                               {
                                   
                                 var fecha = new Date();
                                 var mes = fecha.getMonth() + 1;
                                 var dia = fecha.getDate();
                                 var ano = fecha.getFullYear();
            
                                 if(dia < 10)
                                 dia= '0' + dia;
        
                                 if(mes < 10)
                                 mes = '0' + mes;
        
                                 document.getElementById("FechaHoy").value = ano + "-" + mes + "-" + dia;
                                }
                               } 
                            catch (err) 
                            {
                              document.getElementById("FechaHoy").innerHTML = err.message;
                            }
                       </script>
                         </div>
                 </div>
            </div>
             </div>
    </main>
    </body>
</html>
