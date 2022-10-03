<?php
class Database
{
    public $host = 'localhost';//servidor
    public $user = 'root';//usuario de phpMyadmin
    public $pass = '';//contraseña de phpMyadmin
    public $db = 'estudiantes';//base de datos
    private $conn;

    function __construct()
    {
        $this->conn =$this->connectToDatabase();
        return $this->conn;
    }

   /**
    * Metodo constructor, este metodo sera el primero que se ejecute al momento de llamar la clase database.
    */
    function connectToDatabase()
    {
       $conn = mysqli_connect( $this->host, $this->user, $this->pass, $this->db);//hacemos un llamado a la funcion connecttodatabase
        
        if(mysqli_connect_error()) {
            echo 'Error de Conexión' . mysqli_connect_error();
        }
        return $conn;//retornamos la conexion.
    }
}

