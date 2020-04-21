<?php

/**
 * Description of Usuario
 *
 * @author CECI
 */
require_once ("../Conexion.php");

$con = new Conexion();
$db = $con->Conectar();

class Usuario {

    private $idusuario, $nombreu, $puesto, $actividad, $idcompu, $idimpre, $idtel,
            $departamento, $ubicacion, $codigotel, $nempleado;

    function __construct($idusuario, $nombreu, $puesto, $actividad, $idcompu, $idimpre, $idtel, $departamento, $ubicacion, $codigotel, $nempleado) {
        $this->setIdUsuario($idusuario);
        $this->setNombreu($nombreu);
        $this->setPuesto($puesto);
        $this->setActividad($actividad);
        $this->setIdCompu($idcompu);
        $this->setIdImpre($idimpre);
        $this->setIdTel($idtel);
        $this->setDepartamento($departamento);
        $this->setUbicacion($ubicacion);
        $this->setCodigoTel($codigotel);
        $this->setNempleado($nempleado);
    }

    public function setIdUsuario($x) {
        $this->idusuario = $x;
    }

    public function getIdUsuario() {
        return $this->idusuario;
    }

    public function setNombreu($x) {
        $this->nombreu = $x;
    }

    public function getNombreu() {
        return $this->nombreu;
    }

    public function setPuesto($x) {
        $this->puesto = $x;
    }

    public function getPuesto() {
        return $this->puesto;
    }

    public function setActividad($x) {
        $this->actividad = $x;
    }

    public function getActividad() {
        return $this->actividad;
    }

    public function setIdCompu($x) {
        $this->idcompu = $x;
    }

    public function getIdCompu() {
        return $this->idcompu;
    }

    public function setIdImpre($x) {
        $this->idimpre = $x;
    }

    public function getIdImpre() {
        return $this->idimpre;
    }

    public function setIdTel($x) {
        $this->idtel = $x;
    }

    public function getIdTel() {
        return $this->idtel;
    }

    public function setDepartamento($x) {
        $this->departamento = $x;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setUbicacion($x) {
        $this->ubicacion = $x;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function setCodigoTel($x) {
        $this->codigotel = $x;
    }

    public function getCodigoTel() {
        return $this->codigotel;
    }

    public function setNempleado($x) {
        $this->nempleado = $x;
    }

    public function getNempleado() {
        return $this->nempleado;
    }

    /* ______________________________________________________________________ */

    public function consultar() {

        $con = new Conexion();
        $db = $con->Conectar();

        $rs = "CALL consultarusu()";

        $rs = mysql_query($rs);
        $row = mysql_fetch_assoc($rs);

        do {
            echo '<tr>';
            echo '<td>' . $row['ubicacion'] . '</td>';
            echo '<td>' . $row['nombreu'] . '</td>';
            echo '<td>' . $row['puesto'] . '</td>';
            echo '<td>' . $row['actividades'] . '</td>';
            echo '<td>' . $row['departamento'] . '</td>';
            echo '<td><div class=boton><img class="editar" src="../imagenes/editar.png" style="width:40px;" title="Editar">' . $this->editar_u() . '</td>';
            echo '<td><img class="borrar" src="../imagenes/borrar.png" style="width:40px;" title="Borrar">' . $this->borrar_u() . '</td>';
            /*
              echo '<td><div class=boton><img class="editar" src="../imagenes/editar.png" style="width:40px;" title="Editar" onclick=window.open("../Modificar/ModUsuario.php")></div></td>';
              echo '<td><img class="borrar" src="../imagenes/borrar.png" style="width:40px;" title="Borrar"></td>';
             */
            echo '</tr>';
        } while ($row = mysql_fetch_assoc($rs));
    }

    public function editar_u() {
        $con = new Conexion();
        $db = $con->Conectar();

        $rs = "CALL editar_u()";

        $rs = mysql_query($rs);
        $row = mysql_fetch_assoc($rs);
        
        
    }

    public function borrar_u() {
        
    }

}
