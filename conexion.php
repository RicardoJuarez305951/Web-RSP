<?php

#clase
class Conexion
{
    #atributos
    private $host;      //Localhost o IP
    private $db;        //Nombre de la BDD -> usuarios
    private $usuario;    //Usuario de la BDD -> root
    private $pass;      //Contraseña de la BD -> ""
    private $charset;   //utf8

    #Constructor
    public function __construct()
    {
        $this->host = "localhost";
        $this->db = "srhsp2";
        $this->usuario = "root";
        $this->pass = "";
        $this->charset = "utf8";
    }

    #Método Conectar
    public function conectar()
    {
        #Conectar a la DB -> PDO
        $com = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
        $enlace = new PDO($com, $this->usuario, $this->pass);
        #print_r($enlace);
        return $enlace;
    }
}

?>