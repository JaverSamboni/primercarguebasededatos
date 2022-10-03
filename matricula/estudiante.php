<?php
 include('../config/config.php');
 include('../config/Database.php');

 class estudiante{
    public $conn;

    function __construct()
    {
        $db = new Database();
        $this->conn = $db->connectToDatabase();
    }

    function save($params){
        $name = $params['nombre estudiante'];
        $identification = $params['documento de identidad'];
        $date = $params['fecha nacimiento'];
        $degree = $params['grado a matricular'];
        $family = $params['padre o acudiente'];
        $identification = $params['documento identidad'];
        $phone = $params['teléfono'];
        $campus = $params['sede educativa'];
        $image = $params['imagen'];

        $insert = "INSERT INTO matricula VALUES (NULL, '$name', '$identification', '$date', '$degree', '$family', '$identification', '$phone', '$campus', '$image' ) ";
        return mysqli_query($this->conn, $insert);
    }
  

    function getAll(){
        $sql = "SELECT * FROM matricula ORDER BY sessionDate ASC ";
        return mysqli_query($this->conn, $sql);
    }


    function getOne($id){
        $sql = "SELECT * FROM matricula WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }

    function update($params){
            $name = $params['nombre'];
            $identification = $params['documento de identidad'];
            $date = $params['fecha de nacimiento'];
            $degree = $params['grado a matricular'];
            $family = $params['padre o acudiente'];
            $identification = $params['documento de identidad'];
            $phone = $params['teléfono'];
            $campus = $params['sede educativa'];
            $id = $params['id'];

            $update = " UPDATE matricula SET nombre ='$name', documento de identidad='$identification', fecha de nacimiento='$date', grado a matricular='$degree', padre o acudiente= '$family', documento de identidad='$identification', teléfono='$phone', sede educativa='$campus', WHERE id = '$id";
            return mysqli_query($this->conn, $update);
    }

    function remove($id){
        $remove = "DELETE FROM matricula WHERE id = $id";
        return mysqli_query($this->conn, $remove);
    }
 }     


