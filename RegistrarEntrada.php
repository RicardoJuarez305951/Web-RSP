<!--Juárez Flores Ricardo 305951-->
<!--Fundamentos Web-->
<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="css/globalStyle.css" type="text/css">
        <link rel="stylesheet" href="css/RegistrarEntradaStyle.css" type="text/css">
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
                        <h1>Registrar Entrada de Alumno</h1>
                        <h2>Por favor, ingrese el UserID del Alumno</h2>
                        <input class="tiempo" type="time"> <br><br>
                        <input class="nombre" type="text" name="" id="">
                    </div>
                    <div class="button">
                        <p>Registrar</p>
                    </div>
                </div>
                <div class="cont-right"> </div>
            </div>
        </div>
    </body>
</html>