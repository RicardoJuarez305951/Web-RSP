<!--Juárez Flores Ricardo 305951-->
<!--Fundamentos Web-->

<?php

session_start();

require_once "CAD.php";

if(isset($_POST['correo']) && isset($_POST['password']) && isset($_POST['nombre']) && isset($_POST['institucion']) && isset($_POST['horas']))
{
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $institucion = $_POST['institucion'];
    $horas = $_POST['horas'];

    $cad = new CAD();
    $cad -> agregaUsuario($correo,$password,$nombre,$institucion);
    $idUsuario = $cad -> agregaAlumnoVerificaUsuario($correo);
    $cad -> agregaAlumno($idUsuario,$horas);
    //$cad -> agregaAlumnop($correo,$password,$nombre,$institucion);
}

unset($_POST['correo']);
unset($_POST['password']);
unset($_POST['nombre']);
unset($_POST['institucion']);
unset($_POST['horas']);




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
                <h1>Crear Cuenta</h1>

            <form action="RegistroUsuario.php" method="POST">
                <span>Correo electronico</span>
                <input type="email" required name="correo">
                <br>
                <span>Contraseña</span>
                <input type="password" required name="password"> 
                <br>
                <span>Nombre Completo</span>
                <input type="text" required name="nombre">
                <br>
                <span>Escuela a la que perteneces</span>
                <input type="text" required name="institucion"> 
                <br>
                <span>Horas a cumplir</span>
                <input type="number" required name="horas"> 
                <br>
                <div class="botones">
                <input class="button" id="regBut" type="submit" value="Registrarse">
                </div>
            </form>
            </div>
        </div>
    </body>
</html>