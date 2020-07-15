<?php 
<<<<<<< HEAD
include 'utility.php';
session_start();

$_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

$listaEstudiante = $_SESSION['estudiantes'];

if(!empty($listaEstudiante)){
    if(isset($_GET['carreraId'])){
       $listaEstudiante = searchProperty($listaEstudiante,'carrera',$_GET['carreraId']);
=======

include 'utility.php';//sino funciona colocar require_once el problema pasa por que se incluye mas de una vez
include 'estudiante.php';
include 'IServiceBase.php';
include 'EstudianteServiceCookies.php';

$utilities = new Utilities();
$service = new EstudianteServiceCookie();

$listaEstudiante = $service->GetList();

if(!empty($listaEstudiante)){
    
    if(isset($_GET['carreraId'])){
            
       $listaEstudiante = $utilities->searchProperty($listaEstudiante,'carrera',$_GET['carreraId']);
>>>>>>> 39ea508... proyecto funcional registro de estudiantes POO
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<div class="container jumbotron mt-3">
    <h1 class="text-primary">AGREGAR ESTUDIANTES </h1>
<<<<<<< HEAD
    <a href="agregarEstudiantes.php" class="btn btn-success">Agregar nuevo estudiante</a>
=======
    <a href="agregar.php" class="btn btn-success">Agregar nuevo estudiante</a>
>>>>>>> 39ea508... proyecto funcional registro de estudiantes POO
</div>


<p class="container text-primary">Filtrar</p>
<div class="btn-group container" style="margin-left:5rem">
    <a href="index.php" class="btn btn-primary">Todos</a>
    <a href="index.php?carreraId=1" class="btn btn-primary">Redes</a>
    <a href="index.php?carreraId=2" class="btn btn-primary">Software</a>
    <a href="index.php?carreraId=3" class="btn btn-primary">Multimedia</a>
    <a href="index.php?carreraId=4" class="btn btn-primary">Mecatronica</a>
    <a href="index.php?carreraId=5" class="btn btn-primary">Seguridad Informatica</a>
</div>

<div class="container jumbotron">   
    <h1 class="text-primary">LISTA DE ESTUDIANTES </h1>         
        <hr>
    <div class="row">

        <?php if(empty($listaEstudiante)): ?>
                <h1 >No Tiene ningun Registro</h1>
<<<<<<< HEAD
                <a href="agregarEstudiantes.php"><button class="btn btn-success ml-3 mt-2">Pulse aqui para agregar estudiante</button></a>
=======
                <a href="agregar.php"><button class="btn btn-success ml-3 mt-2">Pulse aqui para agregar estudiante</button></a>
>>>>>>> 39ea508... proyecto funcional registro de estudiantes POO
            <?php else: ?>
            
                <?php foreach ($listaEstudiante as $estudiante): ?>

                    <div class="col-4">
                        <div class="card mt-5" style="width: 18rem;">
<<<<<<< HEAD
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $estudiante['nombre']; ?></h4>
                                <h4 class="card-subtitle mb-2 text-muted"><?php echo $estudiante['apellido']; ?></h4>
                                <p class="card-text text-muted"><?php echo getCompanyName($estudiante['carrera']); ?></p>
                                <h7 class="card-title"><label for="estado" class="text-success">Estado:</label><?php echo $estudiante['estado']; ?></h7>
                                <hr>
                                <a href="editar.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Editar</a>
                                <a href="borrar.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Borrar</a>
=======

                        <img class="bd-placeholder-img card-img-top" src="<?php echo 'fotoEstudiante/'.$estudiante->profilePhoto; ?>" width="100%" height="200" aria-label="Placeholder: Thumbnail"></img>

                            <div class="card-body">
                                <h4 class="card-title"><?php echo $estudiante->nombre; ?></h4>
                                <h4 class="card-subtitle mb-2 text-muted"><?php echo $estudiante->apellido; ?></h4>
                                <p class="card-text text-muted"><?php echo $estudiante->getCompanyName(); ?></p>
                                <h7 class="card-title"><label for="estado" class="text-success">Estado:</label><?php echo $estudiante->estado; ?></h7>
                                <hr>
                                <a href="editar.php?id=<?php echo $estudiante->id; ?>" class="card-link">Editar</a>
                                <a href="borrar.php?id=<?php echo $estudiante->id; ?>" class="card-link">Borrar</a>
>>>>>>> 39ea508... proyecto funcional registro de estudiantes POO
                            </div>
                        </div>
                    </div> 
                <?php endforeach ?>  
        <?php endif; ?>
    </div> 

</div>

</body>
</html>