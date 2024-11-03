<!--Juárez Flores Ricardo 305951-->
<!--Fundamentos Web-->
<?php
session_start();
?>


<html>
    <head>
        <link rel="stylesheet" href="css/globalStyle.css" type="text/css">
        <link rel="stylesheet" href="css/indexStyle.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    </head>
    <body>
        <?php
            include "banner.php";
        ?>
        <div class="paginaWeb">
            <div class="menu1">
                <h1>SRHSP</h1>
                <div class="content1">
                    <p>Bienvenido al Sistema de Registro de Horarios de Servicio Social y Práctcias Profesionales <span style="font-weight:bold;">SRHRSP</span> </p>
                    <div class="button"> <a href="RegistroUsuario.php">Registrate</a> </div>
                </div>
            </div>
            <div class="menu2">
                <h1>Características</h1>
                <div class="tabla">
                    <div class="tabla-cont">
                        <div class="tabla-img"></div>
                        <div class="tabla-txt">
                            <h2>Registrar Horas</h1>
                            <p>Puedes registrar tus horas de entradas y salidas, además de que se contaran automáticamente tu avance total.</p>
                        </div>
                    </div>
                    <div class="tabla-cont">
                        <div class="tabla-img"></div>
                        <div class="tabla-txt">
                            <h2>Contacta Servicios</h1>
                            <p>Puedes registrarte para contactarte con asesores que busquen practicantes o becarios.</p>
                        </div>
                    </div>
                    <div class="tabla-cont">
                        <div class="tabla-img"></div>
                        <div class="tabla-txt">
                            <h2>Contacta Alumnos</h1>
                            <p>Si eres asesor puedes registrarte para que otros alumnos te contacten.</p>
                        </div>
                    </div>
                    <div class="tabla-cont">
                        <div class="tabla-img"></div>
                        <div class="tabla-txt">
                            <h2>Control</h1>
                            <p>Mejor control y conteo de horas realizadas para tener las cuentas claras.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu3">
                <div class="content-left">
                    <h1>¿Como Funciona El Sistema?</h1>
                </div>
                <div class="content-right">
                    <div class="content-right-box">
                        <div class="enum">01</div>
                        <div class="content-right-txt">
                            <h2>Registrate</h2>
                            <p>Crea tu cuenta con tus datos y genera un perfil para contactar a diferentes asesores.</p>
                        </div>
                    </div>
                    <div class="content-right-box">
                        <div class="enum">02</div>
                        <div class="content-right-txt">
                            <h2>Busca dónde hacer tu servicio</h2>
                            <p>Busca lugares disponibles para realizar tu servicio social y aplica una solicitud.</p>
                        </div>
                    </div>
                    <div class="content-right-box">
                        <div class="enum">03</div>
                        <div class="content-right-txt">
                            <h2>Haz tus reportes</h2>
                            <p>Una vez aceptada tu solicitud, registra tus horas de entrada y salida.</p>
                            <p>Automáticamente verás tus horas acumuladas y cuánto te falta por cumplir.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php
            include "pie.php";
        ?>
    </body>
</html>