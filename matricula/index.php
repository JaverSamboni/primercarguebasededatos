<?php
include('../config/config.php');
include('estudiante.php');
$p = new estudiante();

$allmatricula = $p->getAll();

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->remove($_GET['id']);
    if ($remove) {
        header('Location: ' . ROOT . 'estudiante/index.php');
    } else {
        $msj = "<div class= 'alert alert-danger' rol='alert' > Error al eliminar agenda. </div> ";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudiantes</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php include('../menu.php') ?><!-- revisar, borrar o cambiar  no tengo archivo menu -->
    <div class="container">
        <h2 class="text-center mb-5"> Lista estudiantes </h2>

        <div class="row">
            <?php
            while($estudiante = mysqli_fetch_object($allmatricula)){
                $input = $estudiante->sessionDate;
                echo "<div class='col' >";
                echo "<div class='border border-info p-2'> ";
                echo "<h5>
                        <img src='".ROOT."/images/$estudiante->image' Width='50' heigth='50' />
                        $estudiante->Name
                        </h5> ";
                echo " <p> <b>Fecha:</b> ".date("D", strtotime($input)) . " " . date("d-M-Y H:i", strtotime($input)). "</p>";
                echo "<div class='text-center' ><a class='btn btn-success' href='" . ROOT . "/matricula/edit.php?id=$estudiante->id' > Modificar </a> - <a class='btn btn-danger' href='" . ROOT . "/matricula/index.php?id=$estudiante->id' > Eliminar </a> </div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>

    </div>
    
</body>
</html>