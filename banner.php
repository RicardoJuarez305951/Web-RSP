<?php

    if(isset($_SESSION['idUsuario']))
    {
        if($_SESSION['Rol'] == '1')
        {
            include "bannerAsesor.php";
        }

        if($_SESSION['Rol'] == '2')
        {
            include "bannerAlumno.php";
        }
    }
    else
    {
        include "bannerGeneric.php";
    }
?>