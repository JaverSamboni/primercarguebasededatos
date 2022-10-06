<?php
include('../config/config.php');
include('estudiante.php');
$p = new estudiante();
$data = mysqli_fetch_object($p->getOne($_GET['id']));
$date = new DateTime($data->fechanacimiento);

if (isset($_POST) && !empty($_POST)){
 
    $update = $p->update($_POST);
    if ($update){
        $error = '<div class="alert alert-success" role="alert">estudiante modificado correctamente</div>';
    }else{
        $error = '<div class="alert alert-danger" role="alert" > Error al modificar un estudiante </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar estudiante</title>
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <?php include('../menu.php') ?>
    <div class="container">
      <?php
      if(isset($error)){
       echo $error;
      }
      ?>
       <h2 class="text-center mb-5"> Modificar estudiante </h2>
       <form method= "POST" enctype= "multipart/form-data">
            <div class="row mb-2"> 
                <div class="col">
                    <input type="text" name="nombreestudiante" id="nombreestudiante" Placeholder="Nombre estudiante" require class="form-control" value="<?= $data->nombreestudiante?>"/> 
                    <input type="hidden" name="id" id="id" value="<?=$data->id?>"/>
                </div>
                <div class="col">
                    <input type="text" name="documentodeidentidad" id="documentodeidentidad" Placeholder="Número documento de identidad del estudiante" requiere class="form-control" value="<?= $data->documentodeidentidad?>"/> 
                 </div>
                </div>

                        <div class="row mb-2">
                    <div class="col">
                       <input type="date" name="fechanacimiento" id="fechanacimiento" Placeholder="Fecha de nacimiento del estudiante" requiere class="form-control" value="<?= $data->fechanacimiento?>"/> 
                   </div>
                      <div class="col">
                        <input type="number" name="gradoamatricular" id="gradoamatricular" Placeholder="Grado 0°,1°,2°,3°,4°,5°" requiere class="form-control" value="<?= $data->gradoamatricular?>"/> 
                   </div>
                  </div>

       <div class="row mb-2">
          <div class="col">
              <input type="text" name="padreoacudiente" id="padreoacudiente" Placeholder="Nombre del padre o acudiente" requiere class="form-control" value="<?= $data->padreoacudiente?>"/> 
          </div>
          <div class="col">
             <input type="text" name="documentoidentidad" id="documentoidentidad" Placeholder="Número de documento identidad padre o acudiente" requiere class="form-control" value="<?= $data->documentoidentidad?>"/> 
          </div>
       </div>

       <div class="row mb-2">
          <div class="col">
              <input type="text" name="telefono" id="telefono" Placeholder="Número de telefono padre o acudiente" requiere class="form-control" value="<?= $data->telefono?>"/> 
          </div>
          <div class="col">
              <input type="text" name="sedeeducativa" id="sedeeducativa" Placeholder="Nombre sede educativa a matricular" requiere class="form-control" value="<?= $data->sedeeducativa?>"/> 
           </div>
       </div>
       

       <button class="btn btn-success"> Modificar </button>
       </form>                 
   </div>
</body>
 
</html>