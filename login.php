<!--Juárez Flores Ricardo 305951-->
<!--Fundamentos Web-->

<?php
session_start();
require_once "CAD.php";

if(isset($_POST['correo']) && isset($_POST['password']))
{
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $cad = new CAD();
    if($cad -> verificaUsuario($correo,$password))
    {
        header("Location: index.php");
    }
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
                <h1>Iniciar Sesión</h1>
                
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