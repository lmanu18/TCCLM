<?php

include_once "conexao/conecta.php" ;

$idmed = $_POST['idmed'] ;
$nome = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$tipodocert	= $_POST['tipocert'];
$certificado = $_POST['certificado'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$area = $_POST['area'];
$foto = $_POST['foto'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado	= $_POST['estado'];
$bio = $_POST['bio'];
$sexo = $_POST['sexo'];


$sql = "UPDATE medico SET nome = '$nome', datanasc = '$datanasc', tipodocert = '$tipodocert', certificado = '$certificado', 
email = '$email', telefone = '$telefone', area = '$area', foto = '$foto', endereco = '$endereco', cidade = '$cidade',
estado = '$estado', bio = '$bio', sexo = '$sexo' WHERE idmed = $idmed " ;

$resultado = mysqli_query ($conexao, $sql) ; 
mysqli_close ($conexao) ;

if ($resultado) {
    header ("Location: listamedicos.php") ;
}
