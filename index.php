<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!--<title>INVENTARIO ELITE</title>
        <link rel="shortcut icon" href="imagenes/favicon.ico" />-->
    </head>
    <body>
        <?php
        require_once ("Conexion.php");
        
        $con = new Conexion();
        $db = $con->Conectar();
        
        header('Location: Maquetado.php');
        
         //$query = 'SELECT * FROM computadora ';
    $result = mysql_query($query) or die ('Fallo la consulta: '.  mysql_error());
    //echo mysql_num_rows($result);  
    //echo '<br/>';
    //echo mysql_fetch_assoc($result);
        ?>
        
    </body>
</html>
