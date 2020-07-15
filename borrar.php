<?php

include 'utility.php';//sino funciona colocar require_once el problema pasa por que se incluye mas de una vez
include 'estudiante.php';
include 'IServiceBase.php';
include 'EstudianteServiceCookies.php';

$service = new EstudianteServiceCookie();

$isContainId = isset($_GET['id']);


if($isContainId){
    $estudianteId = $_GET['id'];

    $service->Delete($estudianteId);
}

header("location:index.php");
exit();
?>