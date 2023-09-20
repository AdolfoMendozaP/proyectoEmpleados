<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Insertar Datos</title>
        
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
                       <h4>Agendar una Incapacidad</h4>
                      </div>
                   <div class="card-body">
                      <form class="row g-2" action="../../ModeloControlador/modeloControllerIncapacidades.php" method="POST" enctype="multipart/form-data" id="Formulario" name="Formulario" autocomplete="off">
                            <h4>Ingresar Incapacidad</h4>
                            <br><br>
                            <div class="col-md-2">
                            <label for="NumEmpleado" class="form-label">#No. Empleado : </label>
                            <input class="form-control" type="number" style="box-shadow: none;" id="NumEmpleado" name="NumEmpleado" min="0" minlength="1" maxlength="11" pattern="[0-9]{1}" title="Tiene que ser numero asignado de Guanuajuato" placeholder="No. Empleado" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="Folio" class="form-label">Folio de Incapacidad : </label>
                            <input class="form-control" type="text" style="text-transform:uppercase; box-shadow: none;" id="Folio" name="Folio" maxlength="6" pattern="[a-zA-Z0-9]{6}" title="El folio debe ser asignado en el ISSTE" placeholder="Folio" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="FechaExpedicion" class="form-label">Fecha de Expedicion : </label>
                            <input class="form-control" type="date" style="box-shadow: none;" id="FechaExpedicion" name="FechaExpedicion" min="2022-01-01" max="2090-12-31" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="DiasIncapacidad" class="form-label">Dias de Incapacidad : </label>
                            <input class="form-control" type="text" style="box-shadow: none;" id="DiasIncapacidad" name="DiasIncapacidad" value="0" min="0" pattern="[0-9]" placeholder="Dias de Incapacidad" readonly required/>
                            <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
                            </div>
                            <div class="col-md-2">
                            <label for="PeriodoInicio" class="form-label">Periodo de Inicio : </label>
                            <input class="form-control" type="date" style="box-shadow: none;" id="PeriodoInicio" min="2022-01-01" max="2090-12-31" name="PeriodoInicio" pattern="\d{4}-\d{2}-\d{2}" required/>
                            </div>
                            <div class="col-md-2">
                            <label for="PeriodoFinal" class="form-label">Periodo de Fin : </label>
                            <input class="form-control" type="date" style="box-shadow: none; " id="PeriodoFinal" min="2022-01-01" max="2090-12-31" name="PeriodoFinal" required/>
                            </div>
                            <div class="col-md-3">
                            <label for="Diagnostico" class="form-label">Diagnostico : </label>
                            <input class="form-control" type="text" style="text-transform:capitalize; box-shadow: none;" id="Diagnostico" name="Diagnostico" placeholder="Diagnostico" minlength="4" maxlength="50" pattern="[A-Za-zÀ-ÿ ]{4,50}" title="Ejemplo: Fiebre, Tos, etc..." required/>
                            </div>
                            <div class="col-md-4">
                            <label for="NombreMedico" class="form-label">Medico que expide : </label>
                            <input class="form-control" type="text" style="text-transform:capitalize; box-shadow: none;" id="NombreMedico" name="NombreMedico" placeholder="Nombre del Medico" minlength="4" maxlength="40" pattern="[A-Za-zÀ-ÿ ]{4,40}" title="Ejemplo: Juan Nadie o José María, puedes usar acentos y espacios" required/>
                            </div>
                            <div class="col-md-1">
                            <label for="Licencias" class="form-label">Licencias : </label>
                            <input class="form-control" type="number" style="box-shadow: none; " id="Licencias" name="Licencias" placeholder="Licencias" value="0" min="0" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="ControlSuel" class="form-label">Control de sueldo : </label>
                            <input class="form-control" type="text" style="text-transform:capitalize; box-shadow: none;" id="ControlSuel" name="ControlSuel" placeholder="Control de sueldo" value="completo" readonly/>
                            </div>
                            <div class="col-md-2">
                            <label for="LimitesInca" class="form-label">Limite de incapacidad : </label>
                            <input class="form-control" type="number" style="text-transform:capitalize; box-shadow: none;" id="LimitesInca" name="LimitesInca" placeholder="Limite" value="3" min="0" readonly/>
                            </div>
                            <div class="col-md-4">
                            <label for="StatusIn" class="form-label">Status de la incapacidad: </label>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" style="box-shadow: none; background-color: green;" id="StatusIn" type="radio" name="StatusIn" value="Activo" checked readonly/>Activo<br>
                            <br>
                            </div>
                            </div>
                            <div class="card-footer text-muted">
                            <div class="col-md-12">
                                <a class="btn btn-secondary" style="box-shadow: none;" onclick="return confirm('¿Desea salir de ingresar?')" href="index.php"><span><i class="icon icon-Salir"></i></span> Cancelar</a>
                                <button type="submit" style="box-shadow: none;" onclick="return confirm('¿Desea guardar los datos?')" class="btn btn-success"><span><i class="icon icon-Guardar"></i></span> Guardar</button>
                                <button type="reset" style="box-shadow: none;" class="btn btn-warning" onclick="return confirm('¿Desea reestablecer el formulario?')"><span><i class="icon icon-Reset"></i></span> Reestablecer</button>
                                <a class="btn btn-primary" style="box-shadow: none;" onclick="return confirm('¿Desea salir de ingresar?')" href="../../index.php"><span><i class="icon icon-Inicio"></i></span> Volver al Inicio</a>
                            </div>
                            </div>
                    </form>
                       <script lang="javascript" type="text/javascript">
                           // -- Validador de Form/Submit (INSERT) --//
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
        
                                 document.getElementById("PeriodoInicio").value = ano + "-" + mes + "-" + dia;
                                }
                                
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
            </div>
    </main>
    </body>
</html>
