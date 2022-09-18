<?php

include_once "conecta.php" ;
if(!isset($_SESSION)){
    session_start();
}
$msg = $_POST['msg'];

$sql = "INSERT INTO `forum`( `msg`, `IDusuario`) VALUES ('$msg','$_SESSION[idpaciente]')";
$resultado = mysqli_query($conexao, $sql);
$url = $_SERVER['HTTP_REFERER'];
if($resultado){
    echo "funcinou";
    header("location:$url");
}