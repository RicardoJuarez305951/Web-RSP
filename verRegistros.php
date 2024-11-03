<!--Juárez Flores Ricardo 305951-->
<!--Fundamentos Web-->
<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="css/globalStyle.css" type="text/css">
        <link rel="stylesheet" href="css/VerRegistrosStyle.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    </head>
    <body>
    <?php
        include "banner.php";
    ?>
        <div class="paginaWeb">
            <div class="container">
                <div class="cont-left">
                    <div class="cont-left-content">
                        <h1>Resultados</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod dapibus euismod.</p>
                    </div>
                    <button class="button">Registrar Informe</button>
                </div>
                <div class="cont-right">
                    <div class="calendario">
                        <table>
                            <tr class="table-top">
                                <th>Fecha</th>
                                <th>Hora Entrada</th>
                                <th>Hora Salida</th>
                                <th>Horas Totales</th>
                            </tr>
                            <tr>
                                <th>13/11/2022</th>
                                <th>00:00</th>
                                <th>04:00</th>
                                <th>04:00</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>