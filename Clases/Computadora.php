<?php
/**
 * Description of Computadora
 *
 * @author CECI
 */
require_once ("../Conexion.php");

class Computadora {
    private $idcompu, $marcac, $so, $modelo, $precioc, $contratoc, $facturac,$ramc, $ddc, $licenciac, 
            $procesadorc, $ipc, $fcontratoc, $ffacturac,$nombrec, $passcompu, $statusc, $seriecompu;
    
    function __construct($idcompu, $marcac, $so, $modelo, $precioc, $contratoc, $facturac,$ramc, $ddc, $licenciac, $procesadorc, $ipc, $fcontratoc, $ffacturac,$nombrec, $passcompu, $statusc, $seriecompu) {
        $this->setIdCompu($idcompu);
        $this->setMarcac($marcac);
        $this->setSO($so);
        $this->setModelo($modelo);
        $this->setPrecioc($precioc);
        $this->setContratoc($contratoc);
        $this->setFacturac($facturac);
        $this->setRamc($ramc);
        $this->setDdc($ddc);
        $this->setLicenciac($licenciac);
        $this->setProcesadorc($procesadorc);
        $this->setIpc($ipc);
        $this->setFcontratoc($fcontratoc);
        $this->setFfacturac($ffacturac);
        $this->setNombrec($nombrec);
        $this->setPasscompu($passcompu);
        $this->setStatusc($statusc);
        $this->setSeriecompu($seriecompu);
        
    }
    
    public function setIdCompu($x) {
        $this->idcompu = $x;
    }
    
    public function getIdCompu() {
        return $this->idcompu;
    }
    
    public function setMarcac($x) {
        $this->marcac = $x;
    }
    
    public function getMarcac() {
        return $this->marcac;
    }
    
    public function setSO($x){
        $this->so = $x;
    }
    
    public function getSO(){
        return$this->so;
    }
    
    public function setModelo($x){
        $this->modelo = $x;
    }
    
    public function getModelo(){
        return$this->modelo;
    }
    
    public function setPrecioc($x){
        $this->precioc = $x;
    }
    
    public function getPrecioc(){
        return$this->precioc;
    }
    
    public function setContratoc($x){
        $this->contratoc = $x;
    }
    
    public function getContratoc(){
        return$this->contratoc;
    }
    
    public function setFacturac($x){
        $this->facturac = $x;
    }
    
    public function getFacturac(){
        return$this->facturac;
    }
    
    public function setRamc($x){
        $this->facturac = $x;
    }
    
    public function getRamc(){
        return$this->ramc;
    }
    
    public function setDdc($x){
        $this->ddc = $x;
    }
    
    public function getDdc(){
        return$this->ddc;
    }
    
    public function setLicenciac($x){
        $this->licenciac = $x;
    }
    
    public function getLicenciac(){
        return$this->licenciac;
    }
    
    public function setProcesadorc($x){
        $this->procesadorc = $x;
    }
    
    public function getProcesadorc(){
        return$this->procesadorc;
    }
    
    public function setIpc($x){
        $this->ipc = $x;
    }
    
    public function getIpc(){
        return$this->ipc;
    }
    
    public function setFcontratoc($x){
        $this->fcontratoc = $x;
    }
    
    public function getFcontratoc(){
        return$this->fcontratoc;
    }
    
    public function setFfacturac($x){
        $this->ffacturac = $x;
    }
    
    public function getFfacturac(){
        return$this->ffacturac;
    }
    
    public function setNombrec($x){
        $this->nombrec = $x;
    }
    
    public function getNombrec(){
        return$this->nombrec;
    }
    
    public function setPasscompu($x){
        $this->passcompu = $x;
    }
    
    public function getPasscompu(){
        return$this->passcompu;
    }
    
    public function setStatusc($x){
        $this->statusc = $x;
    }
    
    public function getStatusc(){
        return$this->statusc;
    }
    
    public function setSeriecompu($x){
        $this->seriecompu = $x;
    }
    
    public function getSeriecompu(){
        return$this->seriecompu;
    }
    
    public function id_compu(){
        
        $con = new Conexion();
        $db = $con->Conectar();

        $idc = $this->idcompu;

            $stmt = mysql_init('idcompu', $db);
            mysql_bind($stmt, "@nombrec", $this->idcompu, SQLVARCHAR, FALSE, FALSE);

            $rs = mysql_execute($stmt);
            $row = mysql_fetch_assoc($rs);
            
            
            //$idcompu, $marcac, $so, $modelo, $precioc, $contratoc, $facturac,$ramc, $ddc, $licenciac, 
            //$procesadorc, $ipc, $fcontratoc, $ffacturac,$nombrec, $passcompu, $statusc, $seriecompu;
             do {
            echo '<tr>';
            echo '<td>' . $this->setIdCompu($row['idcompu']) . '</td>';
            echo '<td>' . $this->setMarcac($row['marcac']) . '</td>';
            echo '<td>' . $this->setSO($row['so']) . '</td>';
            echo '<td>' . $this->setModelo($row['modelo']) . '</td>';
            echo '<td>' . $this->setPrecioc($row['precioc']) . '</td>';
            echo '<td>' . $this->setContratoc($row['contratoc']) . '</td>';
            echo '<td>' . $this->setFacturac($row['facturac']) . '</td>';
            echo '<td>' . $this->setRamc($row['ramc']) . '</td>';
            echo '<td>' . $this->setDdc($row['ddc']) . '</td>';
            echo '<td>' . $this->setLicenciac($row['licenciac']) . '</td>';
            echo '<td>' . $this->setProcesadorc($row['procesadorc']) . '</td>';
            echo '<td>' . $this->setIpc($row['ipc']) . '</td>';
            echo '<td>' . $this->setFcontratoc($row['fcontratoc']) . '</td>';
            echo '<td>' . $this->setFfacturac($row['ffacturac']) . '</td>';
            echo '<td>' . $this->setNombrec($row['nombrec']) . '</td>';
            echo '<td>' . $this->setPasscompu($row['passcompu']) . '</td>';
            echo '<td>' . $this->setStatusc($row['statusc']) . '</td>';
            echo '<td>' . $this->setSeriecompu($row['seriecompu']) . '</td>';
            echo '</tr>';
        } while ($row = mysql_fetch_assoc($rs));
    
        echo $row;
    }
}
?>