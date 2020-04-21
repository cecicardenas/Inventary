<?php

/**
 * Description of ModUsuario
 *
 * @author CECI
 */
class ModUsuario {
    //put your code here
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <?php
        require_once("../Maquetado.php");
        require_once ("../Clases/Usuario.php");
        ?>
        <script>
            $(document).ready(function() {
                $("#button").click(function() {
                    alert("La informacion ha sido guardada exitosamente.");
                });
            });
        </script>
<div id="contenedor">

        <div id="contenido">
            <div id="tabs">
            <?php
                        $com = new Usuario($idusuario, $nombreu, $puesto, $actividad, $idcompu, $idimpre, $idtel, $departamento, $ubicacion, $codigotel, $nempleado);
                        $com->editar_u();
                        ?>
        <fieldset>
            <legend><b>Modificar Usuario:</b></legend>
            <br>
            <!-- Tabs -->
            <h2 class="demoHeaders"></h2>
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Buscar por ID</a></li>
                    <li><a href="#tabs-2">Buscar por Nombre</a></li>
                </ul>

                <div id="tabs-1">
                    
                                <br><br>
                                <form name="input" action="regAsesorVentasMod.php"

                                      <center><table class="tabla">
                                            <tr>
                                                <td align="left">ID Usuario:</td><td> <input type="text" name="cveUsuario"  value="" class="ui-widget-content ui-corner-all" style="font-size:88%;"></td>
                                            </tr>

                                        </table></center>

                                    <br><br>

                                    <button id="button2" type="submit" role="button">Guardar</button>
                                    <button id="button3" type="reset" role="button">Cancelar</button>
                                </form>
                </div>

            </div>
        </fieldset>
        </div>
    </div>
        </div>
</html>
