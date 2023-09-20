 <?php
    function buscadorConexion()
    {
    $mysqli = new mysqli("localhost", "root", "", "bdProyecto");
    }
    
    if(!isset($_POST['buscar'])) exit('No se recibio el valor a buscar');
    
    function buscador()
    {
        $mysqli = buscadorConexion();
        $buscador = $mysqli->real_escape_string($_POST['buscar']);
        $query = "SELECT * From empleado INNER JOIN personales WHERE empleado.Nombre LIKE '%$buscador%'";
        $resul = $mysqli->query($query);
        while ($row = $resul->fetch_array(MYSQLI_ASSOC))
                {
                   echo "<p> $row[Nombre] </p>";
                }
    }
    
    buscador();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
        <input type="text" id="buscar"/>
        </div>
        <div id="resul">
            
        </div>
       <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script language="javascript" type="text/javascript" src="../../Resource/js/main.js"></script>
    </body>
</html>
