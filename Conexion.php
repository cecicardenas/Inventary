<?php
/**
 * Description of Conexion
 *
 * @author CECI
 */

    
class Conexion {
    /**
private $conexion = mysql_connect('localhost','root', 'Elite17')
        or die ('Fallo la conexión; '.mysql_error());

if ($conexion.  mysql_error()){
    echo 'Fallo la conexión <br/>';
}
    mysql_select_db('inventario',$conexion) or die('No se puede seleccionar la BD');
    $query = 'SELECT * FROM computadora ';
    $result = mysql_query($query) or die ('Fallo la consulta: '.  mysql_error());
    
    echo $result;
    */
    private $servidor = "localhost";
    private $usuario = "root";//sa
    private $contrasena = "Elite17";//RedRoca2010
    private $base = "inventario";
    private $bd;
    
    public function Conectar() {
        
        $link = mysql_connect($this->servidor, $this->usuario, $this->contrasena) or die("No se puede conectar" . mysql_get_last_message());
                
        $bd = mysql_select_db($this->base, $link)or die("El error es: ".mssql_get_last_message());
        
    return $link;
        
    }

    public function getServer() {
        return($this->servidor);
    }

    public function getUser() {
        return($this->usuario);
    }

    public function getPass() {
        return($this->contrasena);
    }

    public function getDB() {
        return($this->bd);
    }

}

    
//}
?>