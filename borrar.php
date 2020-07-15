<?php
<<<<<<< HEAD
include 'utility.php';
session_start();

$estudiantes = $_SESSION['estudiantes'];

if(isset($_GET['id'])){
    $estudianteId = $_GET['id'];

    $elementIndex = getIndexElement($estudiantes,'id',$estudianteId);
    unset($estudiantes[$elementIndex]);
    $_SESSION['estudiantes'] = $estudiantes;
=======

include 'utility.php';//sino funciona colocar require_once el problema pasa por que se incluye mas de una vez
include 'estudiante.php';
include 'IServiceBase.php';
include 'EstudianteServiceCookies.php';

$service = new EstudianteServiceCookie();

$isContainId = isset($_GET['id']);


if($isContainId){
    $estudianteId = $_GET['id'];

    $service->Delete($estudianteId);
>>>>>>> 39ea508... proyecto funcional registro de estudiantes POO
}

header("location:index.php");
exit();
?>