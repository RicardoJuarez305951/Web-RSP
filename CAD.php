<?php

require_once "conexion.php";


class CAD
{
    public $con;

    static public function agregaUsuario($correo,$password,$nombre,$institucion)
    {
        $con = new Conexion();          //Conecta a la BDD

        /*$query = $con->conectar()->prepare("INSERT INTO usuario (nombre,correo,contrasena) VALUES ('$nombre','$correo','$contrasena')");*/
        $query = $con->conectar()->prepare("INSERT INTO usuarios(Correo, Password, Nombre, Institucion, Rol) VALUES ('$correo','$password','$nombre','$institucion',2)");
        if($query->execute())
        {
            echo "El usuario $nombre se ha agregado correctamente";
        }else
        {
            echo "Hubo un error en la BDD";
            print_r($con->conectar()->errorInfo());
        }
    }

    static public function agregaAlumno($idUsuario,$horas)
    {
        $con = new Conexion();          //Conecta a la BDD

        $query = $con->conectar()->prepare("INSERT INTO alumnos(idUsuario,idGrupo,horasACumplir) VALUES($idUsuario,1,$horas)");
        if($query->execute())
        {
            echo "El alumno se ha agregado correctamente";
        }else
        {
            echo "Hubo un error en la BDD";
            print_r($con->conectar()->errorInfo());
        }
    }

    static public function agregaAlumnoVerificaUsuario($correo)
    {
        $con = new Conexion();          //Conecta a la BDD

        $query = $con->conectar()->prepare("SELECT * FROM usuarios WHERE correo = '$correo'");
        if($query->execute())
        {
            $row = $query->fetch(PDO::FETCH_NUM);
            if($row)
            {
                //$_SESSION['idUsuario'] = $row[0];
                return $row[0];
            }
            else
            {
                echo "El usuario no existe";
            }
        }
        else
        {
            echo "Hubo un error en la BDD";
            print_r($con->conectar()->errorInfo());
        }
    }

    static public function verificaUsuario($correo,$password)
    {
        $con = new Conexion();          //Conecta a la BDD

        $query = $con->conectar()->prepare("SELECT * FROM usuarios WHERE correo = '$correo' AND Password = '$password'");
        if($query->execute())
        {
            /*Un registro */
            $row = $query->fetch(PDO::FETCH_NUM);
            if($row)
            {
                //$row[0]." - ".$row[1]." - ".$row[2];
                $_SESSION['idUsuario'] = $row[0];
                $_SESSION['Correo'] = $row[1];
                $_SESSION['Password'] = $row[2];
                $_SESSION['Nombre'] = $row[3];
                $_SESSION['Institucion'] = $row[4];
                $_SESSION['Rol'] = $row[5];
                return true;
            }
            else
            {
                echo "El usuario no existe";
            }
        }
        else
        {
            return false;
        }
    }

    static public function modificaUsuario($datosModificar,$idUsuario)
    {
        $con = new Conexion();          //Conecta a la BDD
        
        $query = $con->conectar()->prepare("UPDATE Usuario SET $datosModificar WHERE idUsuario = $idUsuario");
        if($query->execute())
        {
            echo "El usuario $idUsuario se ha agregado correctamente";
            return 1;
        }else
        {
            echo "Hubo un error en la BDD";
            print_r($con->conectar()->errorInfo());
            return 0;
        }
    }

    static public function consultaHoras($idUsuario)
    {
        $con = new Conexion();          //Conecta a la BDD

        $query = $con->conectar()->prepare("SELECT horasTotales FROM alumnos WHERE idUsuario = '$idUsuario'");
        if($query->execute())
        {
            /*Un registro */
            $row = $query->fetch(PDO::FETCH_NUM);
            if($row)
            {
                //$row[0]." - ".$row[1]." - ".$row[2];
                $_SESSION['HorasTotales'] = $row[0];
                return true;
            }
            else
            {
                echo "Error en la BDD";
            }
        }
        else
        {
            return false;
        }
    }

    static public function traeUsuarios()
    {
        $con = new Conexion();          //Conecta a la BDD

        $query = $con->conectar()->prepare("SELECT * FROM usuario");
        if($query->execute())
        {
            /*Más de un registro */
            $datos=[];
            while($row = $query->fetch(PDO::FETCH_ASSOC))
            {
                $datos[] = $row;
            }

            return $datos;
            //print_r($datos);
        }
        else
        {
            return false;
        }
    }

    static public function eliminaUsuario($idUsuario)
    {
        $con = new Conexion();          //Conecta a la BDD
        
        $query = $con->conectar()->prepare("DELETE FROM Usuario WHERE idUsuario = $idUsuario");
        if($query->execute())
        {
            
            return 1;
        }else
        {
            echo "Hubo un error en la BDD";
            print_r($con->conectar()->errorInfo());
            return 0;
        }
    }

}

?>