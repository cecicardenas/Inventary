<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsultarCompu
 *
 * @author CECI
 */

        require_once ("../Clases/Computadora.php");   
        if($idcompu != null){
        $compu = new Computadora($idcompu, $marcac, $so, $modelo, $precioc, $contratoc, $facturac,$ramc, $ddc, $licenciac, $procesadorc, $ipc, $fcontratoc, $ffacturac,$nombrec, $passcompu, $statusc, $seriecompu);
        $compu ->consultarID();
        }
        ?>
        
        <script type="text/javascript">
            
            $(function() {
                $( "#accordion" ).accordion( "option", "active", 1 );
                $('#v').trigger('click');
            });
         </script>
        <div id="contenedor">
            <div id="contenido">
                <form name="input" action="../Clases/Computadora.php">
        <fieldset>
            <br>
            <legend><b>Computadora:</b></legend>


            <center><table  class="tabla" >

                    <tr>
                        <td align="left">ID Computadora:</td><td> <input type="text" name="idcompu" value="" class="ui-widget-content ui-corner-all" style="font-size:88%;"></td>
                    </tr>

                </table></center>

        </fieldset>
        <br><br>


        <center><button id="button3" type="submit" role="button">Buscar</button>
            <button id="button4" type="reset" role="button">Cancelar</button></center>

    </form>
                
                <form name="input" action="button3">

                        <table id="customerss" border="1"  class="tabla3">

                            <tr>

                                <th>ID Computadora</th>
                                <th>Marca</th>
                                <th>SO</th>
                                <th>Modelo</th> 
                                <th>Precio</th>                 
                                <th>Contrato</th>
                                <th>Factura</th>
                                <th>RAM</th>
                                <th>DD</th>
                                <th>Licencia</th>
                                <th>Procesador</th>
                                <th>Dir IP</th>
                                <th>Fecha Contrato</th>
                                <th>Fecha Factura</th>
                                <th>Nombre</th>
                                <th>Contraseña</th>
                                <th>Status</th>
                                <th>Serie</th> 
                            </tr>


                            <tr>
                                <?php
                                require_once ("../Clases/Computadora.php");
                                 $idcompu = new Computadora($idcompu, $marcac, $so, $modelo, $precioc, $contratoc, $facturac, $ramc, $ddc, $licenciac, $procesadorc, $ipc, $fcontratoc, $ffacturac, $nombrec, $passcompu, $statusc, $seriecompu);
                                 $idcompu->id_compu();
                                
                                ?>
                            </tr>

                        </table>  
                        <br></br>
                        <!--<button id="button2" type="submit" role="button">Regresar</button>-->

                    </form>
                </div>
</div>
</body>
</html>