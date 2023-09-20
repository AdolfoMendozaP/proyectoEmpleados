

//-- function DiasIncapacidad --//
try 
{
    $('#PeriodoInicio').change(e =>{
    let suDias = Dias(e.currentTarget.value);
    
    
    if (suDias) 
    {
        $('#DiasIncapacidad').val(`${suDias[0]} año(s),${suDias[1]} mes(es) y ${suDias[2]} dia(s)`);
    } else {
        $('#DiasIncapacidad').val('');
    }
});

const Dias = PeriodoInicio =>
{
    if(!PeriodoInicio || isNaN(new Date(PeriodoInicio))) return;
    const hoy = new Date();
    const dateDa = new Date(PeriodoInicio); 
    if (hoy - dateDa < 0) return;
    let dias = hoy.getUTCDate() - dateDa.getUTCDate();
    let meses = hoy.getUTCMonth() - dateDa.getUTCMonth();
    let years = hoy.getUTCFullYear() - dateDa.getUTCFullYear();
    if(dias < 0) 
    {
      meses--;
      dias = 30 + dias;
    }
    
    if(meses < 0) 
    {
      years--;
      meses = 12 + meses;
    }
  
  return [years, meses, dias];
}



//-- function preVisualizacionImagen() --//
try 
{
    $('#Foto').change(function (){
        readImg(this);
    });
    
    function readImg(input)
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $("#FotoPreview").attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
} 
catch (e) {}


//-- function calcularAntiguedad() --//
try 
{
    $('#FechaIngreso').change(e =>{
    let validarAntiguedad = esValido(e.currentTarget.value);
    let suAntiguedad = Antiguedad(e.currentTarget.value);
    if (validarAntiguedad) 
    {
        //$('#Antiguedad').text(``);
    } else {
        if(validarAntiguedad === false)
        {
            //$('#Antiguedad').text(``);
        } else {
            $('#Antiguedad').val('Fecha y Antiguedad no válida, verifique');
        }
    }
    
    if (suAntiguedad) 
    {
        $('#Antiguedad').val(`${suAntiguedad[0]} año(s), ${suAntiguedad[1]} mes(es) y ${suAntiguedad[2]} dia(s)`);
    } else {
        $('#Antiguedad').val('');
    }
});

const AntiguedadVa = 18;
const esValido = FechaIngreso => 
{
    if (!FechaIngreso || isNaN(new Date(FechaIngreso))) return;
       const hoy = new Date();
       const dateIng = new Date(FechaIngreso);
       if (hoy - dateIng < 0) return;
       const years = hoy.getUTCFullYear() - dateIng.getUTCFullYear();
       if(years < AntiguedadVa) return false;
       if(years > AntiguedadVa) return true;
       const meses = hoy.getUTCMonth() - dateIng.getUTCMonth();
       if(meses < 0) return false;
       if(meses > 0) return true;
       const dias = hoy.getUTCDate() - dateIng.getUTCDate();
       if(dias < 0) return false;
       return true;
}

const Antiguedad = FechaIngreso =>
{
    if(!FechaIngreso || isNaN(new Date(FechaIngreso))) return;
    const hoy = new Date();
    const dateIng = new Date(FechaIngreso); 
    if (hoy - dateIng < 0) return;
    let dias = hoy.getUTCDate() - dateIng.getUTCDate();
    let meses = hoy.getUTCMonth() - dateIng.getUTCMonth();
    let years = hoy.getUTCFullYear() - dateIng.getUTCFullYear();
    if(dias < 0) 
    {
      meses--;
      dias = 30 + dias;
    }
    
    if(meses < 0) 
    {
      years--;
      meses = 12 + meses;
    }
  
  return [years, meses, dias];
}


//-- function calcularEdad() --//

   $('#FechaNa').change(e =>{
    let suEdad = Edad(e.currentTarget.value);
    
    
    if (suEdad) 
    {
        $('#Edad').val(`${suEdad[0]} año(s),${suEdad[1]} mes(es) y ${suEdad[2]} dia(s)`);
    } else {
        $('#Edad').val('');
    }
});

const Edad = FechaNa =>
{
    if(!FechaNa || isNaN(new Date(FechaNa))) return;
    const hoy = new Date();
    const dateNa = new Date(FechaNa); 
    if (hoy - dateNa < 0) return;
    let dias = hoy.getUTCDate() - dateNa.getUTCDate();
    let meses = hoy.getUTCMonth() - dateNa.getUTCMonth();
    let years = hoy.getUTCFullYear() - dateNa.getUTCFullYear();
    if(dias < 0) 
    {
      meses--;
      dias = 30 + dias;
    }
    
    if(meses < 0) 
    {
      years--;
      meses = 12 + meses;
    }
  
  return [years, meses, dias];
}


}
catch (err) {}



