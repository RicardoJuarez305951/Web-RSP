<!--Juárez Flores Ricardo 305951-->
<!--Fundamentos Web-->
<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="css/globalStyle.css" type="text/css">
        <link rel="stylesheet" href="css/MasInfoStyle.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    </head>
    <body>
        <?php
            include "banner.php";
        ?>
        <div class="paginaWeb">
            <div class="container">
                <div class="container-3d" id="uno">
                    <h1>Descrpición</h1>
                    <p><span>Dirección: </span>Av. Dr. Manuel Nava 304, Zona Universitaria, 78210 San Luis, S.L.P.                    </p>
                    <p><span>Tel: </span>123-4567-890</p>
                    <p><span>Correo: </span>A305951@alumnos.uaslp.mx</p>
                    <p><span>Encargado: </span>Ricardo Juárez Flores</p>
                    <p><span>Tipo: </span>SS</p>
                    <p><span>Descrpición: </span>Se busca alumno con conocimientos en desarrollo web.</p>
                </div>
                <div class="container-3d" id="dos">
                    <h1>Descrpición</h1>
                    
                </div>
                <div class="container-3d" id="tres">
                    <h1>Requisitos</h1>
                    
                </div>
            </div>
            <button class="button">Postularme</button>
            <?php
                include "pie.php";
            ?>
        </div>
        
    </body>
</html>