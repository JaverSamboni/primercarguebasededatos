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

<link rel="stylesheet" href="../estilos/estilo.css">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html"><img src="../Carpeta Imagenes/escudo.png" alt=""width = "240xp"></a>
              <!-- nombre de sede centrar y poner al lado del logo -->            
            
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
              <li class="nav-item">
                <a class="nav-link" href="../información.html">Quienes somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../eventos.html">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../matricula/add.php">Matriculate</a>
                <!-- barra de  opciones cambiar el color de las letras en negrita doble-->
                </li>
              </li>
            </ul>
          </div>
        </div>

      </nav>
      <img class="img-art" src="./Carpeta Imagenes/imagen13 banner.jpeg" alt="">
    </header>


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

    <footer>
  <address>CENTRO EDUCATIVO SAN ANTONIO DEL SILENCIO 2022</address>
  <p> © Todos los derechos reservados - Jaemso 2022 </p>
  <div>
     <a href="#" style="color: blue" >facebook - </a>
     <a href="#" style="color: red">Instagram</a>
  </div>
 

  
</footer>

<section class="seccion2">
  <div class="mapa">
    <hr>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.8988598552537!2d-76.99444913554967!3d1.7773299987040827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2f082507073b3d%3A0x35f211cd255ee02e!2sSan%20Lorenzo%2C%20Bol%C3%ADvar%2C%20Cauca!5e0!3m2!1ses!2sco!4v1664214445090!5m2!1ses!2sco" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      

  </div>
    <br>
    <br>

  <div class="seccion3">
    <h3>Contáctenos</h3>
    <p> Vereda San Antonio del Silencio</p>
    <p> Teléfono: 3204627260</p>
    <p> correo: cesanantoniodelsilencio@gmail.com</p>
    <p> Horario de atencion: 7:30 a.m. - 12:30 a.m.</p>
  </div>
</section>
</body>
</html>