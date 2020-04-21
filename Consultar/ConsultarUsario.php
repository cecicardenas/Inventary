<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsultarUsario
 *
 * @author CECI
 */
require_once ("../Clases/Usuario.php");

class ConsultarUsario {
    //put your code here
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>INVENTARIO ELITE</title>
        <link rel="shortcut icon" href="../imagenes/favicon.ico" />
        <style>
            .appicon01
            {
                background: url(../imagenes/appicon/011.png);
            }
            .appicon02
            {
                background: url(../imagenes/appicon/022.png);
            }
            .appicon03
            {
                background: url(../imagenes/appicon/03.png);
            }
            .boton{
                background: url(../imagenes/regresar.png);
            }
            .boton{
                width: 60px;
                height: 60px;
                position:relative;
                display: block;
                /*
                
                text-decoration: none;
                bottom: 10px;
                text-align: center;
                font-family: Verdana, Arial;
                filter: alpha(opacity=30);
                opacity: .3;
                text-align: center;
                */
            }
            .appicon01, .appicon02, .appicon03
            {
                display: block;
                position: absolute;
                width: 160px;
                height: 150px;
            }
            .appicon01:hover, .appicon02:hover, .appicon03:hover
            {
                text-decoration: none;
            }
            .appiconcb
            {
                position: absolute;
                left: 0px;
                bottom: 10px;
                width: 160px;
                height: 25px;
            }
            .appiconc
            {
                position: absolute;
                left: 0px;
                bottom: 10px;
                text-align: center;
                width: 160px;
                height: 25px;
                line-height:25px;
                font-family: Verdana, Arial;
                color: #fff;
                font-size:14px;
                text-decoration:none;
            }
            .appicon01:hover .appiconcb, .appicon02:hover .appiconcb, .appicon03:hover .appiconcb
            {
                background-color: #fff;
                filter: alpha(opacity=30);
                opacity: .3;
            }
            .appicon01:hover .appiconc, .appicon02:hover .appiconc, .appicon03:hover .appiconc
            {
                color: #000;
            }

            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body style="font-family:Arial, Verdana;background-color:#fff; background-image: url(../imagenes/d.jpg);">
        <!-- it works the same with all jquery version from 1.x to 2.x -->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
        <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
        <script type="text/javascript" src="js/jssor.core.js"></script>
        <script type="text/javascript" src="js/jssor.utils.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
        <script>

            jQuery(document).ready(function ($) {
                var options = {
                    $BulletNavigatorOptions: {//[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
                        $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $SpacingX: 25                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    }
                };

                var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                    if (parentWidth) {
                        var sliderWidth = parentWidth;

                        //keep the slider width no more than 800
                        sliderWidth = Math.min(sliderWidth, 800);

                        jssor_slider1.$SetScaleWidth(sliderWidth);
                    }
                    else
                        window.setTimeout(ScaleSlider, 30);
                }

                ScaleSlider();

                if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                    $(window).bind('resize', ScaleSlider);
                }


                //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                //    $(window).bind("orientationchange", ScaleSlider);
                //}
                //responsive code end
            });
        </script>
        <div>

            <a <img src="../imagenes/regresar.png" class=boton href="../index.php" >
                <div class=boton></div>
                <div class=boton>Regresar</div>
            </a>
        </div>
        <br>
        <div>

            <form name="input" action=''>

                <table>
                    <tr>
                        <th>Agencia</th>
                        <th>Nombre</th>
                        <th>Puesto</th>
                        <th>Actividades</th>
                        <th>Departamento</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <tr>
                        <?php
                        $consultar = new Usuario($idusuario, $nombreu, $puesto, $actividad, $idcompu, $idimpre, $idtel, $departamento, $ubicacion, $codigotel, $nempleado);
                        $query = $consultar->consultar();
                        ?>
                    </tr>
                </table>

            </form>

        </div>
        <!-- Bullet Navigator Skin Begin -->
        <style>
            /* jssor slider bullet navigator skin 18 css */
            /*
            .jssorb18 div           (normal)
            .jssorb18 div:hover     (normal mouseover)
            .jssorb18 .av           (active)
            .jssorb18 .av:hover     (active mouseover)
            .jssorb18 .dn           (mousedown)
            */
            .jssorb18 div, .jssorb18 div:hover, .jssorb18 .av
            {
                background: url(../imagenes/b18.png) no-repeat;
                overflow:hidden;
                cursor: pointer;
            }
            .jssorb18 div { background-position: -3px -3px; }
            .jssorb18 div:hover, .jssorb18 .av:hover { background-position: -33px -3px; }
            .jssorb18 .av { background-position: -63px -3px; }
            .jssorb18 .dn, .jssorb18 .dn:hover { background-position: -93px -3px; }

            .jssorb18 .n
            {
                display: none;
                color: #000;
            }
            .jssorb18 div:hover .n, .jssorb18 .av .n, .jssorb18 .av:hover .n, .jssorb18 .dn .n { display: block; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb18" style="position: absolute; bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="position: absolute; width: 24px; height: 24px; text-align: center;
                 line-height: 24px; font-size: 16px;">
                <Numbertemplate class=n></Numbertemplate>
            </div>
        </div>
        <!-- Bullet Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">javascript</a>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>

