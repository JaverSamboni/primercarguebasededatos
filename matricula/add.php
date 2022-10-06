<?php
  include_once('../config/config.php');
  include('estudiante.php'); 

  if(isset($_POST) && !empty($_POST)){
    $p = new estudiante();
   

    $save = $p->save($_POST);
    if($save){
      $error = '<div class="alert alert-success" role="alert">Estudiante creado correctamente</div>';
      }else{
        $error = '<div class="alert alert-danger" role="alert">Error al crear un estudiante</div>';
      }
  }

?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Creación de estudiante</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php include('../menu.php') ?>
   <div class="container" >
    <?php
    if (isset($error)){
      echo $error;
    }
    ?>
     <h2 class="text-center mb-5" >Completa tus datos</h2>
     <form method="POST" enctype="multipart/form-data" >
      
     <div class="row mb-2"> 
        <div class="col">
          <input type="text" name="nombreestudiante" id="nombreestudiante" Placeholder="Nombre del estudiante" class="form-control" /> 
        </div>
        <div class="col">
         <input type="text" name="documentodeidentidad" id="documentodeidentidad" Placeholder="Número documento de identidad del estudiante" class="form-control"> 
       </div>
      </div>

      <div class="row mb-2">
        <div class="col">
         <input type="date" name="fechanacimiento" id="fechanacimiento" Placeholder="Fecha de nacimiento del estudiante" class="form-control"> 
        </div>
        <div class="col">
         <input type="number" name="gradoamatricular" id="gradoamatricular" Placeholder="Grado 0°,1°,2°,3°,4°,5°" class="form-control"> 
        </div>
      </div>
   
      <div class="row mb-2">
          <div class="col">
              <input type="text" name="padreoacudiente" id="padreoacudiente" Placeholder="Nombre del padre o acudiente" class="form-control"> 
          </div>
          <div class="col">
             <input type="text" name="documentoidentidad" id="documentoidentidad" Placeholder="Número de documento identidad padre o acudiente" class="form-control"> 
          </div>
       </div>

        <div class="row mb-2">
          <div class="col">
              <input type="number" name="telefono" id="telefono" Placeholder="Número de telefono padre o acudiente" class="form-control"> 
          </div>
          <div class="col">
              <input type="text" name="sedeeducativa" id="sedeeducativa" Placeholder="Nombre sede educativa a matricular" class="form-control"> 
           </div>
       </div>


    <button class="btn btn-success"> Registrar </button>
    </form>
  </div>
</body>
</html>