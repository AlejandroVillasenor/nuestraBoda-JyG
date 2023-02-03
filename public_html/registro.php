<?php
include_once('db.php');
//Recibe los datos del formulario
$nombres=$_POST['nombre'];
$telefono=$_POST['telefono'];
$asistencia=$_POST['asistencia'];
$parentesco=$_POST['parentesco'];
$mensaje=$_POST['mensaje'];

$ip = $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];
$secretkey = "6LfLbkoiAAAAAGDB880HtqLwSIueXiI-4Add7fnT";
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

$atributos = json_decode($response,TRUE);

if(!$atributos['success']){
    /* Cambiamos el valor del imput captcha a falso que esta en el index.html*/
    header("Location: index.php?error=Error en el captcha, confirma que eres humano...");
    die();
}else{
    /* Cambiamos el valor del imput captcha a verdadero que esta en el index.html*/
    echo "<script>document.getElementById('captcha').value = 'true';</script>";
    $conectar=connect();//Conexion a la base de datos
    $sql="INSERT INTO asistentes (nombres, telefono, asistencia, parentesco, mensaje)
    VALUES ('$nombres','$telefono','$asistencia','$parentesco','$mensaje')";
    $resul = mysqli_query($conectar,$sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar), E_USER_ERROR);
    if ($resul) {
        //volver a la pagina principal
        echo "<script>alert('Formulario enviado de forma exitosa.'); window.location.href = 'index.php';</script>";
    } 
}
?>