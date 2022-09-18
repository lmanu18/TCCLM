<?php
include_once "conecta.php" ;

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

$sql = "INSERT INTO medico (nome, datanasc, tipodocert, certificado, email, telefone, area, foto, endereco, cidade, estado, bio, sexo)
VALUES (\"$nome\", \"$datanasc\", \"$tipodocert\", \"$certificado\", \"$email\", \"$telefone\",\"$area\", \"$foto\", \"$endereco\", \"$cidade\", \"$estado\", \"$bio\", \"$sexo\")";

mysqli_query($conexao,$sql);