
<?php
include_once "conecta.php" ;

$idpaciente = $_POST['idpaciente'] ;
$datanasc = $_POST['datanasc'] ; 
$cpf = $_POST['CPF'] ;
$email = $_POST['email'] ;
$endereco = $_POST['endereco'] ;
$cidade = $_POST['city'] ;
$estado = $_POST['estado'] ;
$nome = $_POST['nome'] ;
$telefone = $_POST['fone'] ;
$foto = $_POST['foto'] ;
$senha = $_POST['senha'] ;

$sql = "UPDATE paciente SET datanasc = '$datanasc', cpf = '$cpf', email = '$email', endereco = '$endereco',
cidade = '$cidade', estado = '$estado', nome = '$nome', telefone = '$telefone', foto = '$foto', senha = '$senha'" ;

$resultado = mysqli_query ($conexao, $sql) ; 
mysqli_close ($conexao) ; 
 