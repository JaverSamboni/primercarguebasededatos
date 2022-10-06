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
        $nombreestudiante = $params['nombreestudiante'];
        $documentodeidentidad = $params['documentodeidentidad'];
        $fechanacimiento = $params['fechanacimiento'];
        $gradoamatricular = $params['gradoamatricular'];
        $padreoacudiente = $params['padreoacudiente'];
        $documentoidentidad = $params['documentoidentidad'];
        $telefono = $params['telefono'];
        $sedeeducativa = $params['sedeeducativa'];
      

        $insert = "INSERT INTO matricula VALUES (NULL, '$nombreestudiante', '$documentodeidentidad', '$fechanacimiento', '$gradoamatricular', '$padreoacudiente', '$documentoidentidad', $telefono, '$sedeeducativa') ";
        return mysqli_query($this->conn, $insert);
    }
  

    function getAll(){
        $sql = "SELECT * FROM matricula  ";
        return mysqli_query($this->conn, $sql);
    }


    function getOne($id){
        $sql = "SELECT * FROM matricula WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }

    function update($params){
            
            $nombreestudiante = $params['nombreestudiante'];
            $documentodeidentidad = $params['documentodeidentidad'];
            $fechanacimiento = $params['fechanacimiento'];
            $gradoamatricular = $params['gradoamatricular'];
            $padreoacudiente = $params['padreoacudiente'];
            $documentoidentidad = $params['documentoidentidad'];
            $telefono = $params['telefono'];
            $sedeeducativa = $params['sedeeducativa'];
            $id = $params['id'];
            

            $update = " UPDATE matricula SET nombreestudiante ='$nombreestudiante', documentodeidentidad='$documentodeidentidad', fechanacimiento='$fechanacimiento', gradoamatricular='$gradoamatricular', padreoacudiente='$padreoacudiente', documentoidentidad='$documentoidentidad', telefono='$telefono', sedeeducativa='$sedeeducativa' WHERE id = $id";
            return mysqli_query($this->conn, $update);
    }

    function remove($id){
        $remove = "DELETE FROM matricula WHERE id = $id";
        return mysqli_query($this->conn, $remove);
    }
 }     


