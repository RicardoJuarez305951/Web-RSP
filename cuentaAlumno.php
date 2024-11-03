<!--Juárez Flores Ricardo 305951-->
<!--Fundamentos Web-->

<?php
session_start();
require_once "CAD.php";

if(isset($_SESSION['idUsuario']))
{
    $idUsuario = $_SESSION['idUsuario'];
    $cad = new CAD();
    $cad -> consultaHoras($idUsuario);
}
?>

<html>
    <head>
        <link rel="stylesheet" href="css/globalStyle.css" type="text/css">
        <link rel="stylesheet" href="css/loginStyle.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    </head>
    <body>
    <?php
            include "banner.php";
        ?>
        <div class="paginaWeb">
            <div class="contenido">
                <h1>Bienvenido</h1>
                <?php
                echo "<h2>¡Hola ".$_SESSION['Nombre']."!</h2><br>";
                echo "<h2>Llevas ".$_SESSION['HorasTotales']." horas</h2>";
                
                ?>
                <h2></h2>
                <form action="login.php" method="POST">
                    <span>Correo electronico</span>
                    <input type="email" required name="correo">
                    <br>
                    <span>Contraseña</span>
                    <input type="password" required name="password"> 
                    <br>
                    <div class="botones">
                    <input class="button" id="iniBut" type="submit" value="Registrarse">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>